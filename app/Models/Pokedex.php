<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pokedex extends Model
{
    use HasFactory;
    use SoftDeletes;

    // create
    protected $fillable = ['name', 'type', 'ability', 'description', 'height', 'weight', 'evolutio', 'image_url'];
    // fine create













}
