<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
        // Validate the input
        $credentials = $request->validate([
            'email' => [
                'required',
                'email',
                'regex:/^[a-zA-Z0-9._%+-]+@pup\.edu\.ph$/', // Ensure email ends with @pup.edu.ph
            ],
            'password' => ['required'],
        ]);
    
        // Check if the email exists in the database
        $user = User::where('email', $request->email)->first();
    
        if (!$user) {
            // If the email does not exist
            return back()->withErrors([
                'email' => 'The Webmail address is not registered.',
            ])->onlyInput('email');
        }
    
        // Attempt to authenticate the user
        if (!Auth::attempt($credentials)) {
            // If the password is incorrect
            return back()->withErrors([
                'password' => 'The password you entered is incorrect.',
            ])->onlyInput('password');
        }
    
        // If authentication is successful, check the email
        $request->session()->regenerate();
    
        // Reserved email for admin dashboard
        $adminEmails = [
            'system@pup.edu.ph', // Add all reserved Executive emails here
        ];
    
        if (in_array($user->email, $adminEmails)) {
            // Redirect to the admin dashboard
            return redirect()->route('dashboard');
        }
    
        // Redirect to the client dashboard for other valid emails
        return redirect()->route('Cdashboard');
    }

    public function store(Request $request)
    {
        // Validate the input
        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'regex:/^[a-zA-Z0-9._%+-]+@pup\.edu\.ph$/', // Ensure email ends with @pup.edu.ph
                'unique:users,email', // Ensure email is unique in the users table
            ],
            'password' => ['required', 'string', 'min:8', 'confirmed'], // Password confirmation required
        ]);

        // Create the user
        $user = User::create([
            'name' => $validatedData['name'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        // Log the user in
        Auth::login($user);

        return redirect()->route('profile2');
    }
}