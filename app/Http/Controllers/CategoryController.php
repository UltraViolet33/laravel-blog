<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function all(): View 
    {
        return view("categories.index", ['posts' => Post::all()]);
    }
}
