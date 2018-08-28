<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionsController extends Controller
{
    /**
     *
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);
    }


    /**
     *
     */
    public function create()
    {
        return view('login');
    }


    /**
     *
     */
    public function store()
    {
        //Validating
        $this->validate(request(),[
            'email' => 'required|email',
            'password' => 'required'
        ]);

        //Attempt to Authenticate the user
        if(!auth()->attempt(request(['email', 'password'])))
        {
            //If not, redirect back
            return back()->withErrors([
                'message' => 'Please check your credentials and try again.'
            ]);
        }else{
            //Redirect to homepage
            return redirect('/dashboard');
        }
    }


    /**
     *
     */
    public function destroy()
    {
        auth()->logout();

        //return redirect()->userHome();
        return redirect('/signin');
    }

}
