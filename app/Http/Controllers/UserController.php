<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('laravel-examples.users-management', compact('users'));
    }
      // Show the edit form
    public function edit($id)
    {
        $user = User::findOrFail($id);
        return view('account-pages.edit', compact('user'));
    }

    
}
