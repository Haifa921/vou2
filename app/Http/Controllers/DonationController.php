<?php

namespace App\Http\Controllers;

use App\Models\DonationType;
use App\Models\Donation;
use Illuminate\Http\Request;

class DonationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dontate.donate');
    }
    public function create1()
    {
        return view('dontate.addsurgery');
    }
    public function all()
    {
        return view('dontate.allsurgery');
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
            'donation_type_id' =>  'required',
            'donator_name' =>  'required',
            'donator_address' =>  'required',

            'donator_number' =>  'required',
            'donator_email' =>  'required',
            'amount' =>  'required',
        ]);

        

        $post = Donation::create([
            'donation_type_id'=>  $request->donation_type_id,
            'donator_name' =>  $request->donator_name,
            'donator_address' =>   $request->donator_address,
            'donator_number' =>   $request->donator_number,
            'donator_email' =>   $request->donator_email,
            'amount'=>   $request->amount
        ]);


        return redirect()->back();
    }

    public function store2(Request $request)
    {
        
        $this->validate($request, [
           
            'name' =>  'required',
            'min_amount' =>  'required',

            'img_url' =>  'required|image',
           
        ]);

        
        $img_url = $request->photo;
        $newPhoto = time() . $img_url->getClientOriginalName();
        $img_url->move('uploads/posts', $newPhoto);
        $post = DonationType::create([
        
            'name' =>  $request->name,
            'min_amount' =>   $request->min_amount,
            'img_url' =>   $request->img_url,
           
        ]);


        return redirect()->back();
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function show(Donation $donation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function edit(Donation $donation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Donation $donation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Donation  $donation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Donation $donation)
    {
        //
    }
}
