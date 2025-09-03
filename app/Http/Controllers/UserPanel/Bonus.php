<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Income;
use App\Models\Investment;
use App\Models\Reward;
use App\Models\Boost_direct;
use App\Models\User_trade;
use Illuminate\Support\Facades\DB;
use App\Models\Contract;
use App\Models\Task;
use App\Models\Order
;


use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Http;

use Auth;
use Log;
use Redirect;
use Hash;

class Bonus extends Controller
{
    public function index(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Task Income')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.level-income';
        return $this->dashboard_layout();


    }

    public function cashback_income(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Sponsorship Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.cashback-income';
        return $this->dashboard_layout();


    }

    public function activitiesBonus(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Activities Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.activitiesBonus';
        return $this->dashboard_layout();


    }


    public function gap_margin_bonus(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Gap Margin Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.gap-margin-bonus';
        return $this->dashboard_layout();


    }



    public function dailyIncentive(Request $request)
    {
       $user=Auth::user();

          $limit = $request->limit ? $request->limit : paginationLimit();
            $status = $request->status ? $request->status : null;
            $search = $request->search ? $request->search : null;
            $notes = Income::where('user_id',$user->id)->where('remarks','Leadership Bonus')->orderBy('id', 'DESC');
           if($search <> null && $request->reset!="Reset"){
            $notes = $notes->where(function($q) use($search){
              $q->Where('rname', 'LIKE', '%' . $search . '%')
              ->orWhere('ttime', 'LIKE', '%' . $search . '%')
              ->orWhere('level', 'LIKE', '%' . $search . '%')
              ->orWhere('amt', 'LIKE', '%' . $search . '%')
              ->orWhere('comm', 'LIKE', '%' . $search . '%');
            });

      }
            $notes = $notes->paginate($limit)
                ->appends([
                    'limit' => $limit
                ]);
        $this->data['level_income'] =$notes;
        $this->data['search'] =$search;
        $this->data['page'] = 'user.bonus.daily-incentive';
        return $this->dashboard_layout();


    }



    public function my_level_team_count($userid,$level=3){
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





    public function reward_income(Request $request)
    {
        date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
        $user=Auth::user();
        
           $my_level_team=$this->my_level_team_count($user->id);
    $gen_team1 =  (array_key_exists(1,$my_level_team) ? $my_level_team[1]:array());
    $gen_team2 =  (array_key_exists(2,$my_level_team) ? $my_level_team[2]:array());
    $gen_team3 =  (array_key_exists(3,$my_level_team) ? $my_level_team[3]:array());
  
    $gen_team1 = User::where(function($query) use($gen_team1)
            {
              if(!empty($gen_team1)){
                foreach ($gen_team1 as $key => $value) {
                //   $f = explode(",", $value);
                //   print_r($f)."<br>";
                  $query->orWhere('id', $value);
                }
              }else{$query->where('id',null);}
            })->orderBy('id', 'DESC')->get();
            
      $gen_team2 = User::where(function($query) use($gen_team2)
            {
              if(!empty($gen_team2)){
                foreach ($gen_team2 as $key => $value) {
                //   $f = explode(",", $value);
                //   print_r($f)."<br>";
                  $query->orWhere('id', $value);
                }
              }else{$query->where('id',null);}
            })->orderBy('id', 'DESC')->get();
       $gen_team3 = User::where(function($query) use($gen_team3)
            {
              if(!empty($gen_team3)){
                foreach ($gen_team3 as $key => $value) {
                //   $f = explode(",", $value);
                //   print_r($f)."<br>";
                  $query->orWhere('id', $value);
                }
              }else{$query->where('id',null);}
            })->orderBy('id', 'DESC')->get();
  
  
    
  
      $this->data['gen_team1total'] =$gen_team1->count();
      $this->data['active_gen_team1total'] =$gen_team1->where('active_status','Active')->count();
      $this->data['gen_team2total'] =$gen_team2->count();
      $this->data['active_gen_team2total'] =$gen_team2->where('active_status','Active')->count();
  
      $this->data['gen_team3total'] =$gen_team3->count();
      $this->data['active_gen_team3total'] =$gen_team3->where('active_status','Active')->count();
  
  
      $this->data['gen_team1Income'] =$gen_team1->count();
  
      $notes = Order::where('user_id',$user->id)->orderBy('id','DESC')->get();
        
  
        $userDirect = User::where('sponsor',$user->id)->where('active_status','Active')->where('package','>=',30)->count();
        $totalRoi = \DB::table('contract')->where('user_id',$user->id)->sum('profit');
        $todaysRoi = \DB::table('orders')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->get();
        $this->data['todaysTrade'] = $todaysRoi;
        $this->data['totalRoi'] = $totalRoi;
        $this->data['userDirect'] = $userDirect;
        $this->data['todaysRoi'] = $todaysRoi->count();
        $this->data['todaysRoiSum'] = \DB::table('orders')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->sum('roi');
        $this->data['todaysLevelIncome'] = \DB::table('incomes')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->where('remarks','Level Income')->sum('comm');
        $this->data['totalLevelIncome'] = \DB::table('incomes')->where('user_id',$user->id)->where('remarks','Level Income')->sum('comm');
        $this->data['balance'] =round($user->available_balance(),2);
        $this->data['level_income'] =$notes;
   
    $this->data['page'] = 'user.bonus.reward-bonus';
    return $this->dashboard_layout();

    }

 
 
  public function my_level_team($userid,$level=3){
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

      $final = array();
      if(!empty($ret)){
          array_walk_recursive($ret, function($item, $key) use (&$final){
              $final[] = $item;
          });
      }


      return $final;

  }


  public function roi_income(Request $request)
  {
      $user = Auth::user();
  
      $limit = $request->limit ?? 7;
      $status = $request->status ?? null;
      $search = $request->search ?? null;
      $start_date = $request->start_date;
      $end_date = $request->end_date;
  
      $notes = Income::where('user_id', $user->id)->orderBy('created_at', 'DESC');
  
      // ✅ Add date filter here
      if ($start_date && $end_date) {
          $notes = $notes->whereBetween('created_at', [
              $start_date . " 00:00:00",
              $end_date . " 23:59:59"
          ]);
      }
  
      // 🔍 Search filter
      if ($search && $request->reset != "Reset") {
          $notes = $notes->where(function ($q) use ($search) {
              $q->Where('ttime', 'LIKE', '%' . $search . '%')
                  ->orWhere('amt', 'LIKE', '%' . $search . '%')
                  ->orWhere('rname', 'LIKE', '%' . $search . '%')
                  ->orWhere('comm', 'LIKE', '%' . $search . '%');
          });
      }
  
      $notes = $notes->paginate($limit)->appends([
          'limit' => $limit,
          'start_date' => $start_date,
          'end_date' => $end_date,
          'search' => $search,
      ]);
  
      $this->data['level_income'] = $notes;
      $this->data['search'] = $search;
      $this->data['page'] = 'user.bonus.roi-bonus';
  
      return $this->dashboard_layout();
  }
  


}
