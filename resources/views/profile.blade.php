<!-- resources/views/profile.blade.php -->
@include('includes.header')

<section class="profile">
    <h2>Your Bookings</h2>
    <div class="booking-list">
        @if($bookings->count() > 0)
            @foreach ($bookings as $booking)
                <div class="booking-card">
                    <h3>{{ $booking->car->name }}</h3>
                    <p>From: {{ $booking->start_date }} To: {{ $booking->end_date }}</p>
                    <p>Price per day: ${{ $booking->car->price_per_day }}</p>
                </div>
            @endforeach
            <p>Total Amount Spent: ${{ $totalAmount }}</p>
        @else
            <p>You have no bookings</p>
        @endif
    </div>
</section>

@include('includes.footer')
