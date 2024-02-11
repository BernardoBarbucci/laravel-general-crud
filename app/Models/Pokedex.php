<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pokedex extends Model
{
    use HasFactory;

    // create
    protected $fillable = ['name', 'type', 'ability', 'description', 'height', 'weight', 'evolutio', 'image_url'];
    // fine create













}
