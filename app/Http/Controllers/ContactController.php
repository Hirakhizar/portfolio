<?php
namespace App\Http\Controllers;

use App\Mail\ContactFormMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function sendEmail(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'required|string|max:255',
            'message' => 'required|string',
        ]);

        Mail::to('hirakhizarkhizarhayat@gmail.com')->send(new ContactFormMail($validated));

        return view('layouts.contact')->with('success', 'Your message has been sent successfully!');
    }
}
