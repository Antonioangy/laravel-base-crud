<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Comic;

class HomeController extends Controller
{
    public function home() {

        $comic = Comic::all();

        // dd($comic);

        return view('pages.home', compact('comic'));
    }

    public function show($id) {

        $comic = Comic::findOrFail($id);

        // dd($comic);
        // dd($id);

        return view('pages.show', compact('comic'));
    }
}
