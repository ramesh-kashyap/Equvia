<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Claim extends Model
{
    protected $fillable = [
        'user_id',
        'task_id',
        'task_status',  // add any other fields you're mass assigning
    ];
    public function task()
    {
        return $this->belongsTo(Task::class, 'task_id');
    }
    public function income()
{
    return $this->hasOne(Income::class, 'task_id', 'task_id')
        ->where('remarks', 'Task Income');
}
    use HasFactory;
}
