<?php

namespace App\Http\Controllers\Web;

use App\Events\PasswordReset;
use App\Http\Controllers\Controller;
use App\Http\Requests\ForgotPasswordRequest;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\StoreRegisterRequest;
use App\Models\PasswordResetToken;
use App\Http\Requests\StoreResetPasswordReqeust;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
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

    public function forgot_password_view()
    {
        return view('auth.profile.forgot-password');
    }
    public function forgotPasswordPost(ForgotPasswordRequest $request)
    {
        $token = Str::random();
        $passwordInstance = PasswordResetToken::updateOrCreate(
            ['email' => $request->email],
            [
                'email' => $request->email,
                'token' => $token,
                'created_at' => Carbon::now()
            ]
        );

        event(new PasswordReset($passwordInstance));



        return back()->with('message', 'We have e-mailed your Password Reset Link!');
    }
    public function resetPasswordView($token)
    {
        $instance = PasswordResetToken::where('token', $token)->first();

        if (!$instance) {
            return abort('404');
        }

        return view('auth.profile.reset-password', get_defined_vars());
    }

     public function resetPassword(StoreResetPasswordReqeust $request)
    {

        // dd($request->token);

        $updatePassword = PasswordResetToken::where('email', $request->email)->where('token', $request->token)->first();

        if (!$updatePassword) {
            return back()->withInput();
        }

        User::where('email', $request->email)->update(['password' => Hash::make($request->password)]);

        PasswordResetToken::find($request->email)->delete();

        return redirect()->route('login')->with('successfull-message', 'Your Password has been changed');
    }


    public function logout()
    {
        Auth::logout();
        return redirect()->route('index');
    }
}
