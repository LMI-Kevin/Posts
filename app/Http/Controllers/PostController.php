<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Post;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{
    public function addPost() {
        $categories = Category::getCategories();
        return view('user/add_post', compact('categories'));
    }

    public function storePost(Request $request) {
        $data = $request->only(['title', 'description', 'category_id']);
        $data['author_id'] = auth()->id();

        $post = Post::createPost($data);

        return redirect()->route('user.index');
    }

    public function viewPost($id) {
        $post = Post::getPostById($id)[0];

        return view('user/view_post', compact('post'));
    }

    public function viewUserPosts() {

        $posts = Post::getUserPosts(auth()->id());

        return view('user/user_posts', compact('posts'));
    }

    public function editPost($id) {
        $post = Post::getPostById($id)[0];

        return view('user/edit_post', compact('post'));
    }
}
