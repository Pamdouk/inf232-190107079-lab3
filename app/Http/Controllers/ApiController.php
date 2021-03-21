<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class ApiController extends Controller
{
    /*
    This function will return all info about posts
    */
    public function index(Request $request){
        $posts= Post::all();
        return response($posts, 200);
    }

    /*
    This function will return post info with searching by posts id
    */
public function get_post(Request $request){
    $post = Post::find($request->post_id);

    if($post==null){
        return response(['meassage'=>'There is no such post'], 404);
    }
    return response($post, 200);
}

}
