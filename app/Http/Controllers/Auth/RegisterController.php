<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

namespace App\Http\Controllers\Auth;

use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    // Show the registration form
    public function showRegistrationForm()
    {
        return view ('auth.register');
    }

    // Handle registration
    protected function register(Request $request)
{
    // Validate the form inputs
    $this->validate($request, [
        'firstname' => 'required',
        'lastname' => 'required',
        'email' => 'required|string|email',
        'phone' => 'required',
        'address' => 'required',
        'gender' => 'required',
        'age' => 'required',
        'occupation' => 'required',
        'religion' => 'required',
        'idealpartner' => 'required',
        'selfdescription' => 'required',
    ]);

    // Create a new user and save to the database
    try {
        $user = User::create([
            'firstname' => $request->firstname,
            'lastname' => $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'address' => $request->address,
            'gender' => $request->gender,
            'age' => $request->age,
            'occupation' => $request->occupation,
            'religion' => $request->religion,
            'idealpartner' => $request->idealpartner,
            'selfdescription' => $request->selfdescription,
        ]);

        // Fire the registered event (optional)
        event(new Registered($user));

        // Flash success message
        $request->session()->flash('Success', 'Registration successful! Welcome to The Link-up Show');
         // Redirect to the home page
         //return redirect()->route('home');
         return redirect()->back()->with('success','Registration successful! Welcome to The Link-up Show');
    } catch (\Exception $e) {
        // Log the error for debugging (optional)
        \Log::error('Registration error: ' . $e->getMessage());

        // Flash error message
        return redirect()->back()->withInput()->withErrors(['registration' => 'Registration failed. Please try again.']);
    }
}


}

