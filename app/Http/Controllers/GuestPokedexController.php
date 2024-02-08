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
}
