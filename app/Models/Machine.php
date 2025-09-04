<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Machine extends Model
{
    use HasFactory;

    protected $table = 'machines';

    protected $primaryKey = 'm_id'; // since you’re using `m_id`

    protected $fillable = [
        'm_id',
        'm_name',
        'm_return', // percentage return for that tier
    ];
}