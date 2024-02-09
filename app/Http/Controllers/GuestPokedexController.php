<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;


class GuestPokedexController extends Controller
{
    public function index()
    {
        $pokedex = Pokedex::all();
        return view('pokedex.index', compact('pokedex'));
    }

    // Metodo per visualizzare la pagina di creazione di un nuovo elemento del Pokedex
    public function create()
    {
    }

    // Metodo per salvare un nuovo elemento del Pokedex nel database
    public function store(Request $request)
    {
    }

    // Metodo per visualizzare un elemento specifico del Pokedex
    public function show($id)
    {
    }

    // Metodo per visualizzare il form di modifica di un elemento del Pokedex
    public function edit($id)
    {
    }

    // Metodo per aggiornare un elemento del Pokedex nel database
    public function update(Request $request, $id)
    {
    }

    // Metodo per eliminare un elemento del Pokedex dal database
    public function destroy($id)
    {
    }
}
