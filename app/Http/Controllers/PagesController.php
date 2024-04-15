<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateMessagesRequest;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function __construct()
    {
        $this->middleware('example');
    }


    public function home()
    {
//        return response('Contenido de la respuesta', 201)->header('X-TOKEN', 'secret');
        return view('home');
    }

    public function contact(){
        return view('contactos');
    }

    public function saludo($nombre = 'Invitado'){
        return view('saludo', compact('nombre'));
    }

    public function mensaje(CreateMessagesRequest $request)
    {
        $data =  $request->all();

        return redirect()
            ->route('contacto')->with('info', 'Tu mensaje ha sido enviado correctamente :)');
    }



}

