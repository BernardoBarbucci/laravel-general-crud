<?php
//test
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pokedex;
use Database\Seeders\PokedexSeeder;

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
        $newPokedexData = $request->all();

        $newPokemon = new Pokedex();
        $newPokemon->name = $newPokedexData['name'];
        $newPokemon->type = $newPokedexData['type'];
        $newPokemon->ability = $newPokedexData['ability'];
        $newPokemon->description = $newPokedexData['description'];
        $newPokemon->height = $newPokedexData['height'];
        $newPokemon->weight = $newPokedexData['weight'];
        $newPokemon->evolution_stage = $newPokedexData['evolution_stage'];
        $newPokemon->image_url = $newPokedexData['image_url'];
        $newPokemon->save();

        $newPokemon = Pokedex::create($newPokedexData);

        return redirect()->route('pokedex.show', $newPokemon->id);
    }

    // Metodo per visualizzare un elemento specifico del Pokedex
    public function show(string $id){
        $pokemon = Pokedex::findOrFail($id);
        return view('pokedex.show', compact('pokemon'));
    }

    // Metodo per visualizzare il form di modifica di un elemento del Pokedex
    public function edit($id)
    {$pokemon = Pokedex::findOrFail($id);
        return view('pokedex.edit', compact('pokemon'));
    }

    // Metodo per aggiornare un elemento del Pokedex nel database
    public function update(Request $request, Pokedex $pokedex)
    {$data = $request->all();
        $pokedex->update($data);
        return redirect()->route('pokedex.show', $pokedex->id);
    }

    // Metodo per eliminare un elemento del Pokedex dal database
    public function destroy(Pokedex $pokemon)
    {
   
        $pokemon->delete();
    
        return redirect()->route('pokedex.index'); 
    }
}
