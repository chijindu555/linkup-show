<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\RedirectResponse;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function showUsers()
{
    // Fetch users from the database
    $users = User::all(); // Adjust this query as needed

    // Pass images to the backend view
    return view('backend.index', compact('users')); // Adjust view name as needed
}

public function destroy(Request $request, $id): RedirectResponse
{

    $user = User::findOrFail($id); // Find the user by the given ID

    if ($user) {
        $user->delete();  // Delete the user

        // If you're deleting the currently logged-in user, log them out
        if ($user->id === Auth::id()) {
            Auth::logout();
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }
    }

    return Redirect::to('/admin')->with('success', 'User deleted successfully.');
}
}

