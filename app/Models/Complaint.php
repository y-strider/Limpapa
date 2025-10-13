<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
    use HasFactory;

    protected $fillable = [
        'complainant_name',
        'complainant_contact',
        'complaint_description',
        'complaint_type',
        'location',
        'status',
        'priority',
        'assigned_to',
        'resolution_notes',
        'resolved_at',
        'psgc_code',
    ];

    protected $casts = [
        'resolved_at' => 'datetime',
    ];
}
