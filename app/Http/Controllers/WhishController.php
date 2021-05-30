<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WhishController extends Controller
{
    public function index()
    {
        return view('wishList.index');
    }
}
