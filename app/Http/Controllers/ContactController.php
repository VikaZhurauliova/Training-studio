<?php

namespace App\Http\Controllers;

use App\Models\Contacts;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contacts()
    {
        $contacts = Contacts::all();
        return view('contacts', [
            'contacts' => $contacts,
        ]);
    }
}
