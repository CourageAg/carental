<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Booking;
use Illuminate\Support\Facades\Auth;


class ProfileController extends Controller
{
    public function index()
    {
        $bookings = Booking::where('user_id', Auth::id())->with('car')->get();
        $totalAmount = $bookings->sum(function ($booking) {
            return $booking->car->price_per_day;
        });

        return view('profile', compact('bookings', 'totalAmount'));
    }
}
