<!-- resources/views/index.blade.php -->
@extends('layouts.app')

@section('content')
<section class="cars">
    <h2>Available Cars</h2>
    <div class="car-list">
        @if($cars->count() > 0)
            @foreach ($cars as $car)
                <div class="car-card">
                    <img src="{{ asset('storage/' . $car->image) }}" alt="{{ $car->name }}">
                    <h3>{{ $car->name }}</h3>
                    <p>{{ $car->description }}</p>
                    <p>Price per day: ${{ $car->price_per_day }}</p>
                    <a href="{{ url('/car/' . $car->id) }}" class="book-button">View Details</a>
                </div>
            @endforeach
        @else
            <p>No cars available</p>
        @endif
    </div>
</section>
@endsection
