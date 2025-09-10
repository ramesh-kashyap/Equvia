<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use App\Models\User;
use App\Models\Investment;
use App\Models\Income;
use App\Models\PasswordReset;
use App\Models\User_trade;
use App\Models\Contract;
use App\Models\Withdraw;
use App\Models\Notification;
use App\Models\Order;
use App\Models\Company;
use App\Models\Machine;
use App\Models\Variable;
use App\Models\Activitie;
use Illuminate\Support\Facades\DB;

use Illuminate\Support\Facades\Http;

use Carbon\Carbon;
use Redirect;
use Log;
use Hash;
use Helper;
class Dashboard extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {

      $user=Auth::user();

      
      $user_direct=User::where('sponsor',$user->id)->where('active_status','Active')->count();
      $directIds=User::where('sponsor',$user->id)->where('active_status','Active')->pluck('id');
      $personal_deposit=Investment::where('user_id',$user->id)->where('status','Active')->sum('amount');

      $tolteam=$this->my_level_team($user->id);               
 
 
      $notificationCount = \DB::table('notifications')->where('read_status',0)->where('user_id',$user->id)->count();
     
      $deposit_report = Investment::where('user_id',$user->id)->orderBy('id','desc')->get();
      $weekly_profit = Income::where('user_id',$user->id)
      ->whereBetween('ttime', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->sum('comm');
      $totalIncome = Income::where('user_id',$user->id)->sum('comm');

        $transaction_data = Income::where('user_id',$user->id)->orderBy('id', 'desc')->take(10)->get();
          $this->data['todaysRoiSum'] = \DB::table('contract')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->where('c_status','-1')->sum('profit');

         $total_team=User::whereIn('id',(!empty($tolteam)?$tolteam:array()))->where('active_status','Active')->count();
        $this->data['weekly_profit'] =$weekly_profit;
            $this->data['total_team'] =$total_team;
        $this->data['transaction_data'] =$transaction_data;
        $this->data['deposit_report'] =$deposit_report;
        $this->data['user_direct'] =$user_direct;
        $total = $personal_deposit*200/100;
        $portion = $totalIncome;
        if($personal_deposit>0)
        {
             $percentage = ($portion / $total) * 100; // 20 
        }
        else
        {
        $percentage=0;    
        }


      $ids=$this->my_level_team($user->id);
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


        $todaysIncome =  \DB::table('incomes')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->where('remarks','Level Income')->sum('comm');
    
        $response = Http::get('https://api.coingecko.com/api/v3/coins/markets', [
            'vs_currency' => 'usd',
            'order' => 'market_cap_desc',
            'per_page' => 6,
            'page' => 1,
            'sparkline' => false
        ]);
        if ($response->successful()) {
          $coins = $response->json();
          // Proceed with using $coins
      } else {
          // Handle the error, log it, or throw an exception
          Log::error('CoinGecko API request failed', [
              'status' => $response->status(),
              'body' => $response->body()
          ]);
          $coins = []; // or handle error appropriately
      }


      


      $this->data['coins'] =$coins ;
     $this->data['willgetProfit'] =$personal_deposit*200/100;
     $this->data['remaining_amount'] =($personal_deposit*2)-$totalIncome;
     $this->data['totalIncome'] =$percentage;

     $this->data['todaysIncome'] =$todaysIncome;



     $this->data['gen_team1total'] =$gen_team1->count();
     $this->data['active_gen_team1total'] =$gen_team1->where('active_status','Active')->count();
     $this->data['gen_team2total'] =$gen_team2->count();
     $this->data['active_gen_team2total'] =$gen_team2->where('active_status','Active')->count();

     $this->data['gen_team3total'] =$gen_team3->count();
     $this->data['active_gen_team3total'] =$gen_team3->where('active_status','Active')->count();


     $this->data['gen_team1Income'] =$gen_team1->count();
     $this->data['notificationCount'] =$notificationCount;

      $this->data['page'] = 'user.dashboard';
      return $this->dashboard_layout();


    }


     
   public function claimReward(Request $request)
   {
       $user = Auth::user();
       
        $amount= $request->amount;
        $rank= $request->rank;
     
      $alreadyClaimed = \DB::table('incomes')
           ->where('user_id', $user->id)
           ->where('comm', $amount)
           ->where('remarks', 'Task Income')
           ->exists();
   
       if (!$alreadyClaimed) {
           // Insert into incomes table
            \DB::table('incomes')->insert([
               'user_id' => $user->id,
               'user_id_fk' => $user->username,
               'amt' => $amount,
               'comm' => $amount,
               'level' => $rank,
               'remarks' => 'Task Income',
               'ttime' => now(),
               'created_at' => now(),
               'updated_at' => now(),
           ]);
               
               $bonusAmount = $amount;   
   
   
           $notify[] = ['success', 'Congratulations! You have received an Task Reward!'];
           return redirect()->back()->withNotify($notify);
       }
   
         return Redirect::back()->withErrors(array('You are not eligible or have already claimed the reward'));
   }

   


