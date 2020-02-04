<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class mainController extends Controller
{
    public function index()
    {
        return view('accueil');
    }
    
    public function shop()
    {
        return view('shop');
    }

    public function portfolio()
    {
        return view('portfolio');
    }

    public function about()
    {
        return view('about');
    }

}
