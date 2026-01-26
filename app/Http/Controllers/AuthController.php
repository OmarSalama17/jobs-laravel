<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    //
    public function showSignUpForm()
    {
        return view('auth.sign-up');
    }
    public function signUp(UserRequest $request)
    {
        // print_r($request->all());
        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->save();
        auth()->login($user);
        return redirect('/');
    }
    public function showLoginForm()
    {
        return view('auth.sign-in');
    }
    public function login(Request $request) {
        $cre = $request->only('email' , 'password');
        if(auth()->attempt($cre)){
            $request->session()->regenerate();
            return redirect('/');
        }
        return back()->withErrors([
            'error'=>'error'
        ]);
    }
    public function logout() {
        auth()->logout();
    }
}
