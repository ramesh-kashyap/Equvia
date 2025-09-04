<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Variable extends Model
{
    use HasFactory;

    protected $table = 'variables';
    protected $primaryKey = 'v_id';

    protected $fillable = [
        'v_id',
        'trade_index',
        'v_index',
    ];
}