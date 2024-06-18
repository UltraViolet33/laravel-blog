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
        return view("posts.create");
    }


    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'title' => 'required|unique:posts|max:255',
            'content' => 'required',
        ]);
     
        $post = "";

        $post = new Post();
        $post->title = $request->title;
        $post->slug = $request->title;

        $post->body = $request->content;
        $post->category_id = 1;

        $post->save();

        return $this->all();
    }
}
