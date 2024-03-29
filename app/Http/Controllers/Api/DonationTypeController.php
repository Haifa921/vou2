<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\DonationType;
use App\Traits\FileLibrary;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class DonationTypeController extends Controller
{
    use FileLibrary;
    public function __construct()
    {
        $this->middleware('auth:sanctum')->only(['update', 'store']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = DonationType::all();
        return response()->json(['data' => $types], 200);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $isAuth = Gate::inspect('update-type');
        if ($isAuth->denied())
            return response()
                ->json([
                    'message' => trans('messages.notAdminCreateType')
                ], 403);

        $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'min_amount' => ['required', 'numeric'],
            'img_url' => ['nullable', 'string']
        ]);

        $type = DonationType::create($request->all());
        $type->save();
        return response()->json(['data' => $type], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $type = DonationType::where('id', $id)->firstOrfail();

        return response()->json(['data' => $type], 200);
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
        $isAuth = Gate::inspect('update-type');
        if ($isAuth->denied())
            return response()
                ->json([
                    'message' => trans('messages.notAdminUpdateType')
                ], 403);

        $request->validate([
            'name' => ['required', 'min:3', 'max:255'],
            'min_amount' => ['required', 'numeric'],
            'img_url' => ['nullable', 'string']
        ]);
        $type = DonationType::findOrfail($id);

        $type->update($request->all());
        $type->save();
        return response()->json(['data' => $type], 200);
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
