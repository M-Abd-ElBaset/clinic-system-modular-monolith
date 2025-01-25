<?php

namespace App\Modules\DoctorAvailability\Internal\Repositories;

use App\Modules\DoctorAvailability\Internal\Models\Slot;

class SlotRepository 
{
    public function getAllSlots()
    {
        return Slot::where('doctor_id', config('doctor.id'))->get();
    }

    public function addSlot($data)
    {
        return Slot::create([
            'id' => Str::uuid(),
            'time' => $data['time'],
            'doctor_id' => $data['doctor_id'],
            'doctor_name' => $data['name'],
            'cost' => round($data['cost'], 2)
        ]);
    }
}