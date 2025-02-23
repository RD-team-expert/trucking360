<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Notification;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request data
        $validatedData = $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|string|email|max:255',
            'subject'  => 'nullable|string|max:255',
            'message'  => 'required|string',
        ]);

        // Create the contact record
        $contact = Contact::create($validatedData);

       

        // Notification
        Notification::create([
            'user_id'         => 3,
            'type'            => 'New Contact Submission',
            'title'           => 'New Contact Form Submission',
            'message'         => 'A new contact form submission has been made by ' . $contact->name . '.',
            'url'             => route('dashboard.contact', $contact->id),
            'notifiable_type' => User::class,
            'notifiable_id'   => Auth::id() ?? 1,
        ]);
        

        // Redirect with success message
        return redirect()->route('message')->with([
            'success'    => true,
            'title'      => 'Thank You for Contacting Us',
            'header'     => 'We Appreciate Your Message',
            'message'    => 'Thank you, ' . $contact->name . ', for reaching out to us. We will get back to you as soon as possible.',
            'breadcrumb' => 'Contact Confirmation'
        ]);
    }

    public function show(Contact $contact)
    {
        return view('dashboard.contacts.show', compact('contact'));
    }
}
