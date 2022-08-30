<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index() {
        $posts = Post::paginate(5);

        $posts->map(function ($post) {

            if($post->cover_img) {
                $post->cover_img = asset("storage/" . $post->cover_img);
            } else {
                $post->cover_img = asset("images/image-placeholder.png");
            }

            return $post;
        });

        

        return response()->json($posts);
    }
}
