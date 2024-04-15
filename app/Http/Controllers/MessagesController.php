<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use function Laravel\Prompts\table;
use DB;
use Illuminate\Support\Carbon;

class MessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $mensajes = DB::table('messages')->get();
        return view('messges.index', compact('mensajes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('messges.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        DB::table('messages')->insert([
            "nombre" => $request->input('nombre'),
            "email" => $request->input('email'),
            "mensaje" => $request->input('mensaje'),
            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now(),


    ]);

        return redirect()->route('messages.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $message = DB::table('messages')->where('id', $id)->first();

        return view('messges.show', compact('message'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $message = DB::table('messages')->where('id', $id)->first();
        return view('messges.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        DB::table('messages')->where('id',$id)->update([
        "nombre" => $request->input('nombre'),
        "email" => $request->input('email'),
        "mensaje" => $request->input('mensaje'),
        "updated_at" => Carbon::now(),
    ]);
        return redirect()->route('messages.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "Eliminando el mensaje " . $id;
    }
}
