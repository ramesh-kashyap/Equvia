<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Income;
use App\Models\Contract;
use App\Models\Task;
use App\Models\Order;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

use Redirect;
use Hash;
use Helper;

class Invest extends Controller
{

  private $downline = "";




  public function index()
  {
    $user = Auth::user();
    Log::info('User accessing deposit page', ['user_id' => $user->id]);

    $invest_check = Investment::where('user_id', $user->id)
      ->where('status', '!=', 'Decline')->orderBy('id', 'desc')->limit(1)->first();
    $userInfo = Auth::user();
    $refId = $userInfo->username;

    $url = 'https://api.cryptapi.io/bep20/usdt/create/';


    $queryParams = [
      'callback'      => "https://h5.geniqtrade.org/dynamicUpiCallback?refid={$refId}",
      'address'       => '0x37b4f194fe0cD61703b4bA3912D1e5775eeC821A',
      'pending'       => 0,
      'confirmations' => 1,
      'email'         => $userInfo->email ?? 'default@example.com',
      'post'          => 0,
      'priority'      => 'default',
      'multi_token'   => 0,
      'multi_chain'   => 0,
      'convert'       => 0,
    ];

    $fullUrl = $url . '?' . http_build_query($queryParams);
    Log::info('Sending request to CryptAPI', ['url' => $fullUrl]);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $fullUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);

    if ($response === false) {
      Log::error('CryptAPI request failed', ['curl_error' => curl_error($ch)]);
      curl_close($ch);
      return 'Request failed';
    }

    curl_close($ch);
    Log::info('CryptAPI response received', ['response' => $response]);

    $data = json_decode($response, true);

    if (json_last_error() !== JSON_ERROR_NONE) {
      Log::error('Invalid JSON response', ['response' => $response]);
      return 'Invalid JSON response: ' . $response;
    }

    if ($data && isset($data['status']) && $data['status'] === 'success' && isset($data['address_in'])) {
      $qrCodeLink = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($data['address_in']);
      $this->data['qrCodeLink'] = $qrCodeLink;
      $this->data['address_in'] = $data['address_in'];
      Log::info('CryptAPI address and QR generated', ['address_in' => $data['address_in']]);
    } else {
      Log::warning('CryptAPI response did not include address_in', ['data' => $data]);
    }

    $this->data['last_package'] = $invest_check ? $invest_check->amount : 0;
    $this->data['page'] = 'user.invest.Deposit';

