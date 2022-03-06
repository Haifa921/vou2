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
    public function assistance()
    {
        return view('assistance');
   } 
   public function asdo()
   {
       return view('asdo');
  } 
    public function voludo()
    {
        return view('voludo');
    }
    public function checkas()
    {
        return view('checkas');
    }
    public function storeadmin(Request $request)
    {
        $this->validate($request, [
            'full_name' =>  'required',
            'email' =>  'required',

            'password' =>  'required',
            'type' =>  'required',
        ]);

        

        $post = User::create([
            
            'full_name' =>  $request->full_name,
            'email' =>   $request->email,
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
        $this->validate($request, [
           
            'type_id' =>  'required',
            'description' =>  'required',

            'amount' =>  'required',
            'applicant_name' =>  'required',
            'applicant_address' =>  'required',
            'applicant_number' =>  'required',
           
        ]);

        

        $post = AssistanceForm::create([
            user_id =>  Auth::id(),
            'type_id' =>  $request->type_id,
            'description' =>   $request->description,
            'amount' =>   $request->amount,
            'applicant_name' =>   $request->applicant_name,
            'applicant_address' =>   $request->applicant_address,
            'applicant_number' =>   $request->applicant_number,
        ]);


        return redirect()->back();
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
    public function approve(AssistanceForm $post)
    {
        $post->is_accepted = true;
        $post->save();
        return redirect()->back();
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
