<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class MainController extends Controller
{
    public function index()
    {
        $categories = Category::all();

        return view('main.index', [
            'categories' => $categories
        ]);
    }
}
