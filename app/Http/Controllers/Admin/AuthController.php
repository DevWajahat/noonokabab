<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminLoginRequest;
use App\Http\Requests\StoreAdminRegisterRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register_view()
    {
        return view('auth.admin.register');
    }

    public function register(StoreAdminRegisterRequest $request)
    {

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'admin',
            'password' => $request->password,
            'phone' => $request->phone
        ]);

        Auth::login($user);
        return redirect()->route('index');


        return redirect()->route('admin.index');
    }

    public function login_view()
    {
        return view('auth.admin.login');
    }
    public function login(StoreAdminLoginRequest $request)
    {

        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {


            return redirect()->route('admin.index')->with('message', 'login Successfully');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records'
        ])->onlyInput('email');
    }
    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
