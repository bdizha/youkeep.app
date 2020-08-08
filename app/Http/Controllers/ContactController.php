<?php

namespace App\Http\Controllers;

use App\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ContactController extends Controller
{


    /**
     * Show the contact us page
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('page.contact_us');
    }

    /**
     * Save contact message
     *
     * @return \Illuminate\Http\Response
     */
    public function send()
    {
        $values = request()->all();

        // save contact message
        $contact = Contact::create($values);

        return response()->json([
            'contact' => $contact,
        ], 200);
    }
}
