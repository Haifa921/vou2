<?php

namespace App\Http\Controllers;
use App\Models\post;
use App\Http\postresource;
use Illuminate\Http\Request;

class ApiPostController extends Controller
{
    public function index(){
    $posts= post::paginate(10);
    return postresource::collection($posts);
    }

    public function create(){
        
    }

    public function store(Request $request){
       $post =new post();
       $post->english=$request->english; 
       $post->arabic=$request->arabic; 
       $post->phone=$request->phone; 
       $post->email=$request->email; 
       $post->orphan_type=$request->orphan_type; 
       $post->amount=$request->amount; 
       $post->branch=$request->branch; 
       $post->id_num=$request->id_num; 
       $post->date=$request->date;
       if($post->save()) 
       {
           return new postresource($post);
       }
    }
public function show($id){
    $post = post::findOrFail($id);
    return new postresource($post);
}

}
