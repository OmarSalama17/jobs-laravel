<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function login(Request $request)
    {
        $req = $request->only('email', 'password');
        $token = auth('api')->attempt($req);
        if (!$token) {
            return response()->json([
                'message' => 'not access'
            ], 401);
        }
        return response()->json([
            'token' => $token,
            'time' => auth('api')->factory()->getTTL() * 60
        ]);
    }
    public function refresh()
    {
        $refreshToken = auth('api')->refresh();
        return response()->json([
            'token' => $refreshToken,
            'time' => auth('api')->factory()->getTTL() * 60
        ]);
    }
    public function me()
    {
        $user = auth('api')->user();
        return response()->json($user);
    }
    public function logout()
    {
        auth('api')->logout(true);
    }
}
