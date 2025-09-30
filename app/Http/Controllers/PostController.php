<?php
namespace App\Http\Controllers;

use App\Models\Post;  
use IlluminateHttp\Request;

class PostController extends Controller {
    public function index() {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }
}