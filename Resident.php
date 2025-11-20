<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    use HasFactory;
    protected $fillable = ['first_name', 'last_name', 'birth_date', 'purok_id'];

    public function purok()
    {
        return $this->belongsTo(Purok::class);
    }
}