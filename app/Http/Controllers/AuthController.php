<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Rinvex\Countries\Facades\Countries;
use App\Helpers\AstroesLabs;
use Jenssegers\Agent\Agent;





class AuthController extends Controller
{

    public function register()
    {
        //dd(Hash::make('12341234'));
        $countries = countries();
        //dd($countries);
        return view('register', compact('countries'));
    }
    public function store(Request $request)
    {
        // Validate the incoming request data
        $validatedData = $request->validate([
            'username' => 'required|string|max:255|unique:users',
            'email' => 'required|string|email|max:255|unique:users',
            'country' => 'required|string',
            'mobile' => 'required|string|max:15',
            'password' => 'required|string|min:8|confirmed',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'image' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zipcode' => 'required|string|max:10',
        ]);

        //$validatedData['name'] = "".$validatedData['first_name'] . " " . $validatedData['last_name'];


        // Handle the image upload
        try {
            $imagePath = $request->file('image')->store('uploads', 'public');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Image upload failed: ' . $e->getMessage()], 500);
        }


        $iban = AstroesLabs::generateNumber();
        // Create the user
        try {
            $user = User::create([
                'last_name' => $validatedData['last_name'],
                'first_name' => $validatedData['first_name'],
                'username' => $validatedData['username'],
                'email' => $validatedData['email'],
                'country' => $validatedData['country'],
                'mobile' => $validatedData['mobile'],
                'password' => Hash::make($validatedData['password']),
                'image' => $imagePath,
                'address' => $validatedData['address'],
                'state' => $validatedData['state'],
                'city' => $validatedData['city'],
                'zipcode' => $validatedData['zipcode'],
                'iban' => $iban,
            ]);

            return response()->json(['message' => 'Registration successful!'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Registration failed: ' . $e->getMessage()], 500);
        }
    }


    public function login()
    {
        //dd(Hash::make('12341234'));

        // Check if the user is already logged in
        if (Auth::check()) {
            // Redirect to the dashboard
            return redirect()->route('user.dashboard');
        }
        return view('login');
    }
    public function authenticate()
    {
        // Validate the incoming request
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        // Attempt to authenticate the user
        if (Auth::attempt($validated)) {
            // Regenerate the session
            request()->session()->regenerate();

            // Create an instance of Agent
            $agent = new Agent();

            // Update last login info
            $user = Auth::user();
            $user->last_login_at = now();
            $user->last_login_browser = $agent->browser();
            $user->last_login_os = $agent->platform();
            $user->save();



            // Return a successful response
            return response()->json(['success' => true, 'message' => 'Login Successful!']);
        }

        // Return a response for failed authentication
        return response()->json(['success' => false, 'message' => 'No matching user found with the provided email and password']);
    }


    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Optionally, invalidate the session
        $request->session()->invalidate();

        // Optionally regenerate the session token for security
        $request->session()->regenerateToken();

        // Redirect the user to the login page or any other page
        return redirect()->route('login')->with('success', 'You have been logged out successfully.');
    }

    public static function generateNumber($length = 26)
    {
        // Start with 'ES'
        $number = 'ES';

        // Generate random digits
        for ($i = 0; $i < $length - 2; $i++) {
            $number .= rand(0, 9);
        }

        return $number;
    }
}
