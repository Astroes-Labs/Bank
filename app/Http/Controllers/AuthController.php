<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Rinvex\Countries\Facades\Countries;



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
            'username' => 'required|string|max:255',
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

        // Handle the image upload
        try {
            $imagePath = $request->file('image')->store('uploads', 'public');
        } catch (\Exception $e) {
            return response()->json(['error' => 'Image upload failed: ' . $e->getMessage()], 500);
        }

        // Create the user
        try {
            $user = User::create([
                'username' => $validatedData['username'],
                'email' => $validatedData['email'],
                'country' => $validatedData['country'],
                'mobile' => $validatedData['mobile'],
                'password' => Hash::make($validatedData['password']),
                'first_name' => $validatedData['first_name'],
                'last_name' => $validatedData['last_name'],
                'image' => $imagePath,
                'address' => $validatedData['address'],
                'state' => $validatedData['state'],
                'city' => $validatedData['city'],
                'zipcode' => $validatedData['zipcode'],
            ]);

            return response()->json(['message' => 'Registration successful!'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Registration failed: ' . $e->getMessage()], 500);
        }
    }

    public function storek()
    {
        $validated = request()->validate([
            'name' => 'required|min:3|max:40',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|confirmed|min:8',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' =>  $validated['email'],
            'password' =>  Hash::make($validated['password']),
        ]);

        Mail::to($user->email)->send(new WelcomeEmail($user));

        return redirect()->route('dashboard')->with('success', 'Account created Successfully!');
    }
    public function login()
    {
        //dd(Hash::make('12341234'));
        return view('login');
    }

    public function authenticate()
    {
        $validated = request()->validate([
            'email' => 'required|email',
            'password' => 'required|min:8',
        ]);

        if (auth::attempt($validated)) {
            request()->session()->regenerate();

            return response()->json(['success' => true, 'message' => 'Login Successful!']);
            // return redirect()->route('dashboard')->with('success','Logged in Successfully!');
        }

        /*  return redirect()->route('login')->withErrors([
            'email' => "No matching user found with the provided email and password"
        ]); */

        return response()->json(['success' => false, 'message' => 'No matching user found with the provided email and password']);
    }
}
