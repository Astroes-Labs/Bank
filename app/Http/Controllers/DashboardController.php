<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;


class DashboardController extends Controller
{
    public function show()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Calculate the greeting
        $greeting = $this->getGreeting($user);
        $transfers = Transfer::where('user_id', auth()->id())
            ->latest() // Order by the latest
            ->take(5) // Limit to the latest 5 records
            ->get();


        // Pass the user and greeting to the view
        return view('dashboard.dashboard', compact('user', 'greeting', 'transfers'));
    }
    public function settings()
    {
        // Get the currently authenticated user
        $user = Auth::user();

        // Calculate the greeting
        $greeting = $this->getGreeting($user);


        // Pass the user and greeting to the view
        return view('dashboard.settings', compact('user', 'greeting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'country' => 'required|string|max:255',
            'mobile' => 'required|string|max:15',
            'image' => 'nullable|image|mimes:jpg,png,gif|max:2048',
            'address' => 'required|string|max:255',
            'state' => 'required|string|max:255',
            'city' => 'required|string|max:255',
            'zipcode' => 'required|string|max:10',
        ]);

        $user = auth()->user();
        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->country = $request->country;
        $user->mobile = $request->mobile;
        $user->address = $request->address;
        $user->state = $request->state;
        $user->city = $request->city;
        $user->zipcode = $request->zipcode;

        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($user->image) {
                Storage::disk('public')->delete($user->image);
            }

            // Store the new image
            $path = $request->file('image')->store('avatars', 'public');
            $user->image = $path;
        }

        $user->save();

        return redirect()->back()->with('success', 'Profile updated successfully.');
    }

    public function changePassword(Request $request)
    {
       // Get the currently authenticated user
       $user = Auth::user();

       // Calculate the greeting
       $greeting = $this->getGreeting($user);


       // Pass the user and greeting to the view
       return view('dashboard.change-password', compact('user', 'greeting'));
    }
    public function updatePassword(Request $request)
    {
        $request->validate([
            'current_password' => 'required|string',
            'new_password' => 'required|string|min:8|confirmed',
        ]);

        $user = auth()->user();

        // Check if the current password is correct
        if (!Hash::check($request->current_password, $user->password)) {
            return response()->json(['errors' => ['current_password' => ['The current password is incorrect.']]], 422);
        }

        // Update the password
        $user->password = Hash::make($request->new_password);
        $user->save();

        return response()->json(['success' => 'Password changed successfully!']);
    }



    public function transfers()
    {
        $user = Auth::user();
        $greeting = $this->getGreeting($user);

        return view('dashboard.transfers', compact('user', 'greeting'));
    }

    public function wireTransfer()
    {
        $user = Auth::user();
        $greeting = $this->getGreeting($user);

        return view('dashboard.transfers', compact('user', 'greeting'));
    }

    public function transferLog()
    {
        $user = Auth::user();
        $greeting = $this->getGreeting($user);

        // Use paginate to get a limited number of records per page (e.g., 10)
        $transfers = Transfer::where('user_id', auth()->id())
            ->where('type', 'DR') // Add this line to filter by type
            ->latest()
            ->paginate(10);
        $log = true;

        return view('dashboard.transfers', compact('user', 'greeting', 'transfers', 'log'));
    }
    public function transactions()
    {
        $user = Auth::user();
        $greeting = $this->getGreeting($user);

        // Use paginate to get a limited number of records per page (e.g., 10)
        $transfers = Transfer::where('user_id', auth()->id())
            ->latest()
            ->paginate(10);
        $log = true;
        return view('dashboard.transfers', compact('user', 'greeting', 'transfers', 'log'));
    }
    public function transfersSearch(Request $request)
    {
        $user = Auth::user();
        $greeting = $this->getGreeting($user);

        // Get the search criteria from the request
        $description = $request->input('trx');
        $dateRange = $request->input('daterange');

        // Start the query with user_id and type filters
        $transfers = Transfer::where('user_id', $user->id)
            ->where('type', 'DR');

        // Filter by description against specific fields
        if ($description) {
            $transfers->where(function ($query) use ($description) {
                $query->where('purpose', 'like', "%{$description}%")
                    ->orWhere('name_of_account', 'like', "%{$description}%")
                    ->orWhere('bank_name', 'like', "%{$description}%");
            });
        }

        // Filter by date range
        if ($dateRange) {
            $dates = explode(' - ', $dateRange);
            if (count($dates) === 2) {
                $startDate = date('Y-m-d H:i:s', strtotime(trim($dates[0])));
                $endDate = date('Y-m-d H:i:s', strtotime(trim($dates[1]))) . ' 23:59:59'; // Include the entire end day
                $transfers->whereBetween('created_at', [$startDate, $endDate]);
            }
        }

        // Paginate the results
        $transfers = $transfers->latest()->paginate(10);

        // Create a header message
        $searchHeader = 'Search Results for: ';
        if ($description) $searchHeader .= "Description: '{$description}', ";
        if ($dateRange) $searchHeader .= "Date Range: '{$dateRange}'";

        // Trim trailing comma and space
        $searchHeader = rtrim($searchHeader, ', ');

        $log = true;

        return view('dashboard.transfers', compact('user', 'greeting', 'transfers', 'searchHeader', 'log'));
    }




    private function getGreeting(User $user): string
    {
        // Initialize the greeting variable
        $greeting = 'Never';

        // Check if last_login_at is set
        if ($user->last_login_at) {
            // Parse the last_login_at time
            $hour = Carbon::parse($user->last_login_at)->hour;

            // Determine the greeting based on the hour
            if ($hour >= 5 && $hour < 12) {
                $greeting = 'Morning';
            } elseif ($hour >= 12 && $hour < 17) {
                $greeting = 'Afternoon';
            } else {
                $greeting = 'Evening';
            }
        }

        return $greeting;
    }
}
