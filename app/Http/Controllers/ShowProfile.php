<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ShowProfile extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke($id)
    {
        //
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
