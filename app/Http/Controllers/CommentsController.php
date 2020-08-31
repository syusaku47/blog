<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComment;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create(CreateComment $request, $id)
    {
        $comment = new Comment();
        $comment->post_id = $id;
        $comment->name = $request->name;
        $comment->text = $request->text;
        $comment->created_at = Carbon::now();
        $comment->updated_at = Carbon::now();
        $comment->save();

        return redirect()->route('posts.show',[
            //ルーティングにPostのIDを渡す
            'id' => $comment->post_id
        ]);

    }

    public function destroy($id, $post_id)
    {
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route('posts.show',[
    'id' => $post_id 
    ]);
    }
}
