<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class HelloController extends Controller
{
    public function home(){
        return view('home');
    }

    public function mypage(){
        return view('mypage');
    }
    

    public function info(){
        return view('info');
    }

    public function store(Request $request){

        $post= new Post( );
        $post['name']=$request->input('name');
        $post['gender']=$request->input('gender');
        $post['message']=$request->input('message');
        $post->save( );
        $posts = post::all( );
            return view('sample',compact('posts'));

}
}

