<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purok extends Model
{
    use HasFactory;

    protected $fillable = [
        'purok_name',
        'description',
        'population',
        'psgc_code',
    ];

    protected $casts = [
        'population' => 'integer',
    ];

    public function residents()
    {
        return $this->hasMany(Resident::class);
    }
}
