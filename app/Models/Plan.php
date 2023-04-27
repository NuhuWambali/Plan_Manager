<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Plan extends Model
{
    use HasFactory;

    protected $fillable=[
        'plan',
        'description',
        'category',
    ];

    public function user(): BelongsTo{
        return $this->belongsTo(User::class);
    }
}
