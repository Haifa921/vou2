<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\AssistanceForm;
use Illuminate\Http\Request;

class AssistanceFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('welcome');
    }
    public function about()
    {
        return view('about');
    }
    public function contact()
    {
        return view('contact');
    }
    public function admin()
    {
        return view('admin');
    }
    public function users()
    {
        return view('users');
    }
    public function storeadmin(Request $request)
    {
        $this->validate($request, [
            'full_name' =>  'required',
            'emai' =>  'required',

            'password' =>  'required',
            'type' =>  'required',
        ]);

        

        $post = User::create([
            
            'full_name' =>  $request->full_name,
            'emai' =>   $request->emai,
            'password' =>   $request->password,
            'type' =>   $request->type,
        ]);


        return redirect()->back();
    }
    public function destroyadmin($id)
    {
        $post = User::find($id);
        $post->delete($id);
        return redirect()->back();
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AssistanceForm  $assistanceForm
     * @return \Illuminate\Http\Response
     */
    public function show(AssistanceForm $assistanceForm)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AssistanceForm  $assistanceForm
     * @return \Illuminate\Http\Response
     */
    public function edit(AssistanceForm $assistanceForm)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AssistanceForm  $assistanceForm
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AssistanceForm $assistanceForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AssistanceForm  $assistanceForm
     * @return \Illuminate\Http\Response
     */
    public function destroy(AssistanceForm $assistanceForm)
    {
        //
    }
}
