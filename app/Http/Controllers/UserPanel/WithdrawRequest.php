<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Investment;
use App\Models\Bank;
use App\Models\Withdraw;
use App\Models\PasswordReset;
use App\Models\Debit;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use App\Models\Income;
use App\Models\Contract;
use Illuminate\Support\Facades\URL;
use Log;
use Redirect;
use Hash;

class WithdrawRequest extends Controller
{
    public function index()
    {
        $user=Auth::user();
        $bank = Bank::where('user_id',$user->id)->orderBy('id','desc')->get();
        $userDirect = User::where('sponsor',$user->id)->where('active_status','Active')->where('package','>=',30)->count();
        $this->data['balance'] = round($user->available_balance(),2);
        $this->data['userDirect'] = $userDirect;
        $this->data['bank'] = $bank;
        $this->data['page'] = 'user.withdraw.WithdrawRequest';
        return $this->dashboard_layout();
    }


    public function withdrawPrinciple()
    {
        $user=Auth::user();
        $bank = Bank::where('user_id',$user->id)->orderBy('id','desc')->get();
        $this->data['bank'] = $bank;
        $this->data['page'] = 'user.withdraw.withdraw-principle';
        return $this->dashboard_layout();
    }


    public function WithdrawRequest(Request $request)
    {

        try{

             $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:10',
                 
            'walletAddress' => 'required',
            'code' => 'required',
            'paymentMode' => 'required',


        ]);
        // dd($validation);
        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
        }

        $user=Auth::user();
        $password= $request->transaction_password;
        $balance=Auth::user()->available_balance();
        $userDirect = User::where('sponsor',$user->id)->where('active_status','Active')->where('package','>=',30)->count();

        $code = $request->code;
     
        if (PasswordReset::where('token', $code)->where('email', $user->email)->count() != 1) {
            $notify[] = ['error', 'Invalid Verification Code'];
            return redirect()->route('user.Withdraw')->withNotify($notify);
        }
       
        $min_withdrawal = 10;
        $maximum_withdrawal = 10;
        $chargeAmt = 10;
    
          if ($balance>=30) 
          {
              $min_withdrawal = 10;
              $maximum_withdrawal = 50000;
              $chargeAmt = 10;
          }
          if ($balance>=500 && $userDirect>=5) 
          {
              $min_withdrawal = 30;
              $maximum_withdrawal = 50000;
              $chargeAmt = 10;
          }
          if ($balance>=3000 && $userDirect>=10) 
          {
              $min_withdrawal = 50;
              $maximum_withdrawal = 50000;
              $chargeAmt = 10;
          }


        if ($request->amount<$min_withdrawal || $request->amount>$maximum_withdrawal) 
        {
          return Redirect::back()->withErrors(array('mininum withdrawal is '.$min_withdrawal.' and maximum withdrawal is '.$maximum_withdrawal));    
        }  

       
          $account =  $request->walletAddress;
      
        $password=$request->transaction_password;
        
        //  if($request->PSys=="USDT.BEP20")
        //  {
        //   \DB::table('users')->where('id',$user->id)->update(['usdtBep20' =>$account]);  
        //  }
        //  else
        //  {
        //    \DB::table('users')->where('id',$user->id)->update(['usdtTrc20' =>$account]);      
        //  }
       
        // if (Hash::check($password, $user->tpassword))

        // { 
        if ($balance>=$request->amount)
        {
         $todayWitdrw=Withdraw::where('user_id',$user->id)->where('status','!=','Failed')->where('wdate',date('Y-m-d'))->first();
         
         if($todayWitdrw)
         {
          return Redirect::back()->withErrors(array('Any Withdraw limit per Id once a day !'));    
         }
         
         
         
         $user_detail=Withdraw::where('user_id',$user->id)->where('status','Pending')->first();

         if(!empty($user_detail))
         {
           return Redirect::back()->withErrors(array('Withdraw Request Already Exist !'));
         }
         else
         {
             
                      
      
          if(!empty($account))
              {
                   
                 $data = [
                        'txn_id' =>md5(time() . rand()),     
                        'user_id' => $user->id,
                        'user_id_fk' => $user->username,
                        'amount' => $request->amount,
                        'payable_amt' => $request->amount-$request->amount*$chargeAmt/100,
                        'charge' => $request->amount*$chargeAmt/100,
                        'account' => $account,
                        'payment_mode' =>$request->paymentMode,
                        'status' => 'Pending',
                        'walletType' => 1,
                        'wdate' => Date("Y-m-d"),
                    ];
                   $payment =  Withdraw::Create($data);
                  
                  $withdraw_id = $payment['id'];
              
                $notify[] = ['success','Withdrawal successfully'];
        
                return redirect()->back()->with('withdralId',$withdraw_id)->withNotify($notify);
                   
                    
              
                 
                
              }
              else
                {
                return Redirect::back()->withErrors(array('Please Update Your '.$request->paymentMode.' Payment address'));
                }  


         }

        }
        else
        {
     return Redirect::back()->withErrors(array('Insufficient balance in Your account'));
        }
      // }
      // else
      // {
      // return Redirect::back()->withErrors(array('Invalid Transaction Password'));
      // }  

    }
    catch(\Exception $e){
     Log::info('error here');
     Log::info($e->getMessage());
     print_r($e->getMessage());
     die("hi");
     return  redirect()->route('user.WithdrawRequest')->withErrors('error', $e->getMessage())->withInput();
       }




    }



    public function WithdrawRequestPrinciple(Request $request)
    {

        try{

             $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:20',
            'paymentMode' => 'required',    
            'transaction_password' => 'required',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
        }

        $user=Auth::user();
        $password= $request->transaction_password;
        $balance=Auth::user()->principleBalance();
        $account =  $user->trx_addres;
        if ($balance>=$request->amount)
        {
            
        $todayWitdrw=Withdraw::where('user_id',$user->id)->where('wdate',date('Y-m-d'))->first();
         
         if($todayWitdrw)
         {
          return Redirect::back()->withErrors(array('Any Withdraw limit per Id once a day !'));    
         }
         
         
          $todayWitdrwSUm=Withdraw::where('user_id',$user->id)->where('wdate',date('Y-m-d'))->first();
         $todayWitdrwSUm=$todayWitdrwSUm+$request->amount;
         if($todayWitdrwSUm>=500)
         {
          return Redirect::back()->withErrors(array('Any Withdraw limit per 500$ once a day !'));    
         }
         
         
         $user_detail=Withdraw::where('user_id',$user->id)->where('status','Pending')->first();

         if(!empty($user_detail))
         {
           return Redirect::back()->withErrors(array('Withdraw Request Already Exist !'));
         }
         else
         {
         
          if(!empty($account))
              {
              if (Hash::check($password, $user->tpassword))
               {
             
                   $data = [
                        'txn_id' =>md5(time() . rand()),     
                        'user_id' => $user->id,
                        'user_id_fk' => $user->username,
                        'amount' => $request->amount,
                        'account' => $account,
                        'payment_mode' =>$request->paymentMode,
                        'status' => 'Pending',
                        'walletType' => 2,
                        'wdate' => Date("Y-m-d"),
                    
                        
                    ];
                   $payment =  Withdraw::Create($data);
                     $withdralId = $payment['id'];
                     $package = $user->package-$request->amount;
                     User::where('id',$user->id)->update(['package' => $package]);
                    
            $notify[] = ['success','Withdraw Request Submited successfully'];
    
               return redirect()->back()->with('withdralId',$withdralId)->withNotify($notify);
                   
             
               
              }
                else
                {
                return Redirect::back()->withErrors(array('Invalid Transaction Password'));
                }     
                
              }
              else
                {
                return Redirect::back()->withErrors(array('Please Update Your USDT Payment Address Or Bank Details'));
                }  
         }

        }
        else
        {
     return Redirect::back()->withErrors(array('Insufficient balance in Your account'));
        }

    }
    catch(\Exception $e){
     Log::info('error here');
     Log::info($e->getMessage());
     print_r($e->getMessage());
     die("hi");
     return  redirect()->route('user.WithdrawRequest')->withErrors('error', $e->getMessage())->withInput();
       }




    }


    public function WithdrawHistory(Request $request){

      $user=Auth::user();
      $limit = $request->limit ? $request->limit : paginationLimit();
       $status = $request->status ? $request->status : null;
       $search = $request->search ? $request->search : null;
       $start_date = $request->start_date;
       $end_date = $request->end_date;
       $notes = Withdraw::where('user_id',$user->id)->orderBy('wdate','DESC');
       if ($start_date && $end_date) {
        $notes = $notes->whereBetween('created_at', [
            $start_date . " 00:00:00",
            $end_date . " 23:59:59"
        ]);
    }
      if($search <> null && $request->reset!="Reset"){
       $notes = $notes->where(function($q) use($search){
          $q->Where('wdate', 'LIKE', '%' . $search . '%')
            ->orWhere('amount', 'LIKE', '%' . $search . '%')
            ->orWhere('status', 'LIKE', '%' . $search . '%')
            ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
       });

      }

      $notes = $notes->paginate($limit)->appends([
        'limit' => $limit,
        'start_date' => $start_date,
        'end_date' => $end_date,
        'search' => $search,
    ]);
     $this->data['search'] =$search;
     $this->data['withdraw_report'] =$notes;
     $this->data['page'] = 'user.withdraw.WithdrawHistory';
     return $this->dashboard_layout();
  } 
  
    
    public function debitReport(Request $request){

        $user=Auth::user();
        $limit = $request->limit ? $request->limit : paginationLimit();
         $status = $request->status ? $request->status : null;
         $search = $request->search ? $request->search : null;
         $notes = Debit::where('user_id',$user->id);
        if($search <> null && $request->reset!="Reset"){
         $notes = $notes->where(function($q) use($search){
            $q->Where('wdate', 'LIKE', '%' . $search . '%')
              ->orWhere('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('status', 'LIKE', '%' . $search . '%')
              ->orWhere('txn_id', 'LIKE', '%' . $search . '%');
         });

        }

         $notes = $notes->paginate($limit)->appends(['limit' => $limit ]);

       $this->data['search'] =$search;
       $this->data['withdraw_report'] =$notes;
       $this->data['page'] = 'user.withdraw.debit';
       return $this->dashboard_layout();
    }
    public function asset()
    {
        $user=Auth::user();
        date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
        
         $contracts = Contract::where('user_id', $user->id)
        ->orderBy('created_at', 'ASC')->get(['created_at', 'profit']); // only select fields we need

       // Format data for chart
       $dates = $contracts->pluck('created_at')->map(function($date) {
         return $date->format('Y-m-d'); 
        });
        $this->data['profit'] = $contracts;
        $this->data['dates']  = $dates; 
    

        $userDirect = User::where('sponsor',$user->id)->where('active_status','Active')->where('package','>=',30)->count();
        $totalRoi = \DB::table('contract')->where('user_id',$user->id)->where('c_status','-1')->sum('profit');
        $todaysRoi = \DB::table('contract')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->where('c_status','-1')->sum('profit');
        $this->data['totalRoi'] = $totalRoi;
        $this->data['userDirect'] = $userDirect;
        $this->data['todaysRoi'] = $todaysRoi;
        $this->data['todaysRoiSum'] = \DB::table('contract')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->where('c_status','-1')->sum('profit');
        $this->data['todaysLevelIncome'] = \DB::table('incomes')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->where('remarks','Level Income')->sum('comm');
        $this->data['totalLevelIncome'] = \DB::table('incomes')->where('user_id',$user->id)->where('remarks','Level Income')->sum('comm');
        $this->data['totalIncome'] = \DB::table('incomes')->where('user_id',$user->id)->where('remarks','!=','Order revenue')->sum('comm')+$totalRoi;
        $this->data['todaysIncome'] = \DB::table('incomes')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->where('remarks','!=','Order revenue')->sum('comm')+$todaysRoi;
        $this->data['balance'] =round($user->available_balance(),2);
        $this->data['page'] = 'user.withdraw.asset';
        return $this->dashboard_layout();
    }




        
public function getAddresswallet($currency)
{
    $user = Auth::user();
    $refId = $user->username;

    // Currency-based API URL
    if ($currency === 'USDT_BSC') {

        $address=  $user->usdtBep20;
    } elseif ($currency === 'USDT_TRX') {
      $address=  $user->usdtTrc20;
    } else {
        return response()->json(['success' => false, 'message' => 'Invalid currency']);
    }

    return response()->json([
      'success' => true,
      'address' => $address,
  ]);

    return response()->json(['success' => false, 'message' => 'API error']);
}



    public function my_level_team_count($userid,$level=10){
      $arrin=array($userid);
      $ret=array();

      $i=1;
      while(!empty($arrin)){
          $alldown=User::select('id')->whereIn('sponsor',$arrin)->get()->toArray();
          if(!empty($alldown)){
              $arrin = array_column($alldown,'id');
              $ret[$i]=$arrin;
              $i++;

              if ($i>$level) {
                break;
               }

          }else{
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


}
