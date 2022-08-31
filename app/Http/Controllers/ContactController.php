<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'name'      => 'required',
            'email'     => 'required|email',
            'subject'   => 'required',
            'phone'     => 'required|digits:11|numeric',
            'message'   => 'required'
        ]);

        Contact::create($request->all());

        return redirect()->back()->with(['success' => 'Thank you for contact us. we will contact you shortly.']);
    }
}
