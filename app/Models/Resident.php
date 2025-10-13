<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;

    protected $fillable = [
        'first_name',
        'last_name',
        'middle_name',
        'birth_date',
        'gender',
        'address',
        'contact_number',
        'email',
        'civil_status',
        'occupation',
        'purok_id',
        'is_voter',
        'psgc_code',
    ];

    protected $casts = [
        'birth_date' => 'date',
        'is_voter' => 'boolean',
    ];

    public function purok()
    {
        return $this->belongsTo(Purok::class);
    }

    public function certificates()
    {
        return $this->hasMany(Certificate::class);
    }

    public function healthRecords()
    {
        return $this->hasMany(HealthRecord::class);
    }

    public function voter()
    {
        return $this->hasOne(Voter::class);
    }
}
