<?php

namespace App\Http\Controllers\Auth;

use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Hash;
use App\Providers\RouteServiceProvider;

class RegisterController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account-pages.signup');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
public function store(Request $request)
{
    $request->validate([
        'name' => 'required|min:3|max:255',
        'phone' => 'required|digits:8',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:7|max:255',
        'role' => 'required|in:simple_user,admin',
        'status' => 'required|in:active,not_active',
        'Title' => 'nullable|string|max:255',
    ]);

    $user = User::create([
        'name' => $request->name,
        'phone' => $request->phone,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'Title' => $request->Title,
        'status' => $request->status,
        'role' => $request->role,
    ]);

    // Redirect depending on route
    if ($request->is('addmember')) {
        return redirect()->route('users-management')->with('success', 'User added successfully!');
    }

    return redirect()->route('dashboard')->with('success', 'Account created successfully!');
}


}
