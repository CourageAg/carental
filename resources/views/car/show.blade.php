@extends('layouts.app')

@section('content')
<div class="car-details">
    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}">
    <h2>{{ $car->name }}</h2>
    <p>{{ $car->description }}</p>
    <p>Price per day: ${{ $car->price_per_day }}</p>
    <form action="{{ url('/book') }}" method="POST">
        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>
        <button type="submit">Book Now</button>
    </form>
</div>
@endsection
