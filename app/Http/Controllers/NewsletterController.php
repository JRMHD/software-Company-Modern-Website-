<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subscriber;
use Illuminate\Support\Facades\Mail;
use App\Mail\ThankYouForSubscribing;

class NewsletterController extends Controller
{
    public function subscribe(Request $request)
    {
        // Validate the email input
        $request->validate([
            'EMAIL' => 'required|email|unique:subscribers,email',
        ]);

        // Save the email to the database
        Subscriber::create([
            'email' => $request->EMAIL,
        ]);

        // Send thank you email
        Mail::to($request->EMAIL)->send(new ThankYouForSubscribing());

        // Return success response
        return response()->json(['message' => 'Thank you for subscribing!']);
    }
}
