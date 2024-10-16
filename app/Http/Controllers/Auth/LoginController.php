<?php

namespace App\Http\Controllers\Auth;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    /**public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }
    */
    public function login(Request $request)
    {
        // Validate the login form
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            // If successful, redirect to intended page or home
            $request->session()->regenerate();
            return redirect()->route('users');
        }

        // If login fails, return back with error
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

}
