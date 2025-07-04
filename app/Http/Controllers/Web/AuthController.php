<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login_view()
    {


        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {


        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){

            return redirect()->route('index');
        }

        return back()->with('message','The provided credentials do not match our records.');
    }

    public function logout(){
        Auth::logout();
        return redirect()->route('index');
    }
}
