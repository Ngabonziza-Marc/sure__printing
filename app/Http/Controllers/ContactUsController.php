<?php

namespace App\Http\Controllers;

use message;
use App\Models\User;
use Twilio\Http\Client;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use App\Models\ContactMessage;
use Illuminate\Support\Facades\Log;



class ContactUsController extends Controller
{
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'phone' => 'required|string|min:10|max:15',
            'message' => 'required|string|max:255',
        ]);

        try {
            $contactMessage = ContactMessage::create($validatedData);
            Log::info('Contact message saved successfully.', ['id' => $contactMessage->id]);

            $twilio_sid = 'AC1113461c9ecf7c31fc7a3be802c39d35';
            $twilio_token = '8d7ec1975d9285ab86dfb0c4e5afc851';
            $twilio_phone_number = '+12514514594';

            $twilio = new Client($twilio_sid, $twilio_token);

            $twilio->messages->create(
                $request->phone,
                [
                    'from' => $twilio_phone_number,
                    'body' => "New user Message: phone - {$validatedData['phone']}, message - {$validatedData['message']}",
                ]
            );

            return redirect()->route('index')->with('success', 'Thank you for your request');
        } catch (\Exception $e) {
            Log::error('Failed to save contact message.', ['error' => $e->getMessage()]);
            return redirect()->back()->withErrors('Failed to save your request.');
        }
    }
}
