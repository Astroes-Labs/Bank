<?php

namespace App\Http\Controllers;

use App\Models\Transfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TransferController extends Controller
{
    public function store(Request $request)
    {
        // Validate the request
        $validated = $request->validate([
            'amount' => 'required|numeric|min:10|max:10000',
            'name_of_account' => 'required|string|max:255',
            'account_number' => 'required|string|max:255',
            'bank_name' => 'required|string|max:255',
            'swift_code' => 'nullable|string|max:255',
            'source_of_funds' => 'required|string|max:255',
            'purpose' => 'nullable|string',
        ]);

        // Get the currently authenticated user
        $user = Auth::user();

        // Check if the user has sufficient balance
        if ($user->balance >= $validated['amount']) {
            // Create the transfer record
            $transfer = Transfer::create(array_merge($validated, [
                'user_id' => $user->id,
                'type' => 'DR', // Link to the authenticated user
            ]));

            // Deduct the amount from the user's balance
            $user->balance -= $validated['amount'];
            $user->save(); // Save the updated balance

            // Return a success response
            return response()->json(['success' => true, 'message' => 'Transfer successful!']);
        } else {
            // Return an error response if insufficient funds
            return response()->json(['success' => false, 'message' => 'Insufficient funds.'], 400);
        }
    }

    public function index()
    {
        $transfers = Transfer::where('user_id', auth()->id())->get(); // Fetch transfers for the authenticated user

        return view('dashboard.transfers', compact('transfers'));
    }


}
