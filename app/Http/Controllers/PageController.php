<?php

namespace App\Http\Controllers;

use App\Models\Features;


class PageController extends Controller
{
 
    public function index()
    {
        $features = Features::all(); 
        return view('features', compact('features'));
    }
}