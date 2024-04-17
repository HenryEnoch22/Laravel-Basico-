<?php

namespace App\Http\Controllers;

use App\Models\Message;
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
//      $mensajes = DB::table('messages')->get();
        $mensajes = Message::all();
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
//        DB::table('messages')->insert([
//            "nombre" => $request->input('nombre'),
//            "email" => $request->input('email'),
//            "mensaje" => $request->input('mensaje'),
//            "created_at" => Carbon::now(),
//            "updated_at" => Carbon::now(),
//    ]);

        Message::create($request->all());

        return redirect()->route('mensajes.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
//        $message = DB::table('messages')->where('id', $id)->first();
        $mensaje = Message::findOrFail($id);
        return view('messges.show', compact('mensaje'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
//        $message = DB::table('messages')->where('id', $id)->first();
        $message = Message::findOrFail($id);
        return view('messges.edit', compact('message'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
//        DB::table('messages')->where('id',$id)->update([
//        "nombre" => $request->input('nombre'),
//        "email" => $request->input('email'),
//        "mensaje" => $request->input('mensaje'),
//        "updated_at" => Carbon::now(),
//    ]);
        $message = Message::findOrFail($id);
        $message->update($request->all());
        return redirect()->route('mensajes.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
//        DB::table('messages')->where('id', $id)->delete();

        $message = Message::findOrFail($id);
        $message->delete();
        return redirect()->route('mensajes.index');
    }
}
