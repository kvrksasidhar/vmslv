<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

class RegistrationController extends Controller
{
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(request()->all());
        /* $user = new User;
        $user->name = 'John';
        $user->save(); */

        $user = User::where('email', '=', request('email'))->first();

        if($user===null){
            $user = User::create([
                    "name" => request('name'),
                    "email" => request('email'),
                    "mobile" => request('mobile'),
                    "password" => password_hash(request('password'), PASSWORD_DEFAULT),
                    "location" => request('location'),
                    "city" => request('city'),
                    "state" => request('state'),
                    "country" => request('country'),
                    "role" => 1,
                    "status" => 1
                ]);
                if($user->wasRecentlyCreated)
                {
                    auth()->login($user);   //Sign them in

                    return redirect('/userHome');  //Redirecting to their respective homepage
                }
        }else{
            return "User Already exists";
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
