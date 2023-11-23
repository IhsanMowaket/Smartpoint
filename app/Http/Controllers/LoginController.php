<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Notifications\LoginNeedsVerification;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Auth.signin')
            ->layout('layouts.custom-app');

    }

    public function submit(Request $request)
    {
        $request->validate([
            'phone' => 'required|numeric|min:8'
        ]);

        $user = User::where('phone', $request->phone)->first();


        if (!$user) {
            // Redirect back with an error message if the user is not found
            return redirect()->back()->with('error', "Phone Number can't be found");
        }
//        API Response using Json
//        if (!$user) {
//            return \response()->json(['message' => "Phone Number can't be find"], 401);
//        }
        $user->notify(new LoginNeedsVerification());
        // After validating and creating the user
        $request->session()->put('phone', $request->phone);

        return redirect()->to('login/verify'); // Redirect to the 'verify' view
    }

    public function verify(Request $request)
    {

        $request->validate([
            'phone' => 'required|numeric|min:8',
            'login_code' => 'required|numeric|digits:6'
        ]);

        // Retrieve the phone number from the session
        $phone = $request->session()->get('phone');
        $user = User::where('phone', $phone)
            ->where('login_code', $request->login_code)
            ->first();

        if ($user) {
            $user->update(['login_code' => null]);

            // Assuming you are using Sanctum.
            //$token = $user->createToken('access-token')->plainTextToken;
            Auth::login($user);
            // If this is an API response:
            //return response()->json(['token' => $token], 200);

            // If you want to redirect the user to a dashboard with a web application:
             return redirect()->to('index')->with('success', 'Login successful.');
        }
        $request->session()->forget('phone');
        // For API:
        //return response()->json(['message' => 'Invalid Verification'], 401);

        // For web application:
         return back()->withErrors(['login_code' => 'Invalid verification code.']);
    }

    public function logout(Request $request){
        // Assuming you are using Laravel's built-in authentication and session drivers
        auth()->logout();

        // If you are using token-based authentication, like Sanctum or Passport, you may also need to revoke the token
        // $request->user()->tokens()->delete();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the login page or wherever you want
        return redirect('/login');
    }
}


