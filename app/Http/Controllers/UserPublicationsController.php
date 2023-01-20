<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserPublicationsController extends Controller
{
    public function index() {
        $posts = Post::where("author_id", auth('web')->id())->get();
        return view('publications', ['posts'=> $posts]);
    }
}
