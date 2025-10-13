<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WasteRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'waste_type',
        'quantity',
        'collection_area',
        'collection_date',
        'collected_by',
        'disposal_method',
        'status',
        'psgc_code',
    ];

    protected $casts = [
        'quantity' => 'decimal:2',
        'collection_date' => 'date',
    ];
}
