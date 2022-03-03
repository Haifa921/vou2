<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AssistanceForm;
use App\Models\Donation;
use App\Models\Payment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class PaymentController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth:sanctum');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $payments = Payment::with('form')->get();
        return response()->json(['data' => $payments], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isAuth = Gate::inspect('create-payment');
        if ($isAuth->denied())
            return response()
                ->json([
                    'message' => trans('messages.notAdminCreatePayment')
                ], 403);
        $request->validate([
            'assistance_form_id' => ['required', 'exists:assistance_forms,id'],
            'amount' => [
                'required', 'numeric',
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

        $payment = Payment::create($request->all());
        return response()->json(['data' => $payment], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show( $id)
    {
        $payment = Payment::with('form')->findOrFail($id);

        return response()->json(['data' => $payment], 200);
        
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
