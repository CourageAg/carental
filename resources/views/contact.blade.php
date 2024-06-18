<!-- resources/views/contact.blade.php -->
@include('includes.header')

<section class="contact">
    <h2>Contact Us</h2>
    <form method="POST" action="{{ url('/contact') }}">
        @csrf
        <input type="text" name="name" placeholder="Your Name" required>
        <input type="email" name="email" placeholder="Your Email" required>
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send</button>
    </form>
</section>

@include('includes.footer')


