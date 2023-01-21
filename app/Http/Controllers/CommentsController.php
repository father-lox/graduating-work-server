<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comment;

class CommentsController extends Controller
{
    public function index($newsId)
    {
        return view('comments', ['newsId' => $newsId,
        'comments' => $this->getComments($newsId)
    ]);
    }

    public function getComments($newsId) {
        return Comment::where('post_id', $newsId)->orderBy('created_at', 'desc')->paginate(10);
    }

    public function sendComment(Request $request, $newsId) {
        $comment = $request->validate([
            "comment" => ["required", "max:128"],
        ]);
        $comment['user_id'] = auth("web")->id();
        $comment['post_id'] = $newsId;

        Comment::create($comment);

        return redirect(route('comments', $newsId));
    }
}
