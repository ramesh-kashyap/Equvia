<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Redirect;
use App\Models\PasswordReset;
use App\Models\User;
use App\Models\UserLogin;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class Login extends Controller
{


  public function login(Request $request)
{
    // Validate: require either phone or email (not both required), plus password.
    $data = $request->validate([
        'email'     => ['nullable', 'email', 'required_without:phone'],
        'phone'     => ['nullable', 'string', 'required_without:email'],
        'password'  => ['required', 'string'],
        // Optional extras you may be sending:
        'dialCode'    => ['nullable', 'string'],
        'country_iso' => ['nullable', 'string', 'size:2'],
    ], [
        'email.required_without' => 'Please enter your email or phone.',
        'phone.required_without' => 'Please enter your phone or email.',
    ]);

    // If you store phone WITH a dial code, normalize it here
    // (uncomment if applicable).
    // if (!empty($data['dialCode']) && !empty($data['phone'])) {
    //     $data['phone'] = ltrim($data['dialCode'], '+') . preg_replace('/\D+/', '', $data['phone']);
    // }

    // Build credentials for Auth::attempt()
    $credentials = ['password' => $data['password']];

    if (!empty($data['phone'])) {
        $credentials['phone'] = $data['phone'];
    } else {
        $credentials['email'] = Str::lower($data['email']); // normalize email
    }

    // Optional: remember me
    $remember = (bool) $request->boolean('remember');

    if (!Auth::attempt($credentials, $remember)) {
        // generic message avoids leaking which field was wrong
        return back()
            ->withInput($request->only('email', 'phone'))
            ->withErrors(['auth' => 'Login failed. Please check your credentials.']);
    }

    // Successful auth: protect against session fixation
    $request->session()->regenerate();

    /** @var \App\Models\User $user */
    $user = Auth::user();

    // Blocked user check
    if (isset($user->active_status) && strcasecmp($user->active_status, 'Block') === 0) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return back()
            ->withInput($request->only('email', 'phone'))
            ->withErrors(['auth' => 'Your account is blocked by admin.']);
    }

    // Optional: if you need to verify dialCode/country_iso matches the user:
    // if (!empty($data['dialCode']) && $user->dialCode !== $data['dialCode']) {
    //     Auth::logout();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();
    //     return back()
    //         ->withInput($request->only('email', 'phone'))
    //         ->withErrors(['auth' => 'Invalid country code.']);
    // }

    // Success path
    return redirect()
        ->route('user.dashboard')
        ->with('notify', [['success', 'Login Successfully']]);
}


    public function forgot_password()
    {

    return view('auth.passwords.forgot-password');

    }

    public function logout()
    {
        Auth::logout();

        session()->invalidate();
        session()->regenerateToken();
        $notify[] = ['success', 'You have been logged out.'];
        return redirect()->route('login')->withNotify($notify);
    }

    public function sendforgot(Request $request)
    {
        $code = verificationCode(6);
      
        $emailId = $request->email;
        
       
        PasswordReset::where('email', $emailId)->delete();

        $password = new PasswordReset();
        $password->email = $emailId;
        $password->token = $code;
        $password->created_at = \Carbon\Carbon::now();
        $password->save();

        //     sendEmail($emailId, 'Your One-Time Password', [
        //     'name' => "User",
        //     'code' => $code,
        //     'purpose' => 'Change Password',
        //     'viewpage' => 'one_time_password',
        //  ]);

       return response()->json([
        'status' => 'success',
        'message' => 'Email sent successfully'
    ]);
    }
   
