<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function shoppingList()
    {
        $posts = Post::all();
        return view("posts.index", ["posts" => $posts]);
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view("posts.show", ["post" => $post]);
    }
    public function create()
    {
        return view("posts.create");
    }
    public function store(Request $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->amount = $request->amount;
        $post->save();
        return redirect("/shoplist");
    }
}