<?php

namespace App\Http\Controllers\Blog;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BlogController extends Controller
{
    protected $limit = 3;

    public function index()
    {
        $posts = Post::with('user')->latestFirst()->paginate($this->limit);
        return view('blog.index', compact('posts'));
    }
}
