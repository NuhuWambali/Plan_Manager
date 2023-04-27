<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class timeTableTask extends Model
{
    use HasFactory;
    protected $fillable=[
     'task',
     'day',
     'start_time',
     'end_time',
     'duration'
    ];

    public function User(){
        return $this->belongsTo(User::class);
    }
}
