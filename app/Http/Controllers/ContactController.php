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
        $validation = [
            'name' => 'required',
            'email' => 'required|email',
            'body' => 'required'
        ];

        if (env('APP_ENV') !== 'testing') {
            $validation = array_merge($validation, [
                'website' =>  'honeypot',
                'timestamp' =>'required|honeytime:5'
            ]);
        }

        $this->validate($request, $validation);

        $data = $request->all();

        Mail::send(new CustomerContact($data));
        Mail::send(new CustomerContactConfirmation($data));

        session(['email_sent' => true]);

        return redirect('/contacto');
    }
}