    return $this->dashboard_layout();
  }
  // public function showrecord(Request $request)
  // {
  //   $user = Auth::user();
  //   $limit = $request->limit ? $request->limit : paginationLimit();
  //   $status = $request->status ? $request->status : null;
  //   $search = $request->search ? $request->search : null;
  //   $start_date = $request->start_date;
  //   $end_date = $request->end_date;
  //   $notes = Investment::where('user_id', $user->id);
  //   // ✅ Add date filter here
  //   if ($start_date && $end_date) {
  //     $notes = $notes->whereBetween('created_at', [
  //       $start_date . " 00:00:00",
  //       $end_date . " 23:59:59"
  //     ]);
  //   }
  //   if ($search <> null && $request->reset != "Reset") {
  //     $notes = $notes->where(function ($q) use ($search) {
  //       $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
  //         ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
  //         ->orWhere('status', 'LIKE', '%' . $search . '%')
  //         ->orWhere('type', 'LIKE', '%' . $search . '%')
  //         ->orWhere('amount', 'LIKE', '%' . $search . '%');
  //     });
  //   }

  //   $notes = $notes->paginate($limit)->appends([
  //     'limit' => $limit,
  //     'start_date' => $start_date,
  //     'end_date' => $end_date,
  //     'search' => $search,
  //   ]);
  //   $this->data['search'] = $search;
  //   $this->data['deposit_list'] = $notes;

  //   $this->data['page'] = 'user.invest.records';
  //   return $this->dashboard_layout();
  // }

    public function showrecord(Request $request)
  {

    $user = Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = Contract::where('user_id', $user->id)->orderBy('id', 'DESC');
    if ($search <> null && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->Where('c_bot', 'LIKE', '%' . $search . '%')
          ->orWhere('c_buy', 'LIKE', '%' . $search . '%')
          ->orWhere('qty', 'LIKE', '%' . $search . '%')
          ->orWhere('profit', 'LIKE', '%' . $search . '%')
          ->orWhere('c_ref', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate($limit)->appends(['limit' => $limit]);

    $this->data['search'] = $search;
    $this->data['level_income'] = $notes;
    $this->data['page'] = 'user.invest.records';
    return $this->dashboard_layout();
  }


  public function deposit()
  {
    $user = Auth::user();
    $invest_check = Investment::where('user_id', $user->id)->where('status', '!=', 'Decline')->orderBy('id', 'desc')->limit(1)->first();

    $curText = DB::table('general_settings')->value('cur_text'); // e.g. 'INR', 'usdtTrc20', 'usdtBep20'

    // 2. Based on currency value, pick wallet or bank details
    if (Str::contains(strtolower($curText), 'USDT')) {
      $walletAddress = DB::table('general_settings')->value('usdtBep20');
      $bankDetails = null;
    } elseif (Str::contains(strtolower($curText), 'USDT')) {
      $walletAddress = DB::table('general_settings')->value('usdtBep20');
      $bankDetails = null;
    } elseif (strtolower($curText) === 'inr') {
      $walletAddress = null;
      $bankDetails = DB::table('general_settings')
        ->select('account_no', 'ifsc_code', 'branch_name', 'bank_name')
        ->first();
    } else {
      $walletAddress = null;
      $bankDetails = null;
    }
// dd($walletAddress);
    // 3. Prepare view data
    $this->data['currency']      = $curText;
    $this->data['walletAddress'] = $walletAddress;
    $this->data['bankDetails']   = $bankDetails;
    $this->data['page']          = 'user.fund.confirmFund';


    $this->data['last_package'] = ($invest_check) ? $invest_check->amount : 0;
    $this->data['page'] = 'user.invest.Deposit';
    return $this->dashboard_layout();
  }



  public function cancel_payment($id)

  {

    Investment::where('orderId', $id)->update(['status' => 'Decline']);

    $notify[] = ['success', 'Deposit canceled successfully'];
    return redirect()->route('user.invest')->withNotify($notify);
  }


  public function viewdetail($txnId)
  {


    $invoice = substr(str_shuffle("0123456789"), 0, 7);
    $apiURL = 'https://api.plisio.net/api/v1/operations/' . $txnId;
    $postInput = [
      'api_key' => '4iJxhwNsKCrdhtDn8Q9ctk_vdMvDs6JoXb7DeiRm95R45OeCUhFH8RcgRDOK-lIM',
    ];

    $headers = [
      'Content-Type' => 'application/json'
    ];

    $response = Http::withHeaders($headers)->get($apiURL, $postInput);

    $statusCode = $response->status();
    $resultAarray = json_decode($response->getBody(), true);
    if ($resultAarray) {
      if ($resultAarray['status'] == "success") {
        if (!empty($resultAarray['data']['tx'])) {
          return  Redirect::to($resultAarray['data']['tx'][0]['url']);
        } else {
          return Redirect::back()->withErrors(array('try again'));
        }
      } else {
        return Redirect::back()->withErrors(array('try again'));
      }
    } else {
      return Redirect::back()->withErrors(array('try again'));
    }
  }

  public function confirmDeposit(Request $request)
  {
    try {
      $validation =  Validator::make($request->all(), [
        'Sum' => 'required|numeric|min:10',
        'PSys' => 'required',
      ]);


      //  dd($request->all());
      if ($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
      }




      $user = Auth::user();


      $min_amount = $request->minimum_deposit;
      $max_amount = $request->maximum_deposit;
      $plan = $request->Plan;
      $paymentMode = $request->PSys;
      $amount = $request->Sum;



      $invest_check = Investment::where('user_id', $user->id)->where('status', 'Pending')->first();

      if ($invest_check) {
        return  redirect()->route('user.DepositHistory')->withErrors(array('your deposit already pending'));
      }


      $amountTotal = $request->Sum;


      if ($paymentMode == "USDT.BEP20") {
        $paymentMode = "USDT_BSC";
      } else {
        $paymentMode = "USDT_TRX";
      }

      $invoice = substr(str_shuffle("0123456789"), 0, 7);
      $apiURL = 'https://plisio.net/api/v1/invoices/new';
      $postInput = [
        'source_currency' => 'USD',
        'source_amount' => $amountTotal,
        'order_number' => $invoice,
        'currency' => $paymentMode,
        'email' => $user->email,
        'order_name' => $user->username,
        'callback_url' => 'https://qstaig.com/dynamicupicallback?json=true',
        'api_key' => '4iJxhwNsKCrdhtDn8Q9ctk_vdMvDs6JoXb7DeiRm95R45OeCUhFH8RcgRDOK-lIM',
      ];

      $headers = [
        'Content-Type' => 'application/json'
      ];

      $response = Http::withHeaders($headers)->get($apiURL, $postInput);

      $statusCode = $response->status();
      $resultAarray = json_decode($response->getBody(), true);
      date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)


      if ($resultAarray['status'] == "success") {

        $data = [
          'plan' => $plan,
          'orderId' => $invoice,
          'transaction_id' => $resultAarray['data']['txn_id'],
          'user_id' => $user->id,
          'user_id_fk' => $user->username,
          'amount' => $amountTotal,
          'payment_mode' => $paymentMode,
          'status' => 'Pending',
          'sdate' => Date("Y-m-d"),
          'active_from' => $user->username,
          'created_at' => date("Y-m-d H:i:s"),
        ];
        $payment =  Investment::insert($data);



        $this->data['walletAddress'] = $resultAarray['data']['wallet_hash'];
        $this->data['paymentMode'] = $paymentMode;
        $this->data['transaction_id'] = $resultAarray['data']['txn_id'];
        $this->data['qr_code'] = $resultAarray['data']['qr_code'];
        $this->data['orderId'] = $invoice;
        $this->data['amount'] = $amount;
        $this->data['invoice_total_sum'] = $resultAarray['data']['invoice_total_sum'];
        $this->data['page'] = 'user.invest.confirmDeposit';
        return $this->dashboard_layout();
      } else {
        return Redirect::back()->withErrors(array('try again'));
      }
    } catch (\Exception $e) {
      Log::info('error here');
      Log::info($e->getMessage());
      print_r($e->getMessage());
      die("hi");
      return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
    }
  }



  public function confirmDeposit_new(Request $request)
  {
    try {
      $validation =  Validator::make($request->all(), [
        'Sum' => 'required|numeric|min:2',
        'PSys' => 'required',
      ]);


      //  dd($request->all());
      if ($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
      }




      $user = Auth::user();
      $invest_check = Investment::where('user_id', $user->id)->where('status', 'Pending')->first();

      if ($invest_check) {
        return Redirect::back()->withErrors(array('your deposit already pending'));
      }


      $min_amount = $request->minimum_deposit;
      $max_amount = $request->maximum_deposit;
      $plan = $request->Plan;
      $paymentMode = $request->PSys;
      $amount = $request->Sum;



      if ($amount < $min_amount || $amount > $max_amount) {
        return Redirect::back()->withErrors(array('minimum deposit is $ ' . $min_amount . ' and maximum is $ ' . $max_amount));
      }


      $plan = 'BEGINNER';
      if ($amount >= 50 && $amount <= 200) {
        $plan = 'BEGINNER';
      } elseif ($amount >= 400 && $amount <= 800) {
        $plan = 'STANDARD';
      } elseif ($amount >= 1000 && $amount <= 2000) {
        $plan = 'EXCLUSIVE';
      } elseif ($amount >= 2500 && $amount <= 5000) {
        $plan = 'ULTIMATE';
      } elseif ($amount >= 5000 && $amount <= 10000) {
        $plan = 'PREMIUM';
      } elseif ($amount >= 5000) {
        $plan = 'PREMIUM';
      }

      $invest_check = Investment::where('user_id', $user->id)->where('plan', $plan)->where('status', '!=', 'Decline')->orderBy('id', 'desc')->limit(1)->first();

      if ($invest_check) {
        return Redirect::back()->withErrors(array('you have already chosen this plan choose another plan'));
      }

      $amountTotal = $request->Sum;


      if ($paymentMode == "USDT.BEP20") {
        $paymentMode = "USDT_BSC";
      } else {
        $paymentMode = "USDT_TRX";
      }

      $invoice = substr(str_shuffle("0123456789"), 0, 7);
      $apiURL = 'https://plisio.net/api/v1/invoices/new';
      $postInput = [
        'source_currency' => 'USD',
        'source_amount' => $amountTotal,
        'order_number' => $invoice,
        'currency' => $paymentMode,
        'email' => $user->email,
        'order_name' => $user->username,
        'callback_url' => 'https://etriton.co/dynamicupicallback?json=true',
        'api_key' => '4iJxhwNsKCrdhtDn8Q9ctk_vdMvDs6JoXb7DeiRm95R45OeCUhFH8RcgRDOK-lIM',
      ];

      $headers = [
        'Content-Type' => 'application/json'
      ];

      $response = Http::withHeaders($headers)->get($apiURL, $postInput);

      $statusCode = $response->status();
      $resultAarray = json_decode($response->getBody(), true);


      if ($resultAarray['status'] == "success") {

        $data = [
          'plan' => $plan,
          'orderId' => $invoice,
          'transaction_id' => $resultAarray['data']['txn_id'],
          'user_id' => $user->id,
          'user_id_fk' => $user->username,
          'amount' => $amountTotal,
          'payment_mode' => $paymentMode,
          'status' => 'Pending',
          'sdate' => Date("Y-m-d"),
          'active_from' => $user->username,
        ];
        $payment =  Investment::insert($data);



        $this->data['walletAddress'] = $resultAarray['data']['wallet_hash'];
        $this->data['paymentMode'] = $paymentMode;
        $this->data['transaction_id'] = $resultAarray['data']['txn_id'];
        $this->data['qr_code'] = $resultAarray['data']['qr_code'];
        $this->data['orderId'] = $invoice;
        $this->data['amount'] = $amount;
        $this->data['invoice_total_sum'] = $resultAarray['data']['invoice_total_sum'];
        $this->data['page'] = 'user.invest.confirmDeposit';
        return $this->dashboard_layout();
      } else {
        return Redirect::back()->withErrors(array('try again'));
      }
    } catch (\Exception $e) {
      Log::info('error here');
      Log::info($e->getMessage());
      print_r($e->getMessage());
      die("hi");
      return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
    }
  }





  public function fundActivation2(Request $request)
  {

    try {
      $validation =  Validator::make($request->all(), [
        'amount' => 'required|numeric|min:50',
        'paymentMode' => 'required',
        'transaction_id' => 'required|unique:investments,transaction_id',
      ]);

      if ($validation->fails()) {
        Log::info($validation->getMessageBag()->first());

        return redirect()->route('user.invest')->withErrors($validation->getMessageBag()->first())->withInput();
      }



      $user = Auth::user();

      $plan = "1";

      $user_detail = User::where('username', $user->username)->orderBy('id', 'desc')->limit(1)->first();
      $invest_check = Investment::where('user_id', $user_detail->id)->where('status', '!=', 'Decline')->orderBy('id', 'desc')->limit(1)->first();
      $invoice = substr(str_shuffle("0123456789"), 0, 7);
      $joining_amt = $request->amount;
      $plan = 'BEGINNER';
      if ($joining_amt >= 50 && $joining_amt <= 200) {
        $plan = 'BEGINNER';
      } elseif ($joining_amt >= 400 && $joining_amt <= 800) {
        $plan = 'STANDARD';
      } elseif ($joining_amt >= 1000 && $joining_amt <= 2000) {
        $plan = 'EXCLUSIVE';
      } elseif ($joining_amt >= 2500 && $joining_amt <= 5000) {
        $plan = 'ULTIMATE';
      } elseif ($joining_amt >= 5000 && $joining_amt <= 10000) {
        $plan = 'PREMIUM';
      } elseif ($joining_amt >= 5000) {
        $plan = 'PREMIUM';
      }



      $last_package = ($invest_check) ? $invest_check->amount : 0;


      $data = [
        'plan' => $plan,
        'transaction_id' => $request->transaction_id,
        'user_id' => $user_detail->id,
        'user_id_fk' => $user_detail->username,
        'amount' => $request->amount,
        'payment_mode' => $request->paymentMode,
        'status' => 'Pending',
        'sdate' => Date("Y-m-d"),
        'active_from' => $user->username,
      ];
      $payment =  Investment::insert($data);


      $notify[] = ['success', 'Deposit request submitted successfully'];
      return redirect()->route('user.invest')->withNotify($notify);
    } catch (\Exception $e) {
      Log::info('error here');
      Log::info($e->getMessage());
      print_r($e->getMessage());
      die("hi");
      return  redirect()->route('user.invest')->withErrors('error', $e->getMessage())->withInput();
    }
  }

  public function fundActivation(Request $request)
  {
    try {
      $validation = Validator::make($request->all(), [
        'amount' => 'required|numeric|min:50',
        'rank' => 'required|numeric|min:1|max:8',
      ]);

      if ($validation->fails()) {
        Log::info($validation->getMessageBag()->first());
        return redirect()->back()->withErrors($validation->getMessageBag()->first())->withInput();
      }

      $user = Auth::user();
      $balance = $user->available_balance();

      // Define VIP rules
      $vipRules = [
        1 => ['amount' => 60,   'requires' => 0],
        2 => ['amount' => 120,  'requires' => 1],
        3 => ['amount' => 360,  'requires' => 2],
        4 => ['amount' => 840,  'requires' => 3],
        5 => ['amount' => 1680, 'requires' => 4],
        6 => ['amount' => 3600, 'requires' => 5],
        7 => ['amount' => 7560, 'requires' => 6],
        8 => ['amount' => 15000, 'requires' => 7],
      ];

      $rank = (int) $request->rank;

      if (!isset($vipRules[$rank])) {
        return redirect()->back()->withErrors("Invalid upgrade rank requested.");
      }

      $rule = $vipRules[$rank];
      $targetAmount = $rule['amount'];
      $currentPackage = (float) $user->package ?? 0;
      $amount = $targetAmount - $currentPackage;

      if ($user->rank >= $rank) {
        return redirect()->back()->withErrors("You already have this rank or higher.");
      }

      if ($user->rank < $rule['requires']) {
        return redirect()->back()->withErrors("To upgrade to VIP {$rank}, you must first be VIP {$rule['requires']}.");
      }

      if ($amount <= 0) {
        return redirect()->back()->withErrors("You have already paid this amount or more.");
      }

      if ($balance < $amount) {
        return redirect()->back()->withErrors("Insufficient balance. You need {$amount} USDT more to upgrade.");
      }

      // Deduct balance logic would go here if you're handling wallet balances

      $data = [
        'plan' => $rank,
        'transaction_id' => md5(time() . rand()),
        'user_id' => $user->id,
        'user_id_fk' => $user->username,
        'amount' => $targetAmount,
        'payment_mode' => 'USDT',
        'status' => 'Active',
        'sdate' => date("Y-m-d"),
        'active_from' => $user->username,
      ];
      Investment::insert($data);

      $user->rank = $rank;
      $user->save();

      $users = User::where('id', $user->id)->first();

      if ($users->active_status == "Pending") {
        add_level_income($users->id, $amount);

        $user_update = [
          'active_status' => 'Active',
          'adate' => date("Y-m-d H:i:s"),
          'package' => $targetAmount
        ];
        User::where('id', $user->id)->update($user_update);

        \DB::table('general_settings')->where('id', 1)->update([
          'people_online' => generalDetail()->people_online + 1,
          'our_investors' => generalDetail()->our_investors + 1,
        ]);
      } else {
        $user_update = [
          'package' => $targetAmount,
          'active_status' => 'Active',
        ];
        User::where('id', $user->id)->update($user_update);
      }

      $notify[] = ['success', "Successfully upgraded to VIP {$rank}."];
      return redirect()->back()->withNotify($notify);
    } catch (\Exception $e) {
      Log::error('Upgrade error: ' . $e->getMessage());
      return redirect()->back()->withErrors('An error occurred: ' . $e->getMessage())->withInput();
    }
  }



  public function invest_list(Request $request)
  {

    $user = Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = Investment::where('user_id', $user->id);
    if ($search <> null && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
          ->orWhere('txn_no', 'LIKE', '%' . $search . '%')
          ->orWhere('status', 'LIKE', '%' . $search . '%')
          ->orWhere('type', 'LIKE', '%' . $search . '%')
          ->orWhere('amount', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate($limit)->appends(['limit' => $limit]);

    $this->data['search'] = $search;
    $this->data['deposit_list'] = $notes;
    $this->data['page'] = 'user.invest.DepositHistory';
    return $this->dashboard_layout();
  }




  public function my_level_team_count($userid, $level = 3)
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

    // $final = array();
    // if(!empty($ret)){
    //     array_walk_recursive($ret, function($item, $key) use (&$final){
    //         $final[] = $item;
    //     });
    // }


    return $ret;
  }





  public function quality()
  {
    date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
    $user = Auth::user();

    $my_level_team = $this->my_level_team_count($user->id);
    $gen_team1 =  (array_key_exists(1, $my_level_team) ? $my_level_team[1] : array());
    $gen_team2 =  (array_key_exists(2, $my_level_team) ? $my_level_team[2] : array());
    $gen_team3 =  (array_key_exists(3, $my_level_team) ? $my_level_team[3] : array());

      $gen_team1 = User::where(function ($query) use ($gen_team1) {
        if (!empty($gen_team1)) {
          foreach ($gen_team1 as $key => $value) {
            //   $f = explode(",", $value);
            //   print_r($f)."<br>";
            $query->orWhere('id', $value);
          }
        } else {
          $query->where('id', null);
        }
      })->orderBy('id', 'DESC')->get();

        $gen_team2 = User::where(function ($query) use ($gen_team2) {
          if (!empty($gen_team2)) {
            foreach ($gen_team2 as $key => $value) {
              //   $f = explode(",", $value);
              //   print_r($f)."<br>";
              $query->orWhere('id', $value);
            }
          } else {
            $query->where('id', null);
          }
        })->orderBy('id', 'DESC')->get();

        $gen_team3 = User::where(function ($query) use ($gen_team3) {
          if (!empty($gen_team3)) {
            foreach ($gen_team3 as $key => $value) {
              //   $f = explode(",", $value);
              //   print_r($f)."<br>";
              $query->orWhere('id', $value);
            }
          } else {
            $query->where('id', null);
          }
        })->orderBy('id', 'DESC')->get();

      $levelACount = $gen_team1->where('active_status', 'Active')->count(); // Direct (A)
      $levelBCount = $gen_team2->where('active_status', 'Active')->count(); // Under A (B)
      $levelCCount = $gen_team3->where('active_status', 'Active')->count() ;  // Under B (C)

            // Determine qualified level

           $balance = Auth::user()->available_balance();

            $this->data['balance']     = $balance;
            $this->data['levelACount'] = $levelACount;
            $this->data['levelBCount'] = $levelBCount;
            $this->data['levelCCount'] = $levelCCount;
          // From your earlier result sets:
            $A = $levelACount;                          // Direct (A)
            $BC = $levelBCount + $levelCCount;          // B + C combined

            if ($balance >= 50000 && $A >= 30 && $BC >= 300) {
                $qualifiedLevel = "EQ6"; $earning = "4.1%-4.3%";
            } elseif ($balance >= 20000 && $A >= 25 && $BC >= 100) {
                $qualifiedLevel = "EQ5"; $earning = "3.7%-3.9%";
            } elseif ($balance >= 5000 && $A >= 15 && $BC >= 50) {
                $qualifiedLevel = "EQ4"; $earning = "3.2%-3.5%";
            } elseif ($balance >= 2000 && $A >= 10 && $BC >= 30) {
                $qualifiedLevel = "EQ3"; $earning = "2.7%-3.0%";
            } elseif ($balance >= 500 && $A >= 2 && $BC >= 5) {
                $qualifiedLevel = "EQ2"; $earning = "2.3%-2.5%";
            } elseif ($balance >= 50) {  // EQ1 has no A/BC requirements
                $qualifiedLevel = "EQ1"; $earning = "2.0%-2.1%";
            } elseif ($balance >= 1) {   // EQ0 has no A/BC requirements
                $qualifiedLevel = "EQ0"; $earning = "1.5%-1.7%";
            } else {
                // below $1 — treat as EQ0 or handle as unqualified per your business rules
                $qualifiedLevel = "EQ0"; $earning = "1.5%-1.7%";
            }


      // Pass to view
          $this->data['qualifiedLevel'] = $qualifiedLevel;
          $this->data['earning'] = $earning;



    $notes = Contract::where('user_id', $user->id)->orderBy('id', 'DESC')->get();


    $userDirect = User::where('sponsor', $user->id)->where('active_status', 'Active')->where('package', '>=', 30)->count();
    $totalRoi = \DB::table('contract')->where('user_id', $user->id)->sum('profit');
    $todaysRoi = \DB::table('contract')->where('user_id', $user->id)->where('ttime', date('Y-m-d'))->get();
    $this->data['todaysTrade'] = $todaysRoi;
    $this->data['totalRoi'] = $totalRoi;
    $this->data['userDirect'] = $userDirect;
    $this->data['todaysRoi'] = $todaysRoi->count();
    $this->data['todaysRoiSum'] = \DB::table('contract')->where('user_id', $user->id)->where('ttime', date('Y-m-d'))->where('c_status', '-1')->sum('profit');
    $this->data['todaysLevelIncome'] = \DB::table('incomes')->where('user_id', $user->id)->where('ttime', date('Y-m-d'))->sum('comm');
    $this->data['totalLevelIncome'] = \DB::table('incomes')->where('user_id', $user->id)->whereIn('remarks', ['Level Bonus', 'Team Bonus'])->sum('comm');
    $this->data['balance'] = round($user->available_balance(), 2);
    $this->data['level_income'] = $notes;

    $this->data['page'] = 'user.quality';
    return $this->dashboard_layout();
  }



  public function records(Request $request)
  {

    $user = Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = Contract::where('user_id', $user->id)->orderBy('id', 'DESC');
    if ($search <> null && $request->reset != "Reset") {
      $notes = $notes->where(function ($q) use ($search) {
        $q->Where('c_bot', 'LIKE', '%' . $search . '%')
          ->orWhere('c_buy', 'LIKE', '%' . $search . '%')
          ->orWhere('qty', 'LIKE', '%' . $search . '%')
          ->orWhere('profit', 'LIKE', '%' . $search . '%')
          ->orWhere('c_ref', 'LIKE', '%' . $search . '%');
      });
    }

    $notes = $notes->paginate($limit)->appends(['limit' => $limit]);

    $this->data['search'] = $search;
    $this->data['level_income'] = $notes;
    $this->data['page'] = 'user.record';
    return $this->dashboard_layout();
  }





  public function getAddressDetails($currency)
  {
    $user = Auth::user();
    $refId = $user->username;

    // Currency-based API URL
    if ($currency === 'USDT_BSC') {
      $url = 'https://api.cryptapi.io/bep20/usdt/create/';
      $address = "0x37b4f194fe0cD61703b4bA3912D1e5775eeC821A";
    } elseif ($currency === 'USDT_TRX') {
      $url = 'https://api.cryptapi.io/trc20/usdt/create/';
      $address = "TKoKBnVoVr3MAWE5iBxdnKPsbkMUDZ5zix";
    } else {
      return response()->json(['success' => false, 'message' => 'Invalid currency']);
    }

    $queryParams = [
      'callback'      => "https://h5.geniqtrade.xyz/dynamicUpiCallback?refid={$refId}",
      'address' =>  $address,
      'pending' => 0,
      'confirmations' => 1,
      'email' => $user->email ?? 'default@example.com',
      'post' => 0,
      'priority' => 'default',
      'multi_token' => 0,
      'multi_chain' => 0,
      'convert' => 0,
    ];

    $fullUrl = $url . '?' . http_build_query($queryParams);

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $fullUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);

    $data = json_decode($response, true);

    if ($data && isset($data['status']) && $data['status'] === 'success' && isset($data['address_in'])) {
      $qrCodeLink = "https://api.qrserver.com/v1/create-qr-code/?size=150x150&data=" . urlencode($data['address_in']);

      return response()->json([
        'success' => true,
        'address' => $data['address_in'],
        'qr' => $qrCodeLink
      ]);
    }

    return response()->json(['success' => false, 'message' => 'API error']);
  }





  public function vip(Request $request)
  {

            $user=Auth::user();
            $level = [];
            $currentLevelIds = collect([$user->id]);
            for($i=1; $i<=3; $i++){
               $currentLevelIds = User::whereIn('sponsor', $currentLevelIds)->where('active_status', 'Active')->pluck('id');
                $levels["level{$i}Count"] = $currentLevelIds->count();
            }
            $this->data['levelACount'] = $levels['level1Count']; // Direct (A)
            $this->data['levelBCount'] = $levels['level2Count']; // Under A (B)
            $this->data['levelCCount'] = $levels['level3Count'] + $levels['level2Count'];
            $this->data['user'] = $user;
            $this->data['myRank'] = $user->rank;
            $this->data['page'] = 'user.invest.vip';
            return $this->dashboard_layout();
        }
  
  


  public function raj()
  {
    $user = Auth::user();
    $task = Task::where('active_status', 'Active')->get();
    $this->data['task'] = $task;

    $this->data['page'] = 'user.invest.raj';
    return $this->dashboard_layout();
  }
}
