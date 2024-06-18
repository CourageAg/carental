<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'message' => 'required|string',
        ]);

        // Send the email or process the message
        // Example: sending an email (assuming you have mail setup correctly)
        // Mail::to('admin@example.com')->send(new ContactMessage($request->all()));

        return redirect()->back()->with('success', 'Your message has been sent successfully!');
    }
}
