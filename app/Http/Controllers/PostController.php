<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
<<<<<<< HEAD
    {
        return view('posts/index')->with(['posts' => $post->getPaginateByLimit(1)]);
    }
=======
   {
    return $post->get();
   }
>>>>>>> origin/master
}
