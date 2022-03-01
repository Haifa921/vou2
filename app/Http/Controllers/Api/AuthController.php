<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        $isAuth = Gate::inspect('create-user');
        if ($isAuth->denied())
            return response()
                ->json([
                    'message' => trans('messages.notAdmin')
                ], 403);

        $request->validate([
            'full_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'is_admin' => ['nullable', 'boolean'],
            'type' => ['required_without:is_admin', 'in:supervisor,volunteer'],

        ]);

        $user = User::create([
            'full_name' => $request->full_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'is_admin' => $request->is_admin ?? false,
            'type' => !$request->is_admin ? $request->type : null,
        ]);

        $token = $user->createToken('auth_token')->plainTextToken;

        return response()
            ->json([
                'data' => [
                    'user' => $user,
                    'token' => $token,
                ]
            ], 200);
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            $user = User::where('email', $request['email'])->firstOrFail();

            $token = $user->createToken('auth_token')->plainTextToken;

            return response()
                ->json([
                    'data' => [
                        'user' => $user,
                        'token' => $token,
                    ]
                ], 200);
        }
        return response()
            ->json(['message' => trans('auth.failed')], 401);
    }

    public function logout()
    {
        $user_id = Auth::id();

        $user = User::findOrfail($user_id);

        $user->tokens()->delete();

        return response()->json(['message' => trans('messages.logedout')], 200);
    }
}
