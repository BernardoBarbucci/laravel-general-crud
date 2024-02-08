<?php

namespace Database\Seeders;

use App\Models\Pokedex;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class PokedexSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        for ($i = 0; $i < 200; $i++) {
            $newPokemon = new Pokedex();
            $newPokemon->name = $faker->name();
            $newPokemon->type = $faker->text();
            $newPokemon->ability = $faker->text();
            $newPokemon->description = $faker->text();
            $newPokemon->height = $faker->randomDigit();
            $newPokemon->weight = $faker->randomDigit();
            $newPokemon->evolution_stage = $faker->name();
            $newPokemon->image_url = $faker->imageUrl(200, 300);
            $newPokemon->save();
        }
    }
}
