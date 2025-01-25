<?php

namespace App\Modules\DoctorAvailability\Internal\Models;

use Illuminate\Database\Eloquent\Model;

class Slot extends Model
{
    protected $fillable = [
        'id',
        'time',
        'doctor_id',
        'doctor_name',
        'is_reserved',
        'cost'
    ];

    protected $casts = [
        'id' => 'string',
        'time' => 'datetime',
        'is_reserved' => 'boolean',
        'cost' => 'decimal:2'
    ];

    public function doctor()
    {
        return $this->belongsTo(User::class, 'doctor_id');
    }
}
