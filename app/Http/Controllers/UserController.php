<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class UserController extends Controller
{
    public function index() {
        $posts = Post::getPosts();

        return view('user/dashboard', compact('posts'));
    }
}
