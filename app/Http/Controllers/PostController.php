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
        $data['needwater'] = (($data['water']* $data['need']-$data['needaes']-$data['needaem']+ $data['addwsand']+ $data['addwgravel']));
        return view('posts/calculate', $data); //返回blade的位置
    }
     public function mortar(Request $request)//web.php-control(calculate)
   {
        
        $data['water'] = $request->input('w');
        $data['w/c'] = $request->input('wc');
        $data['aes'] = $request->input('aes');
        $data['aem'] = $request->input('aem');
        $data['need'] = $request->input('need');
        $data['replace'] = $request->input('replace');
        $data['density'] = $request->input('density');
        $data['absorption'] = $request->input('absorption');
        if(!$request->input('wc')){
        $data['w/c'] = 1;
        }
        $data['Mcement'] = ($data['water'] / ($data['w/c'] * 0.01));
        $data['Vcement'] = ($data['Mcement'] / 3.16);
        $data['Vsand'] = ((1000-$data['Vcement']-45-$data['water'])*0.53);
        $data['magnification'] = (1000 / ($data['water']+$data['Vcement']+ $data['Vsand']+ 45));
        $data['VMsand'] = ($data['Vsand']* $data['magnification']);
        $data['VMspecial'] = ($data['VMsand']*$data['replace']* 0.01);
        $data['VMsand'] = ($data['VMsand']*( 1 - $data['replace']* 0.01));
        $data['MMcement'] = ($data['Vcement']*$data['magnification']*3.16);
        $data['MMsand'] = ($data['VMsand']*2.59);
        $data['MMspecial'] = ($data['VMspecial']*$data['density']);
        $data['needcement'] = ($data['MMcement']* $data['need']);
        $data['needsand'] = ($data['MMsand']* $data['need']);
        $data['needspecial'] = ($data['MMspecial']* $data['need']);
        $data['needaes'] = ($data['aes']*$data['needcement']*0.01);
        $data['needaem'] = ($data['aem']*$data['needcement']);
        $data['addwspecial'] = ($data['needspecial']*$data['absorption']*0.01);
        $data['addwsand'] = ($data['needsand']*0.0121);
        $data['needwater'] = (($data['water']*$data['magnification']* $data['need']-$data['needaes']-$data['needaem']+ $data['addwsand']+ $data['addwspecial']));
        return view('posts/mortar', $data); //返回blade的位置
    }
    
    public function sconcrete(Request $request)//web.php-control(calculate)
   {
        
        $data['water'] = $request->input('w');
        $data['w/c'] = $request->input('wc');
        $data['s/a'] = $request->input('sa');
        $data['replace'] = $request->input('replace');
        $data['density'] = $request->input('density');
        $data['absorption'] = $request->input('absorption');
        $data['aes'] = $request->input('aes');
        $data['aem'] = $request->input('aem');
        $data['need'] = $request->input('need');
        if(!$request->input('wc')){
        $data['w/c'] = 1;
        }
        $data['Mcement'] = ($data['water'] / ($data['w/c'] * 0.01));
        $data['Vcement'] = ($data['Mcement'] / 3.16);
        $data['Vsand'] = ((1000-$data['Vcement']-45-$data['water'])*$data['s/a']*0.01);
        $data['VCspecial'] = ($data['Vsand']*$data['replace']* 0.01);
        $data['VCsand'] = ($data['Vsand']*( 1 - $data['replace']* 0.01));
        $data['MCsand'] = ($data['VCsand']*2.59);
        $data['MCspecial'] = ($data['VCspecial']*$data['density']);
        $data['Vgravel'] = ((1000-$data['Vcement']-45-$data['water'])*(1-$data['s/a']*0.01));
        $data['Mgravel'] = ($data['Vgravel']*2.59);
        $data['needcement'] = ($data['Mcement']* $data['need']);
        $data['needsand'] = ($data['MCsand']* $data['need']);
        $data['needspecial'] = ($data['MCspecial']* $data['need']);
        $data['needgravel'] = ($data['Mgravel']* $data['need']);
        $data['needaes'] = ($data['aes']*$data['needcement']*0.01);
        $data['needaem'] = ($data['aem']*$data['needcement']);
        $data['addwgravel'] = ($data['needgravel']*0.0073);
        $data['addwspecial'] = ($data['needspecial']*$data['absorption']*0.01);
        $data['addwsand'] = ($data['needsand']*0.0121);
        $data['needwater'] = (($data['water']* $data['need']-$data['needaes']-$data['needaem']+ $data['addwsand']+ $data['addwgravel']));
        return view('posts/sconcrete', $data); //返回blade的位置
    }
    
    
    
    
    
    
}
