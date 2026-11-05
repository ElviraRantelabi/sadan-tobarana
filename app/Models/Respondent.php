<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    protected $fillable = [
        'respondent_code',
        'treatment',
        'session_token',
        'started_at',
        'completed_at',
    ];

    protected $casts = [
        'started_at' => 'datetime',
        'completed_at' => 'datetime',
    ];
}
