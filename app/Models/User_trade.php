<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_trade extends Model
{
    use HasFactory;

    protected $fillable = [
        'package', 'currency', 'lotSize','entryPrice','endPrice','entrytime','endtime','percentage','profitType','ttime','user_id','user_id_fk','amt','comm','profit','tradetype'
    ];
    
     public function user()
 {
     return $this->belongsTo('App\Models\User', 'user_id');
 } 

}
