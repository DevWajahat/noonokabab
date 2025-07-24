<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class AuthController extends Controller
{
    public function login_view()
    {


        return view('auth.login');
    }

    public function login(LoginRequest $request)
    {


        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {

            return redirect()->route('index');
        }

        return back()->with('message', 'The provided credentials do not match our records.');
    }
    public function register(StoreRegisterRequest $request)
    {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => $request->password
        ]);

        Auth::login($user);
        return redirect()->route('index');
    }

    public function google_auth()
    {
        return Socialite::driver('google')->redirect();
    }

    public function google_callback()
    {
        $user = Socialite::driver('google')->user();

        dd($user);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
