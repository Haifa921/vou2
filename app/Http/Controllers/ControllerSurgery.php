<?php

namespace App\Http\Controllers;
use App\Models\surgery;
use App\Http\Resources\surgeryresource;
use Illuminate\Http\Request;

class ControllerSurgery extends Controller
{
    public function surgery()
    {
        return view('dontate.surgery');
    }
    public function index()
    {
        $posts= surgery::paginate(10);
    return surgeryresource::collection($posts);
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
        $post->id_credit=$request->id_credit; 
        $post->name=$request->name; 
        $post->phone=$request->phone; 
        $post->email=$request->email; 
        $post->amount=$request->amount; 
     
        if($post->save()) 
        {
            return new surgeryresource($post);
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

}
