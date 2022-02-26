<?php

namespace App\Http\Controllers;
use App\Models\surgery;
use App\Models\volu1;
use App\Http\Resources\surgeryresource;
use App\Http\Resources\volu1resource;
use Illuminate\Http\Request;

class ControllerSurgery extends Controller
{
    public function surgery()
    {
        return view('dontate.surgery');
    }
    public function volu1()
    {
        return view('dashboard');
    }
    public function index()
    {
        $posts= surgery::paginate(10);
    return surgeryresource::collection($posts);
    }
    public function index1()
    {
        $posts= volu1::paginate(10);
    return volu1resource::collection($posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $post =new surgery();
       
        $post->name=$request->name; 
        $post->phone=$request->phone; 
        $post->email=$request->email; 
        $post->amount=$request->amount; 
     
        if($post->save()) 
        {
            return new surgeryresource($post);
        }
    }
    public function store1(Request $request)
    {
        
        $post =new volu1();
        $post->type=$request->type; 
        $post->name=$request->name; 
        $post->phone=$request->phone; 
       
     
        if($post->save()) 
        {
            return new volu1resource($post);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = surgery::findOrFail($id);
    return new surgeryresource($post);
    }
    public function show1($id)
    {
        $post = volu1::findOrFail($id);
    return new volu1resource($post);
    }

}
