<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateFolder;
use App\Post;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Support\Facades\View;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
    
        return view('posts/index', [
            'posts' => $posts,
        ]);
    }
    public function new()
    {
        return view('posts/new');
    }

    public function create(CreateFolder $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->text = $request->text;
        $post->created_at = Carbon::now();
        $post->updated_at = Carbon::now();
        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('posts/edit',[
        'post' => $post
        ]);
    }

    public function update(int $id, Request $request)
    {        
        $post = Post::find($id);
        $post->title = $request->title;
        $post->text = $request->text;
        $post->updated_at = Carbon::now();
        $post->save();

        return redirect()->route('posts.index');
    }
    public function show(int $id)
    {
        $post = Post::find($id);
        // $comments = Comment::where('post_id',$id)->get();
        $comments = $post->comments()->get(); //モデルクラスにおけるリレーション
        return view('posts/show',[
        'post' => $post,
        'comments' => $comments
        ]);
    }

    public function destroy($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('posts.index');
    }
}
