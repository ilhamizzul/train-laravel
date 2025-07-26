<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{
    //
    function index() {
        return view('contact.index');
    }

    function contactSubmit(ContactRequest $request) {
        // The validation is automatically handled by ContactRequest
        // Process the contact form submission
        // For example, you might send an email or save to the database
        dd($request->all()); // Debugging line, remove in production
        // Redirect back with a success message
        return redirect()->route('contact.index')->with('success', 'Thank you for contacting us!');

    }
}
