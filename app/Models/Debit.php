<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Debit extends Model
{
    use HasFactory;

    protected $fillable = [
        'amount','user_id','remarks'
    ];
    
     public function user()
 {
     return $this->belongsTo('App\Models\User', 'user_id');
 } 

}
