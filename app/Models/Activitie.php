<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Activitie extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id','status','url','ttime'
    ];


 public function user()
 {
     return $this->belongsTo('App\Models\User', 'user_id');
 } 

 
}
