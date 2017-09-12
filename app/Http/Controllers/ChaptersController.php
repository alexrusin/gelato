<?php

namespace App\Http\Controllers;

use App\Models\Chapter;
use Illuminate\Http\Request;

class ChaptersController extends Controller
{
    public function index()
    {
    	$chapters = Chapter::get();

    	return view('frontend.chapters', compact('chapters'));
    }

    public function show(Chapter $chapter)
    {
    	return view('frontend.single-chapter', compact('chapter'));
    }
}
