<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        //$products = Product::orderby('created_at')->take(8)->get();

        return view('main.index');
    }
}
