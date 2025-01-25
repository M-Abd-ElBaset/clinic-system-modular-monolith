<?php

namespace App\Modules\DoctorAvailability\Internal\Controllers;

use App\Modules\DoctorAvailability\Internal\Repositories\SlotRepository;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function __construct(private SlotRepository $slotRepo) {}
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return response()->json($this->slotRepo->getAllSlots());
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'time' => 'required|date',
            'cost' => 'required|numeric'
        ]);

        return response()->json($this->slotRepo->addSlot($validated));
    }
}
