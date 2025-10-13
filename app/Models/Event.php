<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;

    protected $fillable = [
        'event_name',
        'description',
        'event_date',
        'location',
        'organizer',
        'expected_attendees',
        'status',
        'budget',
        'psgc_code',
    ];

    protected $casts = [
        'event_date' => 'date',
        'budget' => 'decimal:2',
        'expected_attendees' => 'integer',
    ];
}
