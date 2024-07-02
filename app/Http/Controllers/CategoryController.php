<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;


class CategoryController extends Controller
{
    public function all(): View
    {
        return view("categories.index", ['categories' => Category::all()]);
    }

    public function create(): View
    {
        return view("categories.create");
    }

    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required|unique:categories|max:255',
        ]);

        $category = new Category();
        $category->name = $request->name;
        $category->save();
        return redirect('/categories/all');
    }
}
