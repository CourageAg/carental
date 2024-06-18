<!-- resources/views/car.blade.php -->
@include('includes.header')

<section class="car-details">
    <h2>{{ $car->name }}</h2>
    <img src="{{ asset('images/' . $car->image) }}" alt="{{ $car->name }}">
    <p>{{ $car->description }}</p>
    <p>Price per day: ${{ $car->price_per_day }}</p>
    <form method="POST" action="{{ url('/book') }}">
        @csrf
        <input type="hidden" name="car_id" value="{{ $car->id }}">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" required>
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" required>
        <button type="submit">Book Now</button>
    </form>
</section>

@include('includes.footer')
