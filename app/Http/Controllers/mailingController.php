<?php

namespace App\Http\Controllers;

use App\Mail\MailingMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class mailingController extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {
        $correo = new MailingMail($request->all());
        Mail::to('desarrollowebwpress@gmail.com')->send($correo);
        //return redirect()->route('home')->witch('info', 'Registrado completado.');
        return redirect()->back();
    }
}
