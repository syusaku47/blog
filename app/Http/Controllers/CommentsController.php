<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateComment;
use App\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

class CommentsController extends Controller
{
    public function create(CreateComment $request)
    {
        $comment = new Comment();
        $comment->name = $request->name;
        $comment->text = $request->text;
        $comment->created_at = Carbon::now();
        $comment->updated_at = Carbon::now();
        $comment->save();

    }
}
