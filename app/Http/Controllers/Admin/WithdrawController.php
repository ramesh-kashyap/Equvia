<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Withdraw;
use App\Models\User;
use Carbon\Carbon;
use Auth;
use DB;
class WithdrawController extends Controller
{

    public function pendingWithdrawal(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Withdraw::where('status','Pending')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset")
        {
        $notes = $notes->where(function($q) use($search){
            $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
            ->orWhere('amount', 'LIKE', '%' . $search . '%')
            ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
            ->orWhere('txn_id', 'LIKE', '%' . $search . '%')
            ->orWhere('wdate', 'LIKE', '%' . $search . '%');
          });
          }
        $notes = $notes->paginate($limit)
            ->appends([
                'limit' => $limit
            ]);

        $this->data['withdraw_list'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.withdraw.pending-withdraw';
        return $this->admin_dashboard();
    }


    public function rejectedWithdrawal(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Withdraw::where('status','Failed')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset")
        {
        $notes = $notes->where(function($q) use($search){
            $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
            ->orWhere('amount', 'LIKE', '%' . $search . '%')
            ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
            ->orWhere('txn_id', 'LIKE', '%' . $search . '%')
            ->orWhere('wdate', 'LIKE', '%' . $search . '%');
          });
          }
        $notes = $notes->paginate($limit)
            ->appends([
                'limit' => $limit
            ]);

        $this->data['withdraw_list'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.withdraw.rejected-withdraw';
        return $this->admin_dashboard();
    }


    public function approvedWithdrawal(Request $request)
    {
        $limit = $request->limit ? $request->limit : paginationLimit();
        $status = $request->status ? $request->status : null;
        $search = $request->search ? $request->search : null;
        $notes = Withdraw::where('status','Approved')->orderBy('id', 'DESC');

        if($search <> null && $request->reset!="Reset")
        {
        $notes = $notes->where(function($q) use($search){
            $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
            ->orWhere('amount', 'LIKE', '%' . $search . '%')
            ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
            ->orWhere('txn_id', 'LIKE', '%' . $search . '%')
            ->orWhere('wdate', 'LIKE', '%' . $search . '%');
          });
          }
        $notes = $notes->paginate($limit)
            ->appends([
                'limit' => $limit
            ]);

        $this->data['withdraw_list'] =  $notes;
        $this->data['search'] = $search;
        $this->data['page'] = 'admin.withdraw.approved-withdraw';
        return $this->admin_dashboard();
    }


  public function pendingBankWithdrawal(Request $request)
  {


            $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Withdraw::where('status','Pending')->where('payment_mode','!=','USDT')->orderBy('id', 'DESC');
           // $notes = Withdraw::select('withdraws.*')->where('status','Pending')->join('banks', 'banks.user_id', '=', 'withdraws.user_id');

          if($search <> null && $request->reset!="Reset")
          {
          $notes = $notes->where(function($q) use($search){
              $q->Where('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('amount', 'LIKE', '%' . $search . '%')
              ->orWhere('user_id_fk', 'LIKE', '%' . $search . '%')
              ->orWhere('txn_id', 'LIKE', '%' . $search . '%')
              ->orWhere('wdate', 'LIKE', '%' . $search . '%');
            });
            }
          $notes = $notes->paginate($limit)
              ->appends([
                  'limit' => $limit
              ]);
              $this->data['pendingBankWithdrawal'] =  $notes;
              $this->data['search'] = $search;
              $this->data['page'] = 'admin.withdraw.pendingBankWithdrawal';
              return $this->admin_dashboard();
  }


        public function withdraw_request_done(Request $request)
        {

        $id= $request->id ; // or any params
        $txHash= $request->txHash ; // or any params
        $withdraw_status= $request->withdraw_status ; // or any params
        $rejection_reason= $request->rejection_reason ; // or any params
            $withdraw_id = Withdraw::where('id',$id)->first();
            $user_id = User::where('id',$withdraw_id->user_id)->first();
         $amount = $withdraw_id->amount;
        if ($withdraw_status=="success")
        {
        $update_data['status']= 'Approved';
        if(!empty($txHash))
        {
           $update_data['txn_id']=$txHash;  
        }
        $update_data['paid_date']= Carbon::now();
        $user =  Withdraw::where('id',$id)->update($update_data);
           addNotification(
            $user_id->id,
            'Withdrawal Success',"Your withdrawal request {$amount} USDT has been approved");
            
         $userId =   $user_id->id;
        $investment = DB::table('investments')
            ->where('user_id', $userId)
            ->where('status', 'Active')
            ->sum('amount');

        $income = DB::table('incomes')
            ->where('user_id', $userId)
            ->where('remarks', '!=', 'Order revenue')
            ->sum('comm');

        $contractProfit = DB::table('contract')
            ->where('user_id', $userId)
            ->where('c_status', -1)
            ->sum('profit');

        $withdrawn = DB::table('withdraws')
            ->where('user_id', $userId)
            ->where('status', '!=', 'Failed')
            ->sum('amount');

        $balance = ($investment + $income + $contractProfit) - $withdrawn; 
         
          if ($balance < 30) {
            
              User::where('id', $userId)->update(['active_status' => 'Inactive']);
            
        }   
          
        $notify[] = ['success', 'Withdraw request Approved successfully'];
        return redirect()->back()->withNotify($notify);
        }
        else
        {
        $update_data['status']= 'Failed';
        $update_data['rejection_reason']= $rejection_reason;
        $user =  Withdraw::where('id',$id)->update($update_data);
         addNotification(
            $user_id->id,
            'Withdraw Rejection',"{$rejection_reason}");
          
                    
        $notify[] = ['success', 'Withdraw request Rejected successfully'];
        return redirect()->back()->withNotify($notify);
        }

    }


}