      public function stop_trade(Request $request)
    {
        try {
            $user = auth()->user(); // get authenticated user

            if (!$user) {
                return response()->json([
                    'status' => false,
                    'message' => 'Unauthorized'
                ], 401);
            }

            // Find active contract
            $contract = Contract::where('user_id', $user->id)
                ->where('c_status', 1)
                ->first();

            if (!$contract) {
                return response()->json([
                    'status' => false,
                    'message' => 'Active contract not found'
                ], 404);
            }

            // Update contract status
            $contract->c_status = -1;
            $contract->save();

            $nowTS = now()->format('Y-m-d H:i:s');

            // Apply capping logic
            $cappinAmount = $contract->profit;

            if ($cappinAmount > 0) {
                // Record income
                $incomeData = [
                    'remarks'    => 'Trade Profit',
                    'comm'       => $cappinAmount,
                    'amt'        => $contract->c_ref,
                    'invest_id'  => $contract->id,
                    'level'      => 0,
                    'ttime'      => now()->format('Y-m-d'),
                    'user_id_fk' => $user->username, // make sure `username` exists in users table
                    'user_id'    => $user->id,
                    'created_at' => $nowTS
                ];

                Income::create($incomeData);

                // Add Team Commission
                add_level_income($user->id, $cappinAmount);
            }

            return response()->json([
                'status' => true,
                'profit' => $cappinAmount
            ]);

        } catch (\Exception $error) {
            \Log::error("stopTrade error: " . $error->getMessage());

            return response()->json([
                'status' => false,
                'message' => 'Server error'
            ], 500);
        }
    }


      
 public function tradeOnJson(Request $req)
    {
        try {
            /** @var \App\Models\User $user */
            $user = auth()->user(); // or $req->user();

            // 1) Start/End of day in IST, then converted to UTC for DB queries
            $startOfDayUtc = Carbon::now('Asia/Kolkata')->startOfDay()->setTimezone('UTC');
            $endOfDayUtc   = Carbon::now('Asia/Kolkata')->endOfDay()->setTimezone('UTC');

            // 2) Prevent double-trading (pending contract)
            $pending = Contract::where('user_id', $user->id)
                ->where('c_status', 1)
                ->orderByDesc('id')
                ->first();

            if ($pending) {
                return response()->json([
                    'success' => true,
                    'code'    => 'TRADE_PLACED',
                    'data'    => [
                        'contractId' => $pending->id,
                        'trade'      => $pending->trade,
                        'bot'        => $pending->c_bot,
                        'qty'        => $pending->qty,
                        'profit'     => $pending->profit,
                        'c_name'     => $pending->c_name,
                    ],
                ]);
                // Or return an error if you want to block:
                // return response()->json(['success'=>false,'code'=>'PENDING_TRADE','message'=>'You already have a pending trade.']);
            }

         

            // 3) Balance check
             $balance = $req->amount > round($user->available_balance(),3) ? round($user->available_balance(),3) : $req->amount;

            if ($balance < 1) {
                return response()->json([
                    'success' => false,
                    'code'    => 'INSUFFICIENT_FUNDS',
                    'message' => 'Insufficient funds to start a trade.',
                ], 400);
            }

            // 4) Determine VIP (tier) & allowed trades
            $vipIdx       = getVip($user->id);          // e.g. returns an int index
            $quantifiable = 1;   // number of trades allowed today

            // 5) Trades already today
            $todayCount = Contract::where('user_id', $user->id)
                ->where('ttime',date('Y-m-d'))->count();

            if ($todayCount >= $quantifiable) {
                return response()->json([
                    'success' => false,
                    'code'    => 'NO_TRADES_LEFT',
                    'message' => 'You have used up your trades for today.',
                ]);
            }

            // 6) Update front-end remaining-trade amount
            $todaySum = Contract::where('user_id', $user->id)
                ->where('ttime',date('Y-m-d'))
                ->sum('profit') ?? 0;

            $remaining  = $balance - $todaySum;
            $perTrade   = $quantifiable > 0 ? ($remaining / $quantifiable) : 0;
            $tradesLeft = $quantifiable - ($todayCount + 1);
            $updateAmt  = max(0, $perTrade * max(0, $tradesLeft));

            // Update on user (if you track this)
            $user->update(['tradeAmt' => $updateAmt]);

            // 7) Trade index rotation, factor, and pricing
            $vars = Variable::where('v_id', 11)->firstOrFail();
            $tIndex = $vars->trade_index ?? 0;
            if ($tIndex < 0) { throw new \Exception('Invalid trade_index'); }
            if ($tIndex === 15) { $tIndex = 0; }

            $factorArr = [435,193,146,193,435,146,193,146,435,435,146,193,193,146,435];
            $factor = $factorArr[$tIndex];
            // bump index
            $vars->update(['trade_index' => $tIndex + 1]);

            // 8) Get coin rates
            $prices = coinrates(); // should return assoc array: ['btc'=>..., 'eth'=>..., etc]
            if (isset($prices['error'])) {
                throw new \Exception($prices['error']);
            }

            // 9) Decide Buy vs Sell, rotate v_index
            $zeroArr = ["eth","doge","btc","btc","bnb","btc","eth","eth","btc","btc","bnb","btc","eth","btc","eth","car"];
            $vIndex  = $vars->v_index ?? 0;
            $trade   = ($vIndex % 2 === 0) ? 'Sell' : 'Buy';
            $newV    = ($vIndex === 15) ? 0 : $vIndex + 1;
            $vars->update(['v_index' => $newV]);

            $sym = $zeroArr[$vIndex] ?? 'btc';

            $bot = Machine::where('m_id', $vipIdx)->first();
            if (!$bot) {
                return response()->json([
                    'success' => false,
                    'code'    => 'NO_BOT_FOUND',
                    'message' => 'No trading bot available for your tier.',
                ]);
            }

            // 🔟 Compute prices & profit
            $uStr   = (float) $balance;
            $pct    = (float) number_format(($bot->m_return / $factor), 5, '.', '');
            $usdPool = $uStr * 0.7;

            $base  = (float) ($prices[$sym] ?? 0);
            if ($base <= 0) {
                throw new \Exception("Invalid price for symbol: {$sym}");
            }

            $buyPx  = (float) number_format(($base - ($base * $pct/100)), 5, '.', '');
            $sellPx = (float) number_format(($base + ($base * $pct/100)), 5, '.', '');
            $qty    = $usdPool / ($trade === 'Buy' ? $buyPx : $sellPx);

            $profit = $usdPool * $pct;          // ROI in USD
            $refPool = $uStr * 0.3 * $pct;      // whatever this represents for referral

            // Timestamps
            $nowIST = Carbon::now('Asia/Kolkata')->format('Y-m-d H:i:s');
            $carbon = Carbon::now('Asia/Kolkata');

            $user->investment()
            ->where('unlock_at', '<=', now())
            ->update([
                'unlock_at' => $carbon->copy()->addDays(21)
            ]);

            // Cap final-trade ROI (if last trade of the day)
            if ($todayCount === ($quantifiable - 1)) {
                $maxRoi = ($balance - $todaySum) * ($bot->m_return / 100);
                $extra  = $maxRoi - ($todaySum + $profit);
                $profit += $extra;

                $user->update(['last_trade' => $nowIST]);
            }

         

            // 11) Insert the trade (transaction around create is good practice)
            $contract = DB::transaction(function () use (
                $user, $trade, $bot, $buyPx, $sellPx, $qty, $profit, $sym, $refPool, $nowIST
            ) {
                return Contract::create([
                    'user_id'  => $user->id,
                    'trade'    => $trade,
                    'c_bot'    => $bot->m_name,
                    'c_buy'    => ($trade === 'Buy') ? $buyPx : $sellPx,
                    'c_sell'   => ($trade === 'Buy') ? $sellPx : $buyPx,
                    'qty'      => $qty,
                    'profit'   => $profit,
                    'c_name'   => $sym,
                    'c_status' => 1,
                    'c_ref'    => $refPool,
                    'created_at' => $nowIST,
                    'ttime'      => $nowIST, // You can store UTC if you prefer: Carbon::now('UTC')
                ]);
            });

            return response()->json([
                'success' => true,
                'code'    => 'TRADE_PLACED',
                'data'    => [
                    'contractId'      => $contract->id,
                    'trade'           => $trade,
                    'bot'             => $bot->m_name,
                    'qty'             => $qty,
                    'profit'          => $profit,
                    'c_name'          => $sym,
                    'remainingTrades' => $quantifiable - ($todayCount + 1),
                ],
            ]);
        } catch (\Throwable $e) {
            \Log::error('tradeOnJson error: '.$e->getMessage(), ['trace' => $e->getTraceAsString()]);
            return response()->json([
                'success' => false,
                'code'    => 'SERVER_ERROR',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
      

         public function tradeOn(Request $request)
         {
          $request->validate([
        'amount' => 'required|numeric|min:1',
          ]);
         $balance = $request->amount;
         $user = Auth::user();
         date_default_timezone_set("Asia/Kolkata");
         $pendingTrade = \DB::table('contract')->where('user_id', $user->id)->where('c_status', 1)->first();         
         if ($pendingTrade) {
         return redirect()->route('user.quality', 'trade');
         }

         $investm = Investment::where('user_id', $user->id)->sum('amount');
         if ($investm < 1) { $notify[]=['error', 'insufficient funds' ]; return redirect()->
             back()->withNotify($notify);
             }

             $todaysRoi = \DB::table('contract')->where('user_id', $user->id)->where('ttime', date('Y-m-d'))->count();
              
             // Quantifiable ROI conditions
             $quantifiable_count = 1;
             if ($todaysRoi >= 1) {
             return redirect()->route('user.quality', 'notrade');
             }

             // Deduct today's ROI sum from balance
             $todaysRoiSum = \DB::table('contract')->where('user_id', $user->id)->where('ttime',
             date('Y-m-d'))->sum('profit') ?? 0;
            //  $balance2 = $balance - $todaysRoiSum;
            //  $forthhalf = $balance2 / $quantifiable_count;
            //  $minQuan = max(0, $quantifiable_count - ($todaysRoi + 1));
            //  $updateBalance = $forthhalf * $minQuan;


             \DB::table('users')->where('id', $user->id)->update(['tradeAmt' => $balance]);

             // Continue with trade if quantifiable_count == 3 or 4 or 6
             $trade_index_data = \DB::table('variables')->where('v_id', 11)->first();
             $trade_index = $trade_index_data->trade_index;
             if ($trade_index < 0) exit(); if ($trade_index==15) { \DB::table('variables')->where('v_id',
                 11)->update(['trade_index' => 0]);
                 $trade_index = 0;
                 }

                 $factor_arr = [435, 193, 146, 193, 435, 146, 193, 146, 435, 435, 146, 193, 193, 146, 435];
                 $tcoins_arr = coinrates();

                 $factor = $factor_arr[$trade_index];
                 $trade_index++;
                 \DB::table('variables')->where('v_id', 11)->update(['trade_index' => $trade_index]);

                 $todays = date("Y-m-d");
                 $day = date("l");
                 $userID = $user->id;
                 $u_str = $request->amount;

                 $idx = 1;
                 $levels = [];
                 $currentLevelIds = collect([$user->id]);
                 for($i=1; $i<=3; $i++){ $currentLevelIds=User::whereIn('sponsor', $currentLevelIds)->
                     where('active_status', 'Active')->pluck('id');
                     $levels["level{$i}Count"] = $currentLevelIds->count();
                     }
                     $levelACount = $levels['level1Count']; // Direct (A)
                     $levelBCount = $levels['level2Count']; // Under A (B)
                     $levelCCount = $levels['level3Count'] + $levels['level2Count'];
                     $this->data['balance'] = $balance;
                     $this->data['levelACount'] = $levelACount;
                     $this->data['levelBCount'] = $levelBCount;
                     $this->data['levelCCount'] = $levelCCount;
                     switch (true) {
                     case ($balance >= 50000 && $levelACount > 100 && $levelCCount > 300):
                     $idx = 6;
                     break;
                     case ($balance >= 20000 && $levelACount > 80 && $levelCCount > 200):
                     $idx = 5;
                     break;
                     case ($balance >= 5000 && $levelACount > 50 && $levelCCount > 100):
                     $idx = 4;
                     break;
                     case ($balance >= 2000 && $levelACount > 30 && $levelCCount > 60):
                     $idx = 3;
                     break;
                     case ($balance >= 500 && $levelACount > 20 && $levelCCount > 40):
                     $idx = 2;
                     break;
                     case ($balance >= 50 && $levelACount > 10 && $levelCCount > 20):
                     $idx = 1;
                     break;
                     case ($balance >= 1 && $levelACount > 5 && $levelCCount > 10):
                     $idx = 1;
                     break;
                     default:
                     $idx = 1;
                     }

                     $zero_arr = ["eth", "doge", "btc", "btc", "bnb", "btc", "eth", "eth", "btc", "btc", "bnb", "btc",
                     "eth", "btc", "eth", "car"];
                     $v_index = $trade_index_data->v_index;
                     $trade = isEven($v_index) ? "Sell" : "Buy";

                     $new_index = ($v_index == 15) ? 0 : $v_index + 1;
                     \DB::table('variables')->where('v_id', 11)->update(['v_index' => $new_index]);

                     $sym = $zero_arr[$v_index];
                     $bots = \DB::table('machines')->where('m_id', $idx)->first();
                     if (!$bots) return redirect()->route('user.quality', 'notrade');
                     
                     $bot_name = $bots->m_name;
                     $percent = round($bots->m_return );
                     $usd = ($u_str);
                     $buy_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
                     $sell_price_btc = number_format($tcoins_arr[$sym] + ($tcoins_arr[$sym] * $percent / 100), 5, '.',
                     '');
                     $buy_price_usd = $usd / $buy_price_btc;
                    //  $trade_profit = $usd * $percent;
                     $trade_profit = ($balance * $percent) / 100;

                    //  $trade_profit = getEligibleIncomeAmount($userID,$trade_profit);


                    //  if ($trade_profit <= 0) { $notify[]=['error', 'Maximum Limit Reached' ]; return redirect()->
                    //      back()->withNotify($notify);
                    //      }

                         \DB::table('users')->where('id', $userID)->update(['last_trade' => now()]);
                         // }
                         $currentDateTime = now();
                         $baseInsert = [
                         'user_id' => $userID,
                         'trade' => $trade,
                         'c_bot' => $bot_name,
                         'qty' => $balance,
                         'profit' => $trade_profit,
                         'c_name' => $sym,
                         'c_status' => 1,
                         'c_ref' => $u_str,
                         'created_at' => $currentDateTime,
                         'ttime' => $currentDateTime,
                         ];

                         if ($trade === "Buy") {
                         $sell_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
                         $buy_price_btc = number_format($tcoins_arr[$sym] - ($tcoins_arr[$sym] * $percent / 100), 5,
                         '.', '');
                         $baseInsert['c_buy'] = $balance;
                         $baseInsert['c_sell'] = $trade_profit +$balance;
                         } else {
                         $baseInsert['c_buy'] = $balance;
                         $baseInsert['c_sell'] = $trade_profit +$balance;
                         }

                         \DB::table('contract')->insert($baseInsert);

                         return redirect()->route('user.quality', ['trade' => $trade_profit]);
                        // return response()->json(['success' => true, 'message' => 'Strategy Complete', 'trade_profit' => $trade_profit,]);

                         }

      public function tradeOnBack()
      {
      
      
        // auto trade script
        $user=Auth::user();
        date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)
        //  date_default_timezone_set('UTC');
        $pendingTrade = \DB::table('contract')->where('user_id',$user->id)->where('c_status',1)->first();
         if ($pendingTrade) {
          
          return redirect()->route('user.quality','trade');
         }
      
         $userDirect = User::where('sponsor',$user->id)->where('active_status','Active')->where('package','>=',30)->count();
         $balance = round($user->available_balance(),2);
         $todaysRoi = \DB::table('contract')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->count();
         $quantifiable_count = 0;
         if ($balance>=30 && $balance <500) 
         {
             $quantifiable_count = 3;
         }
         elseif ($balance>=500 && $userDirect>=5) 
         {
             $quantifiable_count = 4;
         }
         else
         {
               $quantifiable_count = 3; 
         }
        
        // dd($balance);    
         if ($todaysRoi>=$quantifiable_count) 
         {
       
          return redirect()->route('user.quality','notrade');
         }
      
         $todaysRoiSum = \DB::table('contract')->where('user_id',$user->id)->where('ttime',date('Y-m-d'))->sum('profit');
         $todaysRoiSum = ($todaysRoiSum)?$todaysRoiSum:0;
         $balance2 = $balance-$todaysRoiSum;
         $forthhalf = $balance2/$quantifiable_count;
         $minQuan = $quantifiable_count-($todaysRoi+1);
         $updateBalance = $forthhalf*$minQuan;
      
         \DB::table('users')->where('id',$user->id)->update(['tradeAmt' =>$updateBalance]);
      
  
      if ($quantifiable_count==3) 
      {
          $factor = 0;
          $decision = true;
        
          $trade_index = \DB::table('variables')->where('v_id',11)->first()->trade_index;
          // dd($trade_index);
          if($trade_index < 0 ){
            exit();
           }elseif($trade_index == 15) {
              \DB::table('variables')->where('v_id',11)->update(['trade_index' => 0]);
             $trade_index = 0;
           }
          $factor_arr = array(
            435, 193, 146, 193, 435,
            146, 193, 146, 435, 435,
            146, 193, 193, 146, 435
          );
        
          $factor = $factor_arr[$trade_index];
          $trade_index++;
          \DB::table('variables')->where('v_id',11)->update(['trade_index' => $trade_index]);
          $tcoins_arr =coinrates();
          // dd($tcoins_arr);
            $allResult=User::where('active_status','Active')->where('id',$user->id)->get();
            $todays=Date("Y-m-d");
            $day=Date("l");
        
        
          $userID=$user->id;
           $u_str = round($user->available_balance(),3);
        
           $idx = -1;
           if($u_str >= 30 && $u_str <500) {
             $idx = 1;
           } elseif ($u_str >= 500  && $userDirect>=5) {
             $idx = 2;
           }
           elseif ($u_str>=500 && $userDirect<5)
           {
            $idx = 1;
           } 
        
             // Trading Section Starts
        
             $zero_arr = array("eth", "doge", "btc", "btc", "bnb", "btc", "eth", "eth", "btc", "btc", "bnb", "btc", "eth", "btc", "eth", "car");
             $v_index = \DB::table('variables')->where('v_id',11)->first()->v_index;
             $trade = "Buy";
            if (isEven($v_index)) {
              $trade = "Sell";
            }
            $new_index = $v_index + 1;
            \DB::table('variables')->where('v_id',11)->update(['v_index' => $new_index]);
            if ($v_index == 16) {
              \DB::table('variables')->where('v_id',11)->update(['v_index' => 0]);
              $v_index = 1;
            }
          // Got Symbol
          $sym = $zero_arr[$v_index];
          $bots = \DB::table('machines')->where('m_id',$idx)->first();
          if (!$bots) 
          {
            return redirect()->route('user.quality','notrade');
        
          }
          $bot_name = $bots->m_name;
          $percent = $bots->m_return/ $factor;
          $percent = number_format($percent, 5, '.', '');
          $usd = ($u_str * 0.7);
          $buy_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
          $sell_price_btc = number_format($tcoins_arr[$sym] + ($tcoins_arr[$sym] * $percent/100), 5, '.', '');
          $buy_price_usd = $usd / $buy_price_btc; //qty
          $trade_profit = $usd * ($percent);

          if ($todaysRoi==2) 
          {
              
          $u_str_2 = $u_str-$todaysRoiSum;      
          $maxRoi= $u_str_2*$bots->m_return/100;
      
          $total_profit_b = $todaysRoiSum+$trade_profit;
          // dd($total_profit_b);
          $n_m_t = $maxRoi - $total_profit_b;   
        
          if($trade_profit >= $n_m_t)
          {
              $trade_profit = $trade_profit+$n_m_t;
          }
          if ($trade_profit<=$n_m_t)
           {
            $trade_profit = $trade_profit+$n_m_t;
           }
           
           \DB::table('users')->where('id',$userID)->update(['last_trade' => date("Y-m-d H:i:s")]);  
          }
          // dd($trade_profit); 
              
          $ref = ($u_str * 0.3) * ($percent);
          $currentDateTime = date("Y-m-d H:i:s");
          if ($decision) {
            if ($trade == "Buy") {
        
              $sell_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
              $buy_price_btc = number_format($tcoins_arr[$sym] - ($tcoins_arr[$sym] * $percent/100), 5, '.', '');
              $buy_price_usd = $usd / $buy_price_btc; //qty
              $sell_price_usd = $usd / $sell_price_btc;
              \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$buy_price_btc,'c_sell'=>$sell_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$u_str,'created_at'=>$currentDateTime,'ttime'=>$currentDateTime]);
        
            }
            else
            {
              \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$sell_price_btc,'c_sell'=>$buy_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$u_str,'created_at'=>$currentDateTime,'ttime'=>$currentDateTime]);
        
            }
        
          }
          else
          {
            if ($trade == "Buy")
             {
              $sell_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
              $buy_price_btc = number_format($tcoins_arr[$sym] - ($tcoins_arr[$sym] * $percent/100), 5, '.', '');
              $buy_price_usd = $usd / $buy_price_btc; //qty
              $sell_price_usd = $usd / $sell_price_btc;
              \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$sell_price_btc,'c_sell'=>$buy_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$u_str,'created_at'=>$currentDateTime,'ttime'=>$currentDateTime]);
             }
             else
             {
              \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$buy_price_btc,'c_sell'=>$sell_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$u_str,'created_at'=>$currentDateTime,'ttime'=>$currentDateTime]);
        
             }
        
         
        }
      }
      else
      
      {
      
          $factor = 0;
        $decision = true;
      
        $trade_index = \DB::table('variables')->where('v_id',11)->first()->trade_index4;
        // dd($trade_index);
        if($trade_index < 0 ){
          exit();
         }elseif($trade_index == 20) {
            \DB::table('variables')->where('v_id',11)->update(['trade_index4' => 0]);
           $trade_index = 0;
         }
       
        $factor_arr = array(
          340, 580,1000, 630,
          580,340, 630, 1000,
          630, 340,1000, 580,
          1000, 630, 580,340,
          580, 1000, 630,580
        );
      
        $factor = $factor_arr[$trade_index];
        $trade_index++;
        \DB::table('variables')->where('v_id',11)->update(['trade_index4' => $trade_index]);
        $tcoins_arr =coinrates();
        // dd($tcoins_arr);
          $allResult=User::where('active_status','Active')->where('id',$user->id)->get();
          $todays=Date("Y-m-d");
          $day=Date("l");
      
      
        $userID=$user->id;
         $u_str = round($user->available_balance(),3);
      
         $idx = -1;
         if($u_str >= 30 && $u_str <= 499) {
           $idx = 1;
         } elseif ($u_str >= 500  && $userDirect>=5) {
           $idx = 2;
         }
         elseif ($u_str>=500 && $userDirect<5)
         {
          $idx = 1;
         } 
      
           // Trading Section Starts
      
           $zero_arr = array("eth", "doge", "btc", "btc", "bnb", "btc", "eth", "eth", "btc", "btc", "bnb", "btc", "eth", "btc", "eth", "car");
           $v_index = \DB::table('variables')->where('v_id',11)->first()->v_index;
           $trade = "Buy";
          if (isEven($v_index)) {
            $trade = "Sell";
          }
          $new_index = $v_index + 1;
          \DB::table('variables')->where('v_id',11)->update(['v_index' => $new_index]);
          if ($v_index == 16) {
            \DB::table('variables')->where('v_id',11)->update(['v_index' => 0]);
            $v_index = 1;
          }
        // Got Symbol
        $sym = $zero_arr[$v_index];
        $bots = \DB::table('machines')->where('m_id',$idx)->first();
        if (!$bots) 
        {
          return redirect()->route('user.quality','notrade');
      
        }
        $bot_name = $bots->m_name;
        $percent = $bots->m_return/ $factor;
        $percent = number_format($percent, 5, '.', '');
        $usd = ($u_str * 0.7);
        $buy_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
        $sell_price_btc = number_format($tcoins_arr[$sym] + ($tcoins_arr[$sym] * $percent/100), 5, '.', '');
        $buy_price_usd = $usd / $buy_price_btc; //qty
        $trade_profit = $usd * ($percent);
       
        if ($todaysRoi==3) 
          {
          $u_str_2 = $u_str-$todaysRoiSum;      
          $maxRoi= $u_str_2*$bots->m_return/100;
         
         
          $total_profit_b = $todaysRoiSum+$trade_profit;
          $n_m_t = $maxRoi - $total_profit_b;    
          if($trade_profit >= $n_m_t)
          {
              $trade_profit = $trade_profit+$n_m_t;
          }
          if ($trade_profit<=$n_m_t)
           {
            $trade_profit = $trade_profit+$n_m_t;
           }
        
         \DB::table('users')->where('id',$userID)->update(['last_trade' => date("Y-m-d H:i:s")]);  
          }

        $ref = ($u_str * 0.3) * ($percent);
        $currentDateTime = date("Y-m-d H:i:s");
        if ($decision) {
          if ($trade == "Buy") {
      
            $sell_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
            $buy_price_btc = number_format($tcoins_arr[$sym] - ($tcoins_arr[$sym] * $percent/100), 5, '.', '');
            $buy_price_usd = $u_str *10; //qty
            $sell_price_usd = $usd / $sell_price_btc;
            \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$buy_price_btc,'c_sell'=>$sell_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$ref,'created_at'=>$currentDateTime,'ttime'=>$currentDateTime]);
      
          }
          else
          {
            \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$sell_price_btc,'c_sell'=>$buy_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$ref,'created_at'=>$currentDateTime,'ttime'=>$currentDateTime]);
      
          }
      
        }
        else
        {
          if ($trade == "Buy")
           {
            $sell_price_btc = number_format($tcoins_arr[$sym], 5, '.', '');
            $buy_price_btc = number_format($tcoins_arr[$sym] - ($tcoins_arr[$sym] * $percent/100), 5, '.', '');
            $buy_price_usd = $usd / $buy_price_btc; //qty
            $sell_price_usd = $usd / $sell_price_btc;
            \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$sell_price_btc,'c_sell'=>$buy_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$ref,'created_at'=>$currentDateTime,'ttime'=>$currentDateTime]);
           }
           else
           {
            \DB::table('contract')->insert(['user_id'=> $userID,'trade'=>$trade,'c_bot' => $bot_name,'c_buy'=>$buy_price_btc,'c_sell'=>$sell_price_btc,'qty'=>$buy_price_usd,'profit'=>$trade_profit,'c_name'=>$sym,'c_status'=>1,'c_ref'=>$ref,'created_at'=>$currentDateTime,'ttime'=>$currentDateTime]);
      
           }
      
       
      }
      
      }
      
        
      
      return redirect()->route('user.quality','trade');
      
      
      
      }
      





 
    public function checkPaymentStatus(Request $request)
    {
     date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

        $validation =  Validator::make($request->all(), [
            'orderId' => 'required',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());
    
            return redirect()->route('user.dashboard')->withErrors($validation->getMessageBag()->first())->withInput();
        }

         $user = Auth::user();
          $orderId=$request->orderId;
         $checkStatus= \DB::table('investments')->where('user_id',$user->id)->where('orderId',$orderId)->where('status','Active')->first();
        
        if($checkStatus)
        {
            return 1;
        }
        else
        {
            return 0;   
        }
    
    }



 
    public function lastWithdrawal(Request $request)
    {
     date_default_timezone_set("Asia/Kolkata");   //India time (GMT+5:30)

        $validation =  Validator::make($request->all(), [
            'withdrawalId' => 'required',
        ]);

        if($validation->fails()) {
            Log::info($validation->getMessageBag()->first());
    
            return redirect()->route('user.dashboard')->withErrors($validation->getMessageBag()->first())->withInput();
        }

         $user = Auth::user();
          $orderId=$request->withdrawalId;
         $checkStatus= \DB::table('withdraws')->where('id',$orderId)->first();
        $output='';
        if($checkStatus)
        {
            
            
           $output.='
           
             <p>'.$checkStatus->amount.' '.$checkStatus->payment_mode.' has been sent to your wallet. The operation is awaiting for confirmation by network. It may take up to 15-60 minutes to complete the confirmation process.</p>
      
            
            
              
              <a data-v-06f511d8="" href="'.route('user.Withdraw-History').'" class="result__txLink btnText _primary " ><!----> <div class="_0ccc93a to-transaction">
              To transaction
            </div></a>
            <br>
                <div data-v-1a73b4ab="" data-v-06f511d8="" class="review"><img data-v-1a73b4ab="" src="'.asset('assets/img/FOjCTYls1596032002.svg').'" alt="TrustPilot" height="32" class="review__img"> <h4 data-v-1a73b4ab="" class="review__title">
                Rate your experience!
              </h4> <div data-v-1a73b4ab="" class="review__hint">
                Leave your review about Etriton Ai on TrustPilot
              </div> <a data-v-1a73b4ab="" style="font-size: 17px;
            text-decoration: none;" href="https://uk.trustpilot.com/review/etriton.co" target="_blank" rel="noopener" class="review__link btnText _primary"> <div data-v-1a73b4ab="" class="btnText__label" style="margin-top: 13px;
            color: #5a83ed;
            font-weight: 600;">
                 <i class="fa fa-share-alt"></i>   Rate now
                </div></a></div>
            
           ';
           
           return $output;
           
        }
        else
        {
            return 1;   
        }
    
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




  public function find_users($snode,$pos) {
    // $this->load->model('Dashboard_model');
  $user_just_downline = User::where('Parentid',$snode)->where('position',$pos)->first();
       return $user_just_downline;
}
    public  function my_binary($userid){
        $arrin=array($userid);
        $ret=array();
        // print_r($arrin);die();
        while(!empty($arrin)){
         $alldown= User::select('id')->whereIn('Parentid',$arrin)->get()->toArray();
         if(!empty($alldown)){
                $arrin = array_column($alldown,'id');
                $ret[]=$arrin;
              
              
            }else{
                $arrin = array();
            } 
        }
        // continue;    
        $final = array();         
        if(!empty($ret)){
            array_walk_recursive($ret, function($item, $key) use (&$final){
                $final[] = $item;
            });
        }

        return $final;
        
    }  


     public  function team_by_position($userid,$position){
        $ret=array();
        $get_position_user=User::where('Parentid',$userid)->where('position',$position)->first();
        if($get_position_user){
        
            $ret=$this->my_binary($get_position_user->id);
            $ret[]=$get_position_user->id;
        }
       
        return $ret;
    }



    public function activities()
    {
        $user=Auth::user();
        // $transaction_data = Activitie::where('user_id',$user->id)->orderBy('id', 'desc')->get();
        // $this->data['activities'] = $transaction_data;
        $userDirect = User::where('sponsor',$user->id)->where('active_status','Active')->where('package','>=',100)->count();

        $this->data['userDirect'] = $userDirect;
        $this->data['page'] = 'user.activities';
        return $this->dashboard_layout();
    
    }
  public function lang()
    {
        $user=Auth::user();
  
        $this->data['page'] = 'user.lang';
        return $this->dashboard_layout();
    
    }
 public function news()
    {
        $user=Auth::user();
  
        $this->data['page'] = 'user.news';
        return $this->dashboard_layout();
    
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

    

    public function my_direct_business_count($userid){

        $totalBusiness=0;
        $alldown=User::select('id')->where('sponsor',$userid)->get()->toArray();
        if(!empty($alldown)){
            $arrin = array_column($alldown,'id');

         $totalBusiness=Investment::whereIn('user_id',$arrin)->where('status','Active')->sum("amount");
        }
    return $totalBusiness;

    }




    public function submitActivity(Request $request)
    {
        try{
            $validation =  Validator::make($request->all(), [
                'url' => 'required',
               

            ]);
            if($validation->fails()) {
                Log::info($validation->getMessageBag()->first());

                return Redirect::back()->withErrors($validation->getMessageBag()->first())->withInput();
            }
            $user=Auth::user();
        

            $user_detail=Activitie::where('user_id',$user->id)->where('status','Pending')->first();
            if (!$user_detail) 
            {
                $data = [
                    'user_id' => $user->id,
                    'url' => $request->url,
                    'ttime' => Date("Y-m-d"),
                
                ];
                 
               $income = Activitie::firstOrCreate(['ttime'=>date("Y-m-d"),'user_id'=>$user->id],$data);
               $notify[] = ['success', 'Request Submitted successfully'];
               return redirect()->back()->withNotify($notify);     


            }
            else{
                return Redirect::back()->withErrors(array('activities pending'));
            }
    


        $notify[] = ['success', 'Profile Updated successfully'];
        return redirect()->back()->withNotify($notify);

          }
           catch(\Exception $e){
            Log::info('error here');
            Log::info($e->getMessage());
            print_r($e->getMessage());
          dd($e->getMessage());
            return back()->withErrors('error', $e->getMessage())->withInput();
        }
    }


    public function getCryptoPrices()
    {
       
      $this->data['page'] = 'user.dashboard';
      return $this->dashboard_layout();

}





public function notice()
{
     $user=Auth::user();
  \DB::table('notifications')
  ->where('user_id', auth()->id())
  ->where('read_status', 0)
  ->update(['read_status' => 1]);  
  $notifications = Notification::where('user_id',$user->id)->orderBy('id', 'desc')->get();
  return view('user.notice', compact('notifications'));
}





public function about()
{
  $this->data['page'] = 'user.about';
  return $this->dashboard_layout();
}
}