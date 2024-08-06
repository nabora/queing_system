<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AssistantSuperintendent extends Model
{
    use HasFactory;

    protected $fillable = ['queue_number', 'office', 'services'];

    protected $casts = [
        'services' => 'array',
    ];
}
