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
    public function calculate(Request $request)//web.php-control(calculate)
   {
        
        $data['water'] = $request->input('w');
        $data['w/c'] = $request->input('wc');
        $data['s/a'] = $request->input('sa');
        $data['aes'] = $request->input('aes');
        $data['aem'] = $request->input('aem');
        $data['need'] = $request->input('need');
        if(!$request->input('wc')){
        $data['w/c'] = 1;
        }
        $data['Mcement'] = ($data['water'] / ($data['w/c'] * 0.01));
        $data['Vcement'] = ($data['Mcement'] / 3.16);
        $data['Vsand'] = ((1000-$data['Vcement']-45-$data['water'])*$data['s/a']*0.01);
        $data['Vgravel'] = ((1000-$data['Vcement']-45-$data['water'])*(1-$data['s/a']*0.01));
        $data['Mgravel'] = ($data['Vgravel']*2.59);
        $data['Msand'] = ($data['Vsand']*2.59);
        $data['needcement'] = ($data['Mcement']* $data['need']);
        $data['needsand'] = ($data['Msand']* $data['need']);
        $data['needgravel'] = ($data['Mgravel']* $data['need']);
        $data['needaes'] = ($data['aes']*$data['needcement']*0.01);
        $data['needaem'] = ($data['aem']*$data['needcement']);
        $data['addwgravel'] = ($data['needgravel']*0.0073);
        $data['addwsand'] = ($data['needsand']*0.0121);
        $data['needwater'] = number_format(($data['water']* $data['need']-$data['needaes']-$data['needaem']+ $data['addwsand']+ $data['addwgravel']), 2);
        return view('posts/calculate', $data); //返回blade的位置
    }
     
    
    
    
    
    
    
}
