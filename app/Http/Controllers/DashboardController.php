<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Guest;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $totalGuests = Guest::count();

        $roomsBooked = Guest::sum('no_of_room');

        $todayCheckin = Guest::whereDate('arrival_date', Carbon::today())->count();

        return view('dashboard', compact(
            'totalGuests',
            'roomsBooked',
            'todayCheckin'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
