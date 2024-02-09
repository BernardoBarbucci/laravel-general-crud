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
        return view('pokedex.create');
    }

    // Metodo per salvare un nuovo elemento del Pokedex nel database
    public function store(Request $request)
    {
        // Valida i dati inviati dal form
        $request->validate([
            // Inserisci qui le regole di validazione per i dati del Pokedex
        ]);

        // Crea un nuovo record nel modello Pokedex
        Pokedex::create([
            // Inserisci qui i campi e i valori del Pokedex da salvare
        ]);

        // Reindirizza l'utente alla pagina di visualizzazione dell'indice del Pokedex
        return redirect()->route('pokedex.index');
    }

    // Metodo per visualizzare un elemento specifico del Pokedex
    public function show($id)
    {
        // Trova l'elemento del Pokedex con l'ID fornito
        $pokedex = Pokedex::findOrFail($id);

        // Passa i dati recuperati alla vista 'pokedex.show'
        return view('pokedex.show', compact('pokedex'));
    }

    // Metodo per visualizzare il form di modifica di un elemento del Pokedex
    public function edit($id)
    {
        // Trova l'elemento del Pokedex con l'ID fornito
        $pokedex = Pokedex::findOrFail($id);

        // Passa i dati recuperati alla vista 'pokedex.edit'
        return view('pokedex.edit', compact('pokedex'));
    }

    // Metodo per aggiornare un elemento del Pokedex nel database
    public function update(Request $request, $id)
    {
        // Valida i dati inviati dal form
        $request->validate([
            // Inserisci qui le regole di validazione per i dati del Pokedex
        ]);

        // Trova l'elemento del Pokedex con l'ID fornito
        $pokedex = Pokedex::findOrFail($id);

        // Aggiorna i campi dell'elemento del Pokedex con i nuovi valori forniti
        $pokedex->update([
            // Inserisci qui i campi e i valori del Pokedex da aggiornare
        ]);

        // Reindirizza l'utente alla pagina di visualizzazione dell'elemento del Pokedex
        return redirect()->route('pokedex.show', $id);
    }

    // Metodo per eliminare un elemento del Pokedex dal database
    public function destroy($id)
    {
        // Trova l'elemento del Pokedex con l'ID fornito e eliminalo
        Pokedex::findOrFail($id)->delete();

        // Reindirizza l'utente alla pagina di visualizzazione dell'indice del Pokedex
        return redirect()->route('pokedex.index');
    }
}
