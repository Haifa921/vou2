<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Donation;
use App\Models\DonationType;
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
        $donations = Donation::all();
        return response()->json(['data' => $donations], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'donator_name' => ['required', 'min:3', 'max:255'],
            'donator_address' => ['required', 'min:3', 'max:255'],
            'donator_number' => ['required', 'min:6', 'max:255'],
            'donator_email' => ['required', 'email'],
            'amount' => [
                'required', 'numeric',
                function ($attribute, $value, $fail) use ($request) {
                    $typeMinAmount = DonationType::findOrfail($request->donation_type_id)->min_amount;
                    if ($value < $typeMinAmount) {
                        $fail('يجب ان تكون قيمة التبرع اكبر او تساوي ' . $typeMinAmount);
                    }
                },
            ],
        ]);

        $donation = Donation::create($request->all());
        $donation->save();
        
        return response()->json(['data' => $donation], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $donation = Donation::where('id', $id)->firstOrfail();

        return response()->json(['data' => $donation], 200);
    }
}
