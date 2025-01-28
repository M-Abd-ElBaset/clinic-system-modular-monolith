<?php

namespace App\Modules\DoctorAvailability\Domain\Services;

use App\Modules\DoctorAvailability\Data\Repositories\SlotRepository;
use Illuminate\Http\Request;

class SlotService
{
    public function __construct(private SlotRepository $slotRepo) {}
    public function createSlot(Request $request)
    {
        $validated = $request->validate([
            'time' => 'required|date',
            'cost' => 'required|numeric'
        ]);

        return $this->slotRepo->addSlot($validated);
    }
}
