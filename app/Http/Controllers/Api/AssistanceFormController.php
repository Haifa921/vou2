<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\AssistanceForm;
use App\Models\DonationType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class AssistanceFormController extends Controller
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
        $forms = AssistanceForm::all();
        return response()->json(['data' => $forms], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $isAuth = Gate::inspect('create-form');
        // if ($isAuth->denied())
        //     return response()
        //         ->json([
        //             'message' => trans('messages.notAdminCreateForm')
        //         ], 403);

        $request->validate([
            'applicant_name' => ['required', 'min:3', 'max:255'],
            'applicant_address' => ['required', 'min:3', 'max:255'],
            'applicant_number' => ['required', 'min:6', 'max:255'],
            'description' => ['required', 'min:6', 'max:255'],
            'amount' => [
                'required', 'numeric',
                // function ($attribute, $value, $fail) use ($request) {
                //     $type = DonationType::findOrfail($request->type_id);
                //     if ($value < $type->min_amount && ) {
                //         $fail('يجب ان تكون قيمة التبرع تساوي ' . $type->min_amount);
                //     }
                // },
            ],
        ]);

        $form = AssistanceForm::make($request->all());
        $form->user_id = Auth::id();
        $form->save();

        return response()->json(['data' => $form], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $form = AssistanceForm::where('id', $id)->firstOrfail();

        return response()->json(['data' => $form], 200);
    }

    public function accept(AssistanceForm $form)
    {
        $isAuth = Gate::inspect('form-acceptance');
        if ($isAuth->denied())
            return response()
                ->json([
                    'message' => trans('messages.notAdminaccept')
                ], 403);
        $form->is_accepted = true;
        $form->save();

        return response()->json(['data' => $form], 200);
    }
    
    public function reject(AssistanceForm $form)
    {
        $isAuth = Gate::inspect('form-acceptance');
        if ($isAuth->denied())
            return response()
                ->json([
                    'message' => trans('messages.notAdminaccept')
                ], 403);
        $form->is_accepted = false;
        $form->save();

        return response()->json(['data' => $form], 200);
    }
}
