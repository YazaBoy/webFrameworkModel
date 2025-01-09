<?php

namespace App\Http\Controllers;

use App\Models\Film;
use Illuminate\Http\Request;

class homecontrol extends Controller
{
    public function home()
    {
        $films = Film::all();
        return view('home', compact('films'));
    }
}
