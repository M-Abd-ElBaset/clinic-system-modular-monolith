<?php

namespace App\Modules\DoctorAvailability\Presentation\Controllers;

use App\Modules\DoctorAvailability\Data\Repositories\SlotRepository;
use App\Modules\DoctorAvailability\Domain\Services\SlotService;
use Illuminate\Http\Request;

class SlotController extends Controller
{
    public function __construct(private SlotRepository $slotRepo, private SlotService $slotService) {}
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
        return response()->json($this->slotService->createSlot($request));
    }
}
