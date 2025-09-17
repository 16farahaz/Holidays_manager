<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;


class LoginController extends Controller
{

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('account-pages.signin');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $credentials = $request->only('email', 'password');

        $rememberMe = $request->rememberMe ? true : false;
   /*       // Debug
    dd([
        'credentials' => $credentials,
        'rememberMe' => $rememberMe
    ]); */

        if (Auth::attempt($credentials, $rememberMe)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }
        



        return back()->withErrors([
            'message' => 'The provided credentials do not match our records.',
        ])->withInput($request->only('email'));
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        Auth::logout(); // Log the user out

        $request->session()->invalidate();// Invalidate the session

        $request->session()->regenerateToken(); // Regenerate the CSRF token

        return redirect('/signin'); // Redirect to the signin page
    }
}
