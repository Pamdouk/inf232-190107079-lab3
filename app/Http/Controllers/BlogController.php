<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class BlogController extends Controller
{
    public function index(){
             $Posts = Post::all();

             return view('Blog.index')->with(['Posts'=>$Posts]);
    }

    public function store(Request $request){
        Post::create([
            'title'=>$request->title,
            'body'=>$request->body
        ]);
        return back();
    }
    public function get_post($id){
       $Posts=Post::find($id);

       if($Posts==null)
       return response(['message'=> "post not found"], 404);

       return view('blog.detail')->with(['Posts' => $Posts]);
    }
}
