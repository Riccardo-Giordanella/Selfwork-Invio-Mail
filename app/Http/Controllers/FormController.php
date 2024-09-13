<?php

namespace App\Http\Controllers;

use App\Mail\UserMail;
use App\Mail\AdminMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FormController extends Controller
{
    public function contattaci(){
        return view('contattaci');
    }

    public function invio_mail(Request $request){
        $contactMail = [
            'username' => $request->input('username'),
            'email' => $request->input('email'),
            'message' => $request->input('message'),
        ];

        Mail::to('sito@noreply.com')->send(new AdminMail($contactMail));

        return redirect()->back()->with('success', 'Il messaggio è stato inviato correttamente');
    }
}
