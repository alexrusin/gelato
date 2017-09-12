<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharactersController extends Controller
{
    public function index()
    {
    	$characters = Character::all();

    	return view('frontend.characters', compact('characters'));
    }

    public function show(Character $character)
    {
    	return view('frontend.single-character', compact('character'));
    }
}
