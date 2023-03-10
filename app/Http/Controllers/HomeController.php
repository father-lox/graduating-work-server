<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class HomeController extends Controller
{
    public function index() {
        $posts = Post::orderBy('created_at', 'desc')->paginate(3);
        
        return view('index', ['posts'=> $posts]);
    }
}
