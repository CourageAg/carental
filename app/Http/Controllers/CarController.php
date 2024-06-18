<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use App\Models\Booking;
use Auth;

class CarController extends Controller
{
    public function index()
    {
        $cars = Car::all();
        return view('index', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::findOrFail($id);
        return view('car.show', compact('car'));
    }

    public function book(Request $request)
    {
        $booking = new Booking();
        $booking->user_id = Auth::id();
        $booking->car_id = $request->car_id;
        $booking->start_date = $request->start_date;
        $booking->end_date = $request->end_date;
        $booking->save();

        return redirect()->route('profile')->with('success', 'Car booked successfully!');
    }
}