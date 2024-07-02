<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PostController extends Controller
{
    public function all(): View
    {
        return view("posts.index", ['posts' => Post::all()]);
    }


    public function create(): View
    {
        return view("posts.create", ['categories' => Category::all()]);
    }


    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'title' => 'required|unique:posts|max:255',
            'category' => 'required',
            'content' => 'required',
        ]);

        $post = new Post();
        $post->title = $request->title;
        $category = Category::find($request->category);
        if ($category) {
            $post->category_id = $category->id;
        }
        $post->body = $request->content;
        $post->save();

        return redirect('/posts/all');
    }
}
