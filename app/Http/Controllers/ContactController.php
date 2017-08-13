<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \Mail;
use App\Mail\CustomerContact;
use App\Mail\CustomerContactConfirmation;

class ContactController extends Controller
{
    public function send(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required',
        ]);

        $data = $request->all();

        Mail::send(new CustomerContact($data));
        Mail::send(new CustomerContactConfirmation($data));

        return redirect('/contacto');
    }
}
