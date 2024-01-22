<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post)
    {
        return view('posts/index');
    }
    public function show(Post $post)
   {
        return view('posts/show')->with(['post' => $post]);
   }
    public function calcluate(Request $request)
   {
        $data['exchange'] = $request->input('usdoller');
        $data['jpyen'] = ($data['exchange'] * 110);
        return view('posts/calculate', $data);
   }
}
