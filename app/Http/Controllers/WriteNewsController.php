<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class WriteNewsController extends Controller
{
    public function index() {
        return view('write');
    }

    public function sendNews(Request $request) {
        $post = $request->validate([
            "title" => ["required", "max:78"],
            "author_comment" => ["max:128"]
        ]);
        $post['author_id'] = auth("web")->id();

        Post::create($post);

        return redirect(route('publications'));
    }
}
