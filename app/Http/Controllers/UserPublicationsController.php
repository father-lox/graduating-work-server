<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserPublicationsController extends Controller
{
    public function index() {
        $posts = Post::where("author_id", auth('web')->id())->orderBy('created_at', 'desc')->get();
        return view('publications', ['posts'=> $posts]);
    }
}
