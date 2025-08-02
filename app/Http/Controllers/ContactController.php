<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use App\Models\Contact;

class ContactController extends Controller
{
    //
    function index() {
        return view('contact.index');
    }

    function contactSubmit(ContactRequest $request) {

        // Handle the validated contact form data
        $contact = new Contact();
        $contact->name = $request->input('name');
        $contact->email = $request->input('email');
        $contact->subject = $request->input('subject');
        $contact->message = $request->input('message');
        $contact->save();
        // Redirect back with a success message
        return redirect()->route('contact.index')->with('success', 'Thank you for contacting us!');

    }
}
