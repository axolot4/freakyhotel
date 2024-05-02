<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Room;
use Illuminate\Http\Request;

class ReservationController extends Controller
{
    // Show the form for creating a new reservation
    public function create()
    {
        $rooms = Room::select('id', 'room_number')->get(); // List rooms by number
        return view('reservations.create', compact('rooms'));
    }

    // Store a newly created reservation in storage
    public function store(Request $request)
    {
        // Define validation rules
        $rules = [
            'customer_name' => 'required|string|max:255',
            'email' => 'required|email',
            'phone' => 'required|regex:/^\d{3}-\d{3}-\d{4}$/',
            'checkin' => 'required|date|after_or_equal:today',
            'checkout' => 'required|date|after:checkin',
            'room_id' => 'required|integer|exists:rooms,id'
        ];

        // Validate and sanitize input
        $validated = $request->validate($rules);

        // Create the reservation
        $reservation = Reservation::create($validated);
        if ($reservation) {
            return redirect()->route('home')->with('success', 'Reservation successful!');
        } else {
            return back()->withErrors('Failed to create reservation.')->withInput();
        }
    }




    // Display a specific reservation's details
    public function show($id)
    {
        $reservation = Reservation::findOrFail($id);
        return view('reservations.show', compact('reservation'));
    }
}
