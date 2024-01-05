<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\MensajePortafolio;



class ContactController extends Controller
{
    public function index()
    {
        return view('contact');
    }

    // funcionar para mandar correo 
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'message'=>'required'
        ]);

        Mail::to('cesarzavalamx15@gmail.com') -> send(new MensajePortafolio($request->name, $request->email, $request->message));

        return redirect()->route('contact')->with('info', 'Mensaje enviado');


    }
}
