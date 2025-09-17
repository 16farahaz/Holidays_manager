<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller

{
     // Show authenticated user profile
  public function show($id)
{
    $authUser = Auth::user(); //Auth is a facade for authentication services in Laravel and provides various methods to interact with the currently authenticated user.

    // If not admin and trying to view another profile → forbid
    if ($authUser->role !== 'admin' && $authUser->id != $id) {
        abort(403, 'Unauthorized');
    }

    $user = \App\Models\User::findOrFail($id);
    return view('account-pages.profile', compact('user'));
}



public function update(Request $request, $id = null)
{
    $authUser = Auth::user();

    // target user = self or selected by admin
    $user = $id ? User::findOrFail($id) : $authUser;

    // Only admin can update other users
    if ($id && $authUser->role !== 'admin') {
        abort(403, 'Unauthorized');
    }

    $request->validate([
        'name' => 'required|min:3|max:255',
        'email' => 'required|email|max:255|unique:users,email,' . $user->id,
        'password' => 'nullable|min:6',
        'phone' => 'nullable|numeric|digits:8',
        'role' => 'sometimes|required',
        'status' => 'sometimes|required',
        'title' => 'sometimes|required',

    ]);

    $data = $request->only(['name', 'email', 'phone', 'role','status', 'Title']);

    if ($request->filled('password')) {
        $data['password'] = bcrypt($request->password);
    }

    // Non-admins cannot change role/title
    if ($authUser->role !== 'admin') {
        unset($data['role'], $data['Title']);
    }

    $user->update($data);

    return back()->with('success', 'User updated successfully.');
}
 public function destroy($id)
{
    $authUser = Auth::user(); // currently logged-in user

    // Only admin can delete users
    if ($authUser->role !== 'admin') {
        return back()->with('error', "You are not authorized to delete users.");
    }

    $user = User::findOrFail($id);

    // Optional: prevent admin from deleting themselves
    if ($authUser->id === $user->id) {
        return back()->with('error', "You cannot delete yourself.");
    }

    $user->delete();

    return back()->with('success', 'User deleted successfully.');
}
}