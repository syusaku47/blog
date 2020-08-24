<?php

namespace App\Http\Controllers;

use App\Post;
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

    public function create(Request $request)
    {
        $post = new Post();
        $post->title = $request->title;
        $post->text = $request->text;
        $post->created_at = Carbon::now();
        $post->updated_at = Carbon::now();
        $post->save();

        return redirect()->route('posts.index');
    }

    public function edit()
    {
        View::make('posts/edit');
    }
    public function show()
    {
        View::make('posts/show');
    }
}
