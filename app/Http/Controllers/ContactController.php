<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function submit(Request $request)
    {
        // Validate the form inputs
        $request->validate([
            'validationCustom01' => 'required|string|max:255',
            'validationCustom02' => 'required|email|max:255',
            'validationCustom03' => 'nullable|string|max:255',
            'validationCustom04' => 'required|string|max:20',
            'validationTextarea' => 'required|string',
        ]);

        // Prepare the data for the email
        $data = [
            'name' => $request->input('validationCustom01'),
            'email' => $request->input('validationCustom02'),
            'subject' => $request->input('validationCustom03'),
            'phone' => $request->input('validationCustom04'),
            'message' => $request->input('validationTextarea'),
        ];

        // Send email
        Mail::send('emails.contact', $data, function($message) use ($data) {
            $message->to('youremail@example.com') // The recipient email address
                    ->subject($data['subject'] ?? 'Contact Form Submission');
        });

        // Return a response or redirect
        return back()->with('success', 'Your message has been sent successfully!');
    }
}
