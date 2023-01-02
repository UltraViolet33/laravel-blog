<?php


namespace App\Models;

class Post
{

    public static function find($slug)
    {
        // $path = __DIR__ . "/../resources/posts/{$slug}.html";

        //     if (!file_exists($path)) {
        //         return redirect("/");
        //     }

        //     $post = cache()->remember("posts.{slug}", 1200, function() use ($path){
        //         var_dump("ok");
        //         return file_get_contents($path);
        //     } );


    }
}
