<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\Auth;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name', 'email', 'password','phone','username','sponsor','ParentId','position','active_status','jdate','level','tpassword','adate','PSR','TPSR','country','country_iso','dialCode'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function user()
    {
        return $this->belongsTo('App\Models\User', 'sponsor');
    } 


    public function sponsor_detail()
    {
        return $this->belongsTo('App\Models\User', 'sponsor');
    } 


    public function FundBalance()
    {
    $balance = Auth::user()->buy_fundAmt->sum('amount')-(Auth::user()->buy_packageAmt());
    return $balance;
    } 

    public function buy_fundAmt(){
        return $this->hasMany('App\Models\BuyFund','user_id','id')->where('status','Approved');
    }



    public function buy_packageAmt(){
        $amt = Investment::where('active_from', Auth::user()->username)
        ->orderBy('id', 'DESC')->limit(1)->value('amount');
        return $amt;
    }

    public function dailyIncentive()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Trading Income');
    } 

    public function user_direct()
    {
        return $this->hasMany('App\Models\User','sponsor','id')->where('active_status','Active');
    } 


    
    public function leadership_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Leadership Income');
    } 
        
    public function level_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Direct Income');
    } 
      
    public function trading_profit()
    {
        return $this->hasMany('App\Models\User_trade','user_id','id')->where('profitType',1);
    } 
       
    public function debit()
    {
        return $this->hasMany('App\Models\Debit','user_id','id');
    } 
   
    public function trading_lose()
    {
        return $this->hasMany('App\Models\User_trade','user_id','id')->where('profitType',2);
    } 

    public function sponsorship_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Direct Bonus');
    } 

     public function tradingProfit()
    {
    return $this->hasMany('App\Models\Contract','user_id','id');
    }      
          
    public function reward_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Royalty Bonus');
    } 

    public function booster_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Booster Income');
    } 
    
    public function club_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Club Income');
    } 
    
     
    public function totalIncome()
    {
        return $this->hasMany('App\Models\Income','user_id','id');
    } 
    
    
    
    public function available_balance()
    {
    $balance = (Auth::user()->investment->sum('amount')+Auth::user()->users_incomes()+Auth::user()->tradingProfit->sum('profit')) - (Auth::user()->withdraw());
    return $balance;
    } 
    public function deposite_balance()
    {
    $balance = (Auth::user()->investment->sum('amount'));
    return $balance;
    }

    public function principleBalance()
    {
    $balance = (Auth::user()->investment->sum('amount'))-(Auth::user()->tradeAmt+Auth::user()->withdrawPrinciple());
    return $balance;
    } 
    
 public function investMentWithWithdraw()
    {
    $balance = (Auth::user()->investment->sum('amount'))-(Auth::user()->withdrawPrinciple());
    return $balance;
    } 

    public function users_incomes()
    {
        return  Income::where('user_id',Auth::user()->id)->where('remarks','!=','Order revenue')->sum('comm');
    } 
    
    public function task_bonus()
    {
        return $this->hasMany('App\Models\Income','user_id','id')->where('remarks','Task Income');
    } 

    public function withdraw()
    {
        return  Withdraw::where('user_id',Auth::user()->id)->where('status','!=','Failed')->sum('amount');
    } 
    public function withdrawPrinciple()
    {
        return  Withdraw::where('user_id',Auth::user()->id)->where('status','!=','Failed')->where('walletType',2)->sum('amount');
    } 


    public function investment(){
        return $this->hasMany('App\Models\Investment','user_id','id')->where('status','Active');
    }


    public function withdrawal(){
        return $this->hasMany('App\Models\Withdraw','user_id','id')->where('walletType',1);
    }

  public function Priciplewithdrawal(){
        return $this->hasMany('App\Models\Withdraw','user_id','id')->where('walletType',2);
    }
    public function investments()
{
    return $this->hasMany(Investment::class, 'user_id');
}

public function withdrawals()
{
    return $this->hasMany(Withdraw::class, 'user_id');
}

  

    
}
