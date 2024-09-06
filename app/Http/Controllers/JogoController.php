<?php

namespace App\Http\Controllers;

use App\Http\Requests\JogoRequest;
use App\Models\Jogo;
use Illuminate\Http\Request;

class JogoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view("jogo.index")->with('JogoCollection', Jogo::paginate(3));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('jogo.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(JogoRequest $request)
    {
        Jogo::create($request->all());
        return redirect('/jogos');
    }

    /**
     * Display the specified resource.
     */
    public function show(Jogo $jogo)
    {
        //return dd($jogo);
        return view('jogo.show')->with('objetoJogo', $jogo);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Jogo $jogo)
    {
        return view('jogo.edit')->with('objetoJogo', $jogo);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(JogoRequest $request, Jogo $jogo)
    {
        $jogo->update($request->all());
        return redirect('/jogos');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Jogo $jogo)
    {
        $jogo->delete();
        return redirect('/jogos');
    }
}
