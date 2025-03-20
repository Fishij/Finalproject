<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookingController extends Controller
{
    public function store(Request $request)
{
    $request->validate([
        'check_in_date' => 'required|date|after:today',
        'check_out_date' => 'required|date|after:check_in_date',
        'room_id' => 'required|exists:rooms,id'
    ]);

    $room = Room::findOrFail($request->room_id);
    
    $booking = new Booking();
    $booking->user_id = auth()->id();
    $booking->room_id = $request->room_id;
    $booking->check_in_date = $request->check_in_date;
    $booking->check_out_date = $request->check_out_date;
    $booking->total_price = $room->price_per_night * 
        now()->parse($request->check_in_date)->diffInDays($request->check_out_date);
    $booking->save();

    return redirect()->route('bookings.index')->with('success', 'Booking created successfully!');
}
}
