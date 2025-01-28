<?php

namespace App\Modules\DoctorAvailability\Data\Repositories;

use App\Modules\DoctorAvailability\Domain\Models\Slot;

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
            'doctor_id' => auth()->user()->id,
            'doctor_name' => auth()->user()->name,
            'cost' => round($data['cost'], 2)
        ]);
    }
}