public function forgot_password_submit(Request $request)
{
    try {
        // ✅ Validation
        $validation = Validator::make($request->all(), [
            'email'    => 'required|email',
            'code'     => 'required',
            'password' => 'required|confirmed',
        ]);

        if ($validation->fails()) {
            $notify[] = ['error', $validation->errors()->first()];
            return redirect()->route('forgot-password')->withNotify($notify);
        }

        // ✅ Check Email Exist
        $credentials = User::where('email', $request->email)->first();

        if (!$credentials) {
            $notify[] = ['error', 'Invalid Email ID'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }

        // ✅ Check Token
        $code = $request->code;
        $isValid = PasswordReset::where('token', $code)
            ->where('email', $request->email)
            ->count();

        if ($isValid != 1) {
            $notify[] = ['error', 'Invalid token'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }

        // ✅ Update Password
        $credentials->password = bcrypt($request->password); // Laravel recommended
        $credentials->PSR      = $request->password; // ⚠ plain password store करना risky है
        $credentials->save();

        $notify[] = ['success', 'Your password has been changed successfully.'];
        return redirect()->route('login')->withNotify($notify);

    } catch (\Exception $e) {
        // ✅ Exception Handling
        \Log::error('Forgot Password Error: '.$e->getMessage());
        $notify[] = ['error', 'Something went wrong, please try again later.'];
        return redirect()->route('forgot-password')->withNotify($notify);
    }
}



    // public function forgot_password_submit(Request $request)
    // {
    //      $validation =  Validator::make($request->all(), [
    //             'email' => 'required',
    //             'code' => 'required',
    //             'password' => 'required|confirmed',

    //         ]);
            
    //     $credentials = User::where('email',$request->email)->first();
    //     // dd($credentials);
    //     if ($credentials)
    //     {

          
    //        $code = $request->code;

          
    //         if (PasswordReset::where('token', $code)->where('email', $request->email)->count() != 1) {
    //             $notify[] = ['error', 'Invalid token'];
    //             return redirect()->route('forgot-password')->withNotify($notify);
    //         }

    //         $password = password_hash($request->password, PASSWORD_DEFAULT);

    //         $credentials->password=$password;
    //         $credentials->PSR=$request->password;
    //         $credentials->save();
    //         $notify[] = ['success', 'Your Password change Successfully.'];
    //         return redirect()->route('login')->withNotify($notify);
    //     }
    //     else{
    //         $notify[] = ['error', 'Invalid Email ID '];
    //         return redirect()->route('forgot-password')->withNotify($notify);
    //     }



    // }

    public function codeVerify(){
        $page_title = 'Account Recovery';
        $userID = session()->get('pass_res_mail');

        $user_name = session()->get('username');

        if (!$userID) {
            $notify[] = ['error','Opps! session expired'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }

        return view('auth.passwords.confirm',compact('page_title','userID','user_name'));
    }


    public function verifyCode(Request $request)
    {
        $request->validate(['code' => 'required', 'userID' => 'required']);
        $code = $request->code;
        $userDetail=User::where('id',$request->userID)->first();

        if (PasswordReset::where('token', $code)->where('email', $userDetail->email)->count() != 1) {
            $notify[] = ['error', 'Invalid token'];
            return redirect()->route('forgot-password')->withNotify($notify);
        }
        $notify[] = ['success', 'You can change your password.'];
        session()->flash('fpass_email', $request->userID);
        session()->put('resetMail',$request->userID);
        return redirect()->route('resetPassword', $code)->withNotify($notify);
    }


    public function resetPassword()
    {
        $page_title = "Forgot Password";
    //   dd("hi");
        return view('auth.passwords.resetPassword', compact('page_title'));
    }

   public function loginPage()
    {
    
        return view('auth.login');
    }



    public function submitResetPassword(Request $request)
    {

    $request->validate(['password' => 'required|confirmed|min:5']);

       $userID = session()->get('resetMail');

    //    dd($userID);
    //    die;

       $user_name = session()->get('username');

       $user = User::where('id',$userID)->orderBy('id', 'DESC')->first();


       if (!$user) {
        $notify[] = ['error','Opps! session expired'];
        return redirect()->route('forgot-password')->withNotify($notify);
       }
       $password = password_hash($request->password, PASSWORD_DEFAULT);

       $user->password=$password;
       $user->PSR=$request->password;
       $user->save();
       $notify[] = ['success', 'Your Password change Successfully.'];
       return redirect()->route('login')->withNotify($notify);

    }



}
