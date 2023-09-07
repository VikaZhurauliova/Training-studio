<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Classes;
use App\Models\Slot;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ScheduleController extends Controller
{
//    public function schedule()
//    {
//        return view('schedule', [
//
//        ]);
//    }

    public function index()
    {
        $trainings = Classes::with('slots')->get();
        $bookings = Booking::with('classes', 'slot')->get();

        return view('schedule', compact('trainings', 'bookings'));
    }

    public function book(Request $request)
    {
        $slot = Slot::find($request->input('slot_id'));

        if ($slot->remaining_spots > 0) {
            $booking = new Booking();
            $booking->classes_id = $request->input('training_id');
            $booking->slot_id = $request->input('slot_id');
            $booking->save();

            $slot->decrement('remaining_spots');

            return redirect('/schedule')->with('success', 'Training booked successfully.');
        } else {
            return redirect('/schedule')->with('error', 'No spots available.');
        }
    }

    public function delete(Request $request)
    {
        $booking = Booking::find($request->input('booking_id'));
        $slot = $booking->slot;

        $booking->delete();
        $slot->increment('remaining_spots');

        return redirect('/schedule')->with('success', 'Training deleted successfully.');
    }
}
