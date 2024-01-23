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
    public function calcluate(Request $request)//web.php-control(calculate)
   {
        $data['water'] = $request->input('w');
        $data['w/c'] = $request->input('wc');
        $data['Vcement'] = ($data['water'] / ($data['w/c'] * 0.01));
        return view('posts/calculate', $data); //返回blade的位置
   }
}
