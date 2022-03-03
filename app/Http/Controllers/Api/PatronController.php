<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AssistanceForm;
use App\Models\Donation;
use App\Models\DonationType;
use App\Models\Patron;
use App\Models\Payment;
use Illuminate\Http\Request;

class PatronController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $patrons = Patron::with(['payment','donation'])->get();
        return response()->json(['data' => $patrons], 200);
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
            'assistance_form_id' => ['required', 'exists:assistance_forms,id'],
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
                function ($attribute, $value, $fail) use ($request) {
                    $form = AssistanceForm::findOrfail($request->assistance_form_id);
                    $type = $form->type_id;
                    $funds = Donation::where('donation_type_id', $type)->sum('amount');
                    $pays = Payment::whereHas('form', function ($query) use ($type) {
                        $query->where('type_id', $type);
                    })->sum('amount');

                    if ($value > ($funds - $pays) || $value != $form->amount) {
                        $fail('يجب ان تكون قيمة الدفعة تساوي ' . $form->amount);
                    }
                },
            ],
        ]);
        $form = AssistanceForm::find($request->assistance_form_id);
        $form->is_completed = true;
        $form->save();

        $donation = Donation::create($request->except('assistance_form_id'));
        $donation->save();
        $payment = Payment::create($request->only('assistance_form_id', 'amount'));
        $patron = Patron::create([
            'donation_id' => $donation->id,
            'payment_id' => $payment->id
        ]);
        $patron->load('payment', 'donation');

        return response()->json(['data' => $patron], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $patrons = Patron::with(['payment','donation'])->where('id', $id)->firstOrfail();

        return response()->json(['data' => $patrons], 200);
    }
}
