<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
   public function shoppingList()
    {
        $posts = Post::where('user_id', Auth::id())->get(); 
        return view("posts.index", ["posts" => $posts, "showButton" => true]);
    }
    public function show($id)
    {
        $post = Post::find($id);
        return view("posts.show", ["post" => $post]);
    }
    public function create()
    {
        return view("posts.create", ["showButton" => false]);
    }
      public function store(Request $request)
    {
        $post = new Post();
        $post->name = $request->name;
        $post->amount = $request->amount;
        $post->user_id = Auth::id(); 
        $post->save();
        return redirect("/shoplist");
    }
  public function markAsBought($id)
{
    $post = Post::find($id);
    $post->bought = request()->has('bought');
    $post->save();
    return redirect('/shoplist');
}
public function removeItem($id)
{
    $post = Post::find($id);
    $post->delete();
    return redirect('/shoplist');
}
public function clearList()
{
    $posts = Post::where('user_id', Auth::id())->get();
    foreach ($posts as $post) {
        $post->delete();
    }
    return redirect('/shoplist');
}
public function edit($id)
{
    $post = Post::find($id);
    return view("posts.edit", ["post" => $post]);
}

public function update(Request $request, $id)
{
    $post = Post::find($id);
    $post->name = $request->name;
    $post->amount = $request->amount;
    $post->save();
    return redirect("/shoplist");
}


}




