<?php

namespace App\Http\Controllers;

use message;
use App\Models\User;
use Twilio\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class contact_us extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|string|min:10|max:15', 
            'message' => 'required|string|max:255',
        ]);

        // Sending the user message to the specified phone number using Twilio
        $twilio_sid = 'AC1113461c9ecf7c31fc7a3be802c39d35';
        $twilio_token = '8d7ec1975d9285ab86dfb0c4e5afc851';
        $twilio_phone_number = '+12514514594';

        $twilio = new Client($twilio_sid, $twilio_token);

        $message = $twilio->messages->create(
            $request->phone, // Destination phone number
            [
                'from' => $twilio_phone_number,
                'body' => "New user Message: phone - {$validatedData['phone']}, message - {$validatedData['message']}",
            ]
        );

        // Optionally, you can return a response or redirect the user to a different page 
        if ($validatedData)
        {
            return redirect('/user/index')->with('success','Thank you for your request');
        }
    }
}

