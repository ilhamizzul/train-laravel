<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    function index() {
        return view('contact.index');
    }

    function contactSubmit(Request $request) {
        // Validate the request data
        $request->validate([
            'name' => 'required|string|min:2|max:50',
            'email' => 'required|email|max:100',
            'subject' => 'required|string|min:5|max:500',
            'message' => 'required|string|min:10|max:3000',
        ], [
            'name.required' => 'Nama wajib diisi.',
            'name.string' => 'Nama harus berupa teks.',
            'name.min' => 'Nama minimal 2 karakter.',
            'name.max' => 'Nama maksimal 50 karakter.',
            'email.required' => 'Email wajib diisi.',
            'email.email' => 'Format email tidak valid.',
            'email.max' => 'Email maksimal 100 karakter.',
            'subject.required' => 'Subjek wajib diisi.',
            'subject.string' => 'Subjek harus berupa teks.',
            'subject.min' => 'Subjek minimal 5 karakter.',
            'subject.max' => 'Subjek maksimal 500 karakter.',
            'message.required' => 'Pesan wajib diisi.',
            'message.string' => 'Pesan harus berupa teks.',
            'message.min' => 'Pesan minimal 10 karakter.',
            'message.max' => 'Pesan maksimal 3000 karakter.',
        ]);

        // Process the contact form submission
        // For example, you might send an email or save to the database
        dd($request->all()); // Debugging line, remove in production
        // Redirect back with a success message
        return redirect()->route('contact.index')->with('success', 'Thank you for contacting us!');

    }
}
