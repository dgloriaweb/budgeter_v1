<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mileage extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'date',
        'mileage',
        'partner_id',
        'location_id_start',
        'location_id_end',
        'is_personal',
        'comments',
    ];

    /** Relationships */
    public function User()
    {
        return $this->belongsTo(User::class);
    }
}
