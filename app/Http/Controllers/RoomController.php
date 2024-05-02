<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    // Display a listing of rooms
    public function index()
    {
        $rooms = Room::all();
        return view('rooms.index', compact('rooms'));
    }

    // Show the form for creating a new room (Admin Functionality)
    public function create()
    {
        return view('rooms.create');
    }

    // Store a newly created room in storage (Admin Functionality)
    public function store(Request $request)
    {
        $request->validate([
            'room_number' => 'required|string|max:10',
            'capacity' => 'required|integer',
            'rate' => 'required|numeric'
        ]);

        Room::create($request->all());
        return redirect()->route('rooms.index')->with('success', 'Room added successfully.');
    }
}


