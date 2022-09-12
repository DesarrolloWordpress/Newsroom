<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Newsletter;

class mailingController extends Controller
{
    public function index()
    {
    }

    public function store(Request $request)
    {
        $mailEmpresas = array("reyma.com.mx", "megapanel.com");
        var_dump(implode(",", $mailEmpresas));
        //$concatenadoEmpresas = '/(.*)@(' + implode("|", $mailEmpresas) + ')';
        //$concatenadoEmpresas = '/(.*)@(| ) + )';

        $request->validate([
            'mailmailing' => [
                'required',
                'max:255',
                'email',
                //      'regex:' + $concatenadoEmpresas
            ]
        ]);

        /*$correo = new MailingMail($request->all());
        Mail::to('desarrollowebwpress@gmail.com')->send($correo);
        //return redirect()->route('home')->witch('info', 'Registrado completado.');
        return redirect()->back();*/

        if (!Newsletter::isSubscribed($request->mailmailing)) {
            Newsletter::subscribe($request->mailmailing);
            return redirect()->back()->with('info', 'Registro realizado con éxito');
        }

        return redirect()->back()->with('info', 'Correo ya registrado');
    }
}
