<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contract extends Model
{
    use HasFactory;
    protected $table="contract";


    protected $fillable = [
        'user_id',
        'trade',
        'c_bot',
        'c_buy',
        'c_sell',
        'qty',
        'profit',
        'c_new',
        'c_name',
        'c_status',
        'c_ref',
        'ttime','created_at','updated_at'
    ];
    
    
     public function user()
 {
     return $this->belongsTo('App\Models\User', 'user_id');
 } 



}
