<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $fillable = ['title', 'company_image', 'country_name', 'url'];
    public function claims()
    {
        return $this->hasMany(Claim::class, 'task_id');
    }
    use HasFactory;
}
