<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Vacance;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class VacanceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::user();

        // Roles that can see all requests
        $allAccessRoles = ['admin', 'ceo', 'administrative'];

        if (in_array($user->role, $allAccessRoles)) {
            $vacances = Vacance::all();
        } else {
            $vacances = Vacance::where('identification_number', $user->id)->get();
        }

        return view('holidays.index', compact('vacances'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('holidays.addconge', compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'holiday_type'               => 'required|string|max:255',
            'start_date'                 => 'required|date',
            'end_date'                   => 'required|date|after_or_equal:start_date',
            'days_number'                => 'required|integer|min:1',
            'call_number'                => 'nullable|string|max:255',
            'user_trust_data_user'       => 'boolean',
            'managerial_review'          => 'nullable|string',
            'replacer_id'                => 'nullable|exists:users,id',
            'admin_trust_data'           => 'boolean',
            'entitlements'               => 'nullable|string',
            'total_entitlements'         => 'nullable|string',
            'requested_days'             => 'nullable|integer',
            'remaining'                  => 'nullable|string',
            'administration_trust_data'  => 'boolean',
            'ceo_auth'                   => 'nullable|string',
            'status'                     => 'required|in:pending,approved,rejected',
        ]);

        // Set the employee reference
        $validated['identification_number'] = Auth::id();

        Vacance::create($validated);

        return redirect()->route('holidays.index')
                         ->with('success', 'Vacation request created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Vacance $vacance)
    {
        return view('holidays.show', compact('vacance'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Vacance $vacance)
    {
        $role = Auth::user()->role;

        return view('holidays.editconge', compact('vacance', 'role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Vacance $vacance)
    {
        $role = Auth::user()->role;

        if ($role === 'employee') {
            $vacance->update($request->only([
                'holiday_type', 'start_date', 'end_date', 'days_number', 'call_number',
                'user_trust_data_user', 'replacer_id'
            ]));
        }

        if ($role === 'administration') {
            $vacance->update($request->only([
                'managerial_review', 'admin_trust_data',
                'Entitlements', 'total_entitlements', 'requested_days', 'remaining', 'administration_trust_data'
            ]));
        }

        if ($role === 'ceo') {
            $vacance->update($request->only([
                'ceo_auth', 'status'
            ]));
        }

        return redirect()->route('vacances.index')->with('success', 'Vacation request updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Vacance $vacance)
    {
        $vacance->delete();

        return redirect()->route('vacances.index')->with('success', 'Vacation request deleted successfully.');
    }
}
