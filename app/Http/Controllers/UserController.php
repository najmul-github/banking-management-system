<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {        
        $user = auth()->user();
        $user = User::find($user->id);

        return view('users.index', compact('user'));
    }

    public function createUser(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'account_type' => 'required|in:Individual,Business',
            // Add validation rules for other fields like email and password.
        ]);

        $user = User::create([
            'name' => $request->input('name'),
            'account_type' => $request->input('account_type'),
            // Add other user fields here.
        ]);
        return redirect('/dashboard')->with('success', 'User created successfully');
    }
}
