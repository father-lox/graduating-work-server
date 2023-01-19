<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserPublicationsController extends Controller
{
    public function index() {
        return view('publications');
    }
}
