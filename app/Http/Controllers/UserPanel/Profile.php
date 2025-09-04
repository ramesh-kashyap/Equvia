<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Mail\Sendmail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Bank;
use App\Models\UserLogin;
use App\Models\Investment;
use App\Models\PasswordReset;
use App\Models\Claim;
use App\Models\Task;
use App\Models\Income;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class Profile extends Controller
{

    public function index()
    {
        $user = Auth::user();
        $profile_data = User::where('id', $user->id)->orderBy('id', 'desc')->first();
        $this->data['login_logs'] = UserLogin::where('user_id', $user->id)->orderBy('id', 'DESC')->limit(10)->get();
        $this->data['pendingDeposit'] = Investment::where('user_id', $user->id)->where('status', 'Pending')->orderBy('id', 'DESC')->sum('amount');
        $user_direct = User::where('sponsor', $user->id)->where('active_status', 'Active')->count();

        $this->data['user_direct'] = $user_direct;

        $this->data['profile_data'] = $profile_data;

        $this->data['page'] = 'user.profile.profile-setting';
        return $this->dashboard_layout();
    }

    public function my_level_team($userid, $level = 3)
    {
        $arrin = array($userid);
        $ret = array();

        $i = 1;
        while (!empty($arrin)) {
            $alldown = User::select('id')->whereIn('sponsor', $arrin)->get()->toArray();
            if (!empty($alldown)) {
                $arrin = array_column($alldown, 'id');
                $ret[$i] = $arrin;
                $i++;

                if ($i > $level) {
                    break;
                }
            } else {
                $arrin = array();
            }
        }

        $final = array();
        if (!empty($ret)) {
            array_walk_recursive($ret, function ($item, $key) use (&$final) {
                $final[] = $item;
            });
        }


        return $final;
    }



    public function wallets()
    {
        $user = Auth::user();
        $profile_data = User::where('id', $user->id)->orderBy('id', 'desc')->first();
        $this->data['login_logs'] = UserLogin::where('user_id', $user->id)->orderBy('id', 'DESC')->limit(10)->get();
        $this->data['profile_data'] = $profile_data;
        $this->data['page'] = 'user.profile.wallets';
        return $this->dashboard_layout();
    }


    public function change_password()
    {
        $this->data['page'] = 'user.profile.ChangePass';
        return $this->dashboard_layout();
    }


    public function ChangeMail()
    {
        $this->data['page'] = 'user.profile.ChangeMail';
        return $this->dashboard_layout();
    }


    public function bindMail()
    {
        $this->data['page'] = 'user.profile.bindMail';
        return $this->dashboard_layout();
    }


    public function change_trx_password()
    {
        $this->data['page'] = 'user.profile.ChangeSecurityPass';
        return $this->dashboard_layout();
    }

    public function codeVerify()
    {
        $this->data['page'] = 'user.profile.codeVerify';

        return $this->dashboard_layout();
    }

    public function codeVerifyPassword()
    {
        $this->data['page'] = 'user.profile.codeVerifyPassword';

        return $this->dashboard_layout();
    }



    public function showinfo()
    {
        $this->data['page'] = 'user.profile.info';

        return $this->dashboard_layout();
    }

    public function terms()
    {
        $this->data['page'] = 'user.profile.terms';

        return $this->dashboard_layout();
    }


    public function BankDetail()
    {
        $user = Auth::user();
        $bank = Bank::where('user_id', $user->id)->first();
        $this->data['bank_value'] = $bank;
        $this->data['page'] = 'user.profile.BankDetail';
        return $this->dashboard_layout();
    }

    public function share()
    {
        $user = Auth::user();

        $sponsorCode = 'YOUR_SPONSOR_CODE';  // Set your sponsor code
        $url = url("/register?ref=$user->username");  // Generate the URL    
        $this->data['qrImage'] = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=$url&format=png";
        $this->data['page'] = 'user.profile.reffrel';
        return $this->dashboard_layout();
    }

    public function profile_update(Request $request)
    {
        try {
            $validation =  Validator::make($request->all(), [
                // 'email' => 'required|string',
                'name' => 'required|string',
                'country' => 'required|string',
                // 'city' => 'required',
                // 'zipCode' => 'required',
                // 'usdtAddress' => 'required',
                // 'lastname' => 'required',
                'phone' => 'required|numeric'

            ]);
            if ($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            $user = Auth::user();
            $id = Auth::user()->id;

            //check if email exist
            $post_array  = $request->all();

            $update_data['name'] = $post_array['name'];
            $update_data['phone'] = $post_array['phone'];
            $update_data['telegram'] = $post_array['telegram'];
            $update_data['country'] = $post_array['country'];
            //   $update_data['zipCode']=$post_array['zipCode'];
            //   $update_data['city']=$post_array['city'];
            //   $update_data['lastname']=$post_array['lastname'];
            //   if(empty($user->usdtTrc20) )
            //   {
            //     $update_data['usdtTrc20']=$post_array['usdtTrc20'];    

            //   }
            if (empty($user->usdtBep20)) {
                $update_data['usdtBep20'] = $post_array['usdtBep20'];
            }


            $user =  User::where('id', $id)->update($update_data);


            $notify[] = ['success', 'Profile Updated successfully'];
            return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            dd($e->getMessage());
            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }


    public function wallet_update(Request $request)
    {
        try {

            $user = Auth::user();
            $id = Auth::user()->id;

            //check if email exist

            $code = verificationCode(6);

            PasswordReset::where('email', $user->email)->delete();

            $password = new PasswordReset();
            $password->email = $user->email;
            $password->token = $code;
            $password->created_at = \Carbon\Carbon::now();
            $password->save();

            sendEmail($user->email, 'Your One-Time Password', [
                'name' => $user->name,
                'code' => $code,
                'purpose' => 'Receiver Payment wallet',
                'viewpage' => 'one_time_password',

            ]);
            $userID = $user->id;
            session()->put('usdtTrc20', $request->usdtTrc20);
            session()->put('usdtBep20', $request->usdtBep20);
            $notify[] = ['success', 'Wallet Change email sent successfully'];
            return redirect()->route('user.codeVerify')->withNotify($notify);
        } catch (\Exception $e) {
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());

            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }

    public function storeMail(Request $request)
    {
        $request->validate([
            'email' => 'email|unique:users,email,' . Auth::id(),
        ]);

        $user = Auth::user();
        $user->update([
            'email' => $request->email,
        ]);


        $notify[] = ['success', ' Email change  successfully'];

        return redirect()->back()->withNotify($notify);
    }





    public function bindemail_action(Request $request)
    {
        try {

            $user = Auth::user();
            $id = Auth::user()->id;


            $request->validate(['code' => 'required', 'emailId' => 'required']);
            $code = $request->code;

            if (PasswordReset::where('token', $code)->where('email', $request->emailId)->count() != 1) {
                $notify[] = ['error', 'Invalid token'];
                return redirect()->route('user.bindMail')->withNotify($notify);
            }


            $emailId = $request->emailId;

            $emailExist = User::where('email', $emailId)->where('active_status', '!=', 'Block')->first();

            if ($emailExist) {
                return Redirect::back()->withErrors('email Id already used');
            }
            $user->email = $emailId;

            $user->save();
            $notify[] = ['success', 'Your Bind Email Successfully.'];

            return redirect()->route('user.bindMail')->withNotify($notify);
        } catch (\Exception $e) {
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());

            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }



    public function changeEmailAction(Request $request)
    {
        try {

            $user = Auth::user();
            $id = Auth::user()->id;

            $validation =  Validator::make($request->all(), [
                'first_code' => 'required',
                'second_code' => 'required|',
                'newEmail' => 'required|email|unique:users,email,' . $request->newEmail

            ]);
            if ($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }

            $code = $request->first_code;

            if (PasswordReset::where('token', $code)->where('email', $user->email)->count() != 1) {
                $notify[] = ['error', 'Invalid token'];
                return redirect()->route('user.ChangeMail')->withNotify($notify);
            }

            $code = $request->second_code;
            if (PasswordReset::where('token', $code)->where('email', $request->newEmail)->count() != 1) {
                $notify[] = ['error', 'Invalid New Email token'];
                return redirect()->route('user.ChangeMail')->withNotify($notify);
            }
            date_default_timezone_set('Asia/Kolkata');
            $today = date("Y-m-d H:i:s");
            $emailId = $request->newEmail;
            $user->email = $emailId;
            $user->detail_changed_date = $today;

            $user->save();
            $notify[] = ['success', 'Your Change Email Successfully.'];

            return redirect()->route('user.ChangeMail')->withNotify($notify);
        } catch (\Exception $e) {
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());

            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }


    public function wallet_change(Request $request)
    {
        $request->validate([
            'walletAddress'     => 'required|string|max:255',
            'selected_mainnet'  => 'required|in:TRC20,BEP20',
            // 'code' => 'required'
        ]);

        $user = Auth::user();
        // dd($request->all());

        $code = $request->code;
        if (PasswordReset::where('token', $code)->where('email', $user->email)->count() != 1) {
            $notify[] = ['error', 'Invalid token'];
            return redirect()->route('user.wallets')->withNotify($notify);
        }



        if ($request->selected_mainnet === 'TRC20') {
            $user->usdtTrc20 = $request->walletAddress;
        } else {
            $user->usdtBep20 = $request->walletAddress;
        }

        $user->save();

        $notify[] = ['success', 'Your  wallets changed Successfully.'];

        return redirect()->route('user.wallets')->withNotify($notify);
    }


    public function old_password()
    {
        $this->data['page'] = 'user.profile.old_password';
        return $this->dashboard_layout();
    }

    // send code for validation 
    public function sendCode(Request $request)
    {

        $user = Auth::user();
        $code = verificationCode(6);

        $emailId = $request->emailId;
        if ($emailId != "") {
            $emailId = $emailId;
        } else {
            $emailId = $user->email;
        }

        PasswordReset::where('email', $emailId)->delete();

        $password = new PasswordReset();
        $password->email = $emailId;
        $password->token = $code;
        $password->created_at = \Carbon\Carbon::now();
        $password->save();

        // sendEmail($emailId, 'Your One-Time Password', [
        //     'name' => $user->name,
        //     'code' => $code,
        //     'purpose' => 'Change Password',
        //     'viewpage' => 'one_time_password',

        // ]);

        return true;
    }


    public function change_password_post(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'code' => 'required',
            'password' => 'required|confirmed|min:5',
        ]);

        $user = User::where('email', $request->email)->first();

        if (!$user) {
            return back()->withErrors(['email' => 'No user found with this email.']);
        }


        $user->password = bcrypt($request->password);
        $user->PSR = $request->password;
        $user->save();
        $notify[] = ['success', 'Password updated successfully'];
        return redirect()->back()->withNotify($notify);
    }


    // public function change_password_post(Request $request)
    // {
    //     try {
    //         $data = $request->all();
    //         $rules = array('password' => 'required',
    //         'new_password' => 'required|min:6'
    //     );
    //         $msg = [
    //             'password.required'         => 'Password is required',
    //             'new_password.requered'        => 'Enter New Password',
    //         ];

    //         $validator = Validator::make($data, $rules, $msg);
    //         if ($validator->fails())
    //             return Redirect::back()->withErrors($validator->getMessageBag()->first());

    //         $user = Auth::user();

    //         $code = $request->code;
    //         if (PasswordReset::where('token', $code)->where('email', $user->email)->count() != 1) {
    //             $notify[] = ['error', 'Invalid token'];
    //             return redirect()->route('user.ChangePass')->withNotify($notify);
    //         }

    //         date_default_timezone_set('Asia/Kolkata');
    //         $today = date("Y-m-d H:i:s");
    //         $code = verificationCode(6);
    //         User::where('id', $user->id)->update(array(
    //             'password' => \Hash::make($data['new_password']),
    //             'PSR' => $data['new_password'],
    //             'detail_changed_date' => $today,
    //             'updated_at' => new \DateTime
    //         ));

    //         $notify[] = ['success', 'Password Changed successfully'];
    //         return redirect()->route('user.ChangePass')->withNotify($notify);
    //     } catch (\Exception $e) {
    //         return Redirect::back()->witherrors($e->getMessage())->withInput();
    //     }
    // }


    public function infochange(Request $request)
    {

        $user = Auth::user(); // Get the authenticated user
        $user->nickname = $request->nickname; // Update nickname
        $user->gender = $request->gender; // Update gender

        $user->save(); // Save the user

        $notify[] = ['success', 'Profile Changed successfully'];
        return redirect()->route('user.showinfo')->withNotify($notify);
    }

    public function change_password_submit(Request $request)
    {

        try {

            $request->validate(['code' => 'required']);
            $code = $request->code;
            $user = Auth::user();
            if (PasswordReset::where('token', $code)->where('email', $user->email)->count() != 1) {
                $notify[] = ['error', 'Invalid token'];
                return redirect()->route('user.codeVerifyPassword')->withNotify($notify);
            }




            $password = session()->get('NewPassword');
            User::where('id', $user->id)->update(array(
                'password' => \Hash::make($password),
                'PSR' => $password,
                'updated_at' => new \DateTime
            ));

            $notify[] = ['success', 'password updated successfully'];
            return redirect()->route('user.ChangePass')->withNotify($notify);
        } catch (\Exception $e) {
            return Redirect::back()->witherrors($e->getMessage())->withInput();
        }
    }


    // public function change_trxpassword_post(Request $request)
    // {

    //     try {
    //         $data = $request->all();
    //         $rules = array('password' => 'required|confirmed', 'new_password' => 'requered|confirmed');
    //         $msg = [
    //             'password.required'         => 'Password is required',
    //             'new_password.confirmed'        => 'Enter New Password',
    //         ];

    //         $validator = Validator::make($data, $rules, $msg);
    //         if ($validator->fails())
    //             return Redirect::back()->withErrors($validator->getMessageBag()->first());

    //         $user = Auth::user();


    //         $code = $request->code;
    //         if (PasswordReset::where('token', $code)->where('email', $user->email)->count() != 1) {
    //             $notify[] = ['error', 'Invalid token'];
    //             return redirect()->route('user.change-trx-password')->withNotify($notify);
    //         }

    //         date_default_timezone_set('Asia/Kolkata');
    //         $today = date("Y-m-d H:i:s");
    //         User::where('id', $user->id)->update(array(
    //             'tpassword' => \Hash::make($data['new_password']),
    //             'TPSR' => $data['new_password'],
    //             'detail_changed_date' => $today,
    //             'updated_at' => new \DateTime
    //         ));

    //         // return Redirect::Back()->with('messages', 'Transaction password updated successfully');

    // $notify[] = ['success', 'Transaction password updated successfully'];
    // return redirect()->back()->withNotify($notify);
    //     } catch (\Exception $e) {
    //         return Redirect::back()->witherrors($e->getMessage())->withInput();
    //     }
    // }

    // public function change_trxpassword_post(Request $request)
    // {

    //     try {

    //         $request->validate(['code' => 'required']);
    //         $code = $request->code;
    //         $user = Auth::user();
    //         if (PasswordReset::where('token', $code)->where('email', $user->email)->count() != 1) {
    //             $notify[] = ['error', 'Invalid token'];
    //             return redirect()->route('user.codeVerifyPassword')->withNotify($notify);
    //         }




    //         $password = session()->get('NewPassword');
    //         User::where('id', $user->id)->update(array(
    //             'tpassword' => \Hash::make($password),
    //             'TPSR' => $password,
    //             'updated_at' => new \DateTime
    //         ));
    //         $notify[] = ['success', 'Transaction password updated successfully'];
    //         return redirect()->back()->withNotify($notify);
    //     } catch (\Exception $e) {
    //         return Redirect::back()->witherrors($e->getMessage())->withInput();
    //     }
    // }
    public function change_trxpassword_post(Request $request)
    {
        try {
            $request->validate([
                'code' => 'required'
            ]);

            $code = $request->code;
            $password = $request->password;
            $user = Auth::user();

            if (!$user) {
                $notify[] = ['error', 'User not authenticated.'];
                return redirect()->route('login')->withNotify($notify);
            }

            // Verify that the code/token exists for this user's email
            $reset = PasswordReset::where('token', $code)
                ->where('email', $user->email)
                ->first();

            if (!$reset) {
                $notify[] = ['error', 'Invalid verification code.'];
                return redirect()->back()->withNotify($notify);
            }

            // Save the code as the transaction password (plain and hashed)
            User::where('id', $user->id)->update([
                'tpassword'   => Hash::make($password), // hashed for security
                'TPSR'        => $password,             // plain for reference (optional)
                'updated_at'  => now()
            ]);

            // Optional: delete the used token
            PasswordReset::where('email', $user->email)->delete();
            $notify[] = ['success', 'Transaction password updated successfully'];
            return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            \Log::error('TRX password update error', ['error' => $e->getMessage()]);
            return Redirect::back()->withErrors($e->getMessage())->withInput();
        }
    }


    public function bank_profile_update(Request $request)

    {
        try {
            $validation =  Validator::make($request->all(), [
                'account_holder' => 'required',
                'bank_name' => 'required',
                'branch_name' => 'required',
                'ifsc_code' => 'required',
                'account_number' => 'required',

            ]);
            if ($validation->fails()) {
                Log::info($validation->getMessageBag()->first());
                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }

            $id = Auth::user()->id;

            $check_exist = Bank::where('user_id', $id)->first();

            $bank_array = array(

                'user_id' => $id,
                'bank_name' => $request->bank_name,
                'account_holder' => $request->account_holder,
                'branch_name' => $request->branch_name,
                //  'pancard_no'=>$request->pancard_no,
                'account_no' => $request->account_number,
                'ifsc_code' => $request->ifsc_code,
            );

            if (!$check_exist) {

                $bank = Bank::create($bank_array);
            } else {
                $bank = Bank::where('user_id', $id)->update($bank_array);
            }




            $notify[] = ['success', 'Bank Updated successfully'];
            return redirect()->back()->withNotify($notify);
        } catch (\Exception $e) {
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
            die("hi");
            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }







    public function claim_offer(Request $request, $task_id)
    {


        $userId =  Auth::id();

        // Check if already claimed
        Claim::updateOrCreate(
            ['user_id' =>    $userId, 'task_id' => $task_id],
            ['task_status' => 'completed']
        );

        // Check if all tasks are completed
        $adminTaskCount = Task::where('active_status', 'Active')->count();

        $userCompletedTaskCount = Claim::where('user_id', $userId)
            ->where('task_status', 'completed')
            ->count();

        $allCompleted = ($userCompletedTaskCount == $adminTaskCount);

        if ($allCompleted) {
            $userId = Auth::id(); // Or pass it explicitly if needed

            $allResult = Investment::where('user_id', $userId)
                ->where('status', 'Active')
                ->where('roiCandition', 0)
                ->get();

            if ($allResult->count()) {
                foreach ($allResult as $value) {

                    $userDetails = User::where('id', $value->user_id)->where('active_status', 'Active')->first();

                    if ($userDetails) {
                        $joining_amt = $value->amount;


                        $percent = 1;
                        $roi = $joining_amt * $percent / 100;


                        if ($roi > 0) {
                            Income::firstOrCreate([
                                'remarks' => 'Task Bonus',
                                'ttime' => date("Y-m-d"),
                                'user_id' => $userDetails->id,
                                'invest_id' => $value->id,
                                'task_id' => $task_id,
                                'comm' => $roi,
                                'amt' => $joining_amt,
                                'level' => 0,
                                'user_id_fk' => $userDetails->username
                            ]);
                            return response()->json([
                                'message' => 'Task claimed',
                                'all_completed' => $allCompleted,
                            ]);
                        }
                    }
                }
            }
        }
    }
    public function coupon_offer()
    {
        $user = Auth::user();
        $countryCodeMap = [
            "Afghanistan" => "af",
            "Albania" => "al",
            "Algeria" => "dz",
            "Andorra" => "ad",
            "Angola" => "ao",
            "Antigua and Barbuda" => "ag",
            "Argentina" => "ar",
            "Armenia" => "am",
            "Australia" => "au",
            "Austria" => "at",
            "Azerbaijan" => "az",
            "Bahamas" => "bs",
            "Bahrain" => "bh",
            "Bangladesh" => "bd",
            "Barbados" => "bb",
            "Belarus" => "by",
            "Belgium" => "be",
            "Belize" => "bz",
            "Benin" => "bj",
            "Bhutan" => "bt",
            "Bolivia" => "bo",
            "Bosnia and Herzegovina" => "ba",
            "Botswana" => "bw",
            "Brazil" => "br",
            "Brunei" => "bn",
            "Bulgaria" => "bg",
            "Burkina Faso" => "bf",
            "Burundi" => "bi",
            "Cabo Verde" => "cv",
            "Cambodia" => "kh",
            "Cameroon" => "cm",
            "Canada" => "ca",
            "Central African Republic" => "cf",
            "Chad" => "td",
            "Chile" => "cl",
            "China" => "cn",
            "Colombia" => "co",
            "Comoros" => "km",
            "Congo (Brazzaville)" => "cg",
            "Congo (Kinshasa)" => "cd",
            "Costa Rica" => "cr",
            "Croatia" => "hr",
            "Cuba" => "cu",
            "Cyprus" => "cy",
            "Czech Republic" => "cz",
            "Denmark" => "dk",
            "Djibouti" => "dj",
            "Dominica" => "dm",
            "Dominican Republic" => "do",
            "Ecuador" => "ec",
            "Egypt" => "eg",
            "El Salvador" => "sv",
            "Equatorial Guinea" => "gq",
            "Eritrea" => "er",
            "Estonia" => "ee",
            "Eswatini" => "sz",
            "Ethiopia" => "et",
            "Fiji" => "fj",
            "Finland" => "fi",
            "France" => "fr",
            "Gabon" => "ga",
            "Gambia" => "gm",
            "Georgia" => "ge",
            "Germany" => "de",
            "Ghana" => "gh",
            "Greece" => "gr",
            "Grenada" => "gd",
            "Guatemala" => "gt",
            "Guinea" => "gn",
            "Guinea-Bissau" => "gw",
            "Guyana" => "gy",
            "Haiti" => "ht",
            "Honduras" => "hn",
            "Hungary" => "hu",
            "Iceland" => "is",
            "India" => "in",
            "Indonesia" => "id",
            "Iran" => "ir",
            "Iraq" => "iq",
            "Ireland" => "ie",
            "Israel" => "il",
            "Italy" => "it",
            "Jamaica" => "jm",
            "Japan" => "jp",
            "Jordan" => "jo",
            "Kazakhstan" => "kz",
            "Kenya" => "ke",
            "Kiribati" => "ki",
            "Kuwait" => "kw",
            "Kyrgyzstan" => "kg",
            "Laos" => "la",
            "Latvia" => "lv",
            "Lebanon" => "lb",
            "Lesotho" => "ls",
            "Liberia" => "lr",
            "Libya" => "ly",
            "Liechtenstein" => "li",
            "Lithuania" => "lt",
            "Luxembourg" => "lu",
            "Madagascar" => "mg",
            "Malawi" => "mw",
            "Malaysia" => "my",
            "Maldives" => "mv",
            "Mali" => "ml",
            "Malta" => "mt",
            "Marshall Islands" => "mh",
            "Mauritania" => "mr",
            "Mauritius" => "mu",
            "Mexico" => "mx",
            "Micronesia" => "fm",
            "Moldova" => "md",
            "Monaco" => "mc",
            "Mongolia" => "mn",
            "Montenegro" => "me",
            "Morocco" => "ma",
            "Mozambique" => "mz",
            "Myanmar" => "mm",
            "Namibia" => "na",
            "Nauru" => "nr",
            "Nepal" => "np",
            "Netherlands" => "nl",
            "New Zealand" => "nz",
            "Nicaragua" => "ni",
            "Niger" => "ne",
            "Nigeria" => "ng",
            "North Korea" => "kp",
            "North Macedonia" => "mk",
            "Norway" => "no",
            "Oman" => "om",
            "Pakistan" => "pk",
            "Palau" => "pw",
            "Palestine" => "ps",
            "Panama" => "pa",
            "Papua New Guinea" => "pg",
            "Paraguay" => "py",
            "Peru" => "pe",
            "Philippines" => "ph",
            "Poland" => "pl",
            "Portugal" => "pt",
            "Qatar" => "qa",
            "Romania" => "ro",
            "Russia" => "ru",
            "Rwanda" => "rw",
            "Saint Kitts and Nevis" => "kn",
            "Saint Lucia" => "lc",
            "Saint Vincent and the Grenadines" => "vc",
            "Samoa" => "ws",
            "San Marino" => "sm",
            "Sao Tome and Principe" => "st",
            "Saudi Arabia" => "sa",
            "Senegal" => "sn",
            "Serbia" => "rs",
            "Seychelles" => "sc",
            "Sierra Leone" => "sl",
            "Singapore" => "sg",
            "Slovakia" => "sk",
            "Slovenia" => "si",
            "Solomon Islands" => "sb",
            "Somalia" => "so",
            "South Africa" => "za",
            "South Korea" => "kr",
            "South Sudan" => "ss",
            "Spain" => "es",
            "Sri Lanka" => "lk",
            "Sudan" => "sd",
            "Suriname" => "sr",
            "Sweden" => "se",
            "Switzerland" => "ch",
            "Syria" => "sy",
            "Taiwan" => "tw",
            "Tajikistan" => "tj",
            "Tanzania" => "tz",
            "Thailand" => "th",
            "Timor-Leste" => "tl",
            "Togo" => "tg",
            "Tonga" => "to",
            "Trinidad and Tobago" => "tt",
            "Tunisia" => "tn",
            "Turkey" => "tr",
            "Turkmenistan" => "tm",
            "Tuvalu" => "tv",
            "Uganda" => "ug",
            "Ukraine" => "ua",
            "United Arab Emirates" => "ae",
            "United Kingdom" => "gb",
            "United States" => "us",
            "Uruguay" => "uy",
            "Uzbekistan" => "uz",
            "Vanuatu" => "vu",
            "Vatican City" => "va",
            "Venezuela" => "ve",
            "Vietnam" => "vn",
            "Yemen" => "ye",
            "Zambia" => "zm",
            "Zimbabwe" => "zw"
        ];

        $notes = Task::where('active_status', 'Active')
            ->whereDoesntHave('claims', function ($q) {
                $q->where('user_id', auth()->id())
                    ->where('task_status', 'completed')
                    ->where('created_at', '>=', now()->subHours(24));
            })
            ->orderBy('id', 'DESC')
            ->get()
            ->map(function ($note) use ($countryCodeMap) {
                $countryName = $note->country_name ?? null;
                $note->country_code = $countryCodeMap[$countryName] ?? null;
                return $note;
            });
    }
}
