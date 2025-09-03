<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\BuyFund;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Hexters\CoinPayment\CoinPayment;
use App\Models\CoinpaymentTransaction;
use Log;
use Redirect;
class AddFund extends Controller
{

public function index(Request $request)
{

$user=Auth::user();
$this->data['page'] = 'user.fund.addFund';
return $this->dashboard_layout();

}

   public function confirmFund()
    {
        // 1. Fetch currency setting
        $curText = DB::table('general_settings')->value('cur_text'); // e.g. 'INR', 'usdtTrc20', 'usdtBep20'

        // 2. Based on currency value, pick wallet or bank details
        if (Str::contains(strtolower($curText), 'trc20')) {
            $walletAddress = DB::table('general_settings')->value('usdtTrc20');
            $bankDetails = null;
        } elseif (Str::contains(strtolower($curText), 'bep20')) {
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

        // 3. Prepare view data
        $this->data['currency']      = $curText;
        $this->data['walletAddress'] = $walletAddress;
        $this->data['bankDetails']   = $bankDetails;
        $this->data['page']          = 'user.fund.confirmFund';

        // 4. Return view using your dashboard layout
        return $this->dashboard_layout();
    }



public function fundHistory(Request $request)
{

    $user=Auth::user();
    $limit = $request->limit ? $request->limit : paginationLimit();
    $status = $request->status ? $request->status : null;
    $search = $request->search ? $request->search : null;
    $notes = CoinpaymentTransaction::where('buyer_name',$user->username);      
    if($search <> null && $request->reset!="Reset"){
    $notes = $notes->where(function($q) use($search){
    $q->Where('buyer_name', 'LIKE', '%' . $search . '%')          
    ->orWhere('txn_id', 'LIKE', '%' . $search . '%')
    ->orWhere('address', 'LIKE', '%' . $search . '%')
    ->orWhere('amount_total_fiat', 'LIKE', '%' . $search . '%')
    ->orWhere('coin', 'LIKE', '%' . $search . '%');
    });

    }
  $notes = $notes->paginate($limit)
      ->appends([
          'limit' => $limit
      ]);

$this->data['search'] =$search;
$this->data['add_fund_report'] =$notes;
$this->data['page'] = 'user.fund.fundHistory';
return $this->dashboard_layout();

}





public function SubmitBuyFund(Request $request)
{

  try{
        $validation =  Validator::make($request->all(), [
            'amount' => 'required|numeric|min:0',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());

            return redirect()->route('user.AddFund')->withErrors($validation->getMessageBag()->first())->withInput();
        }

           $user=Auth::user();
                   
           $transaction['order_id'] = uniqid(); // invoice number
            $transaction['amountTotal'] = (FLOAT) $request->amount;
            $transaction['note'] = 'Transaction note';
           $transaction['buyer_name'] = $user->username;
           $transaction['user_id'] = $user->id;
            $transaction['buyer_email'] = $user->email;
            $transaction['redirect_url'] = url('user/AddFund?res=success'); // When Transaction was comleted
            $transaction['cancel_url'] = url('user/AddFund'); // When user click cancel link

           /*
           *   @required true
           *   @example first item
           */
           $transaction['items'][] = [
             'itemDescription' => 'Cryptoversal',
             'itemPrice' => (FLOAT) $request->amount, // USD
             'itemQty' => (INT) 1,
             'itemSubtotalAmount' => (FLOAT) $request->amount // USD
           ];

           $transaction['payload'] = [
             'foo' => [
                 'bar' => 'baz'
             ]
           ];

                $url_ = CoinPayment::generatelink($transaction);

            return Redirect::to($url_);

      }
       catch(\Exception $e){
        Log::info('error here');
        Log::info($e->getMessage());
        print_r($e->getMessage());
        die("hi");
        return  redirect()->route('user.AddFund')->withErrors('error', $e->getMessage())->withInput();
    }

}



}
