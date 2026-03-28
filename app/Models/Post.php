<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title', 'description', 'category_id', 'author_id'];

    public static function getPosts() {
        return static::all();
    }

    public static function getUserPosts($id) {
        return static::where('author_id', $id)->get();
    }

    public static function getPostById($id) {
        return static::find($id)->get();
    }

    public static function createPost($data) {
        return static::insert($data);
    }
}
