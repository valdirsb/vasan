<?php

namespace App\Http\Controllers;

use Mail;
use Illuminate\Http\Request;

class FaleConoscoController extends Controller
{
    public function index()
    {
        return view('faleconosco');
    }

    public function enviar(Request $request)
    {
        $data = $request->only([
            'name',
            'email',
            'subject',
            'msg'
        ]);


        Mail::send('mail.vasan', [
            'name' => $data['name'],
            'email' => $data['email'],
            'subject' => $data['subject'],
            'msg' => $data['msg'],

        ], function($m){
            $m->from('vasan.tecnologia@gmail.com', 'Vasan tecnologia');
            $m->to('vasan.tecnologia@gmail.com');
            $m->subject('Formulario do Fale Conosco');

        });

        

        return redirect()->back()->with('alert', 'Mensagem enviada com Sucesso!');
    }
}
