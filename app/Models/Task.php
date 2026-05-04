<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    // Izinkan kolom ini diisi secara massal
    protected $fillable = ['task_name', 'is_completed'];
}