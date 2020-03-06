<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class UserController extends Controller
{
    //

    /**
     * 显示制定详情
     */
    public function show($id)
    {
        Redis::set('user:profile', 23123);
        $user = Redis::get('user:profile');
        dd($user);
        // logging
        Log::info('showing user profile for user : ' . $id);
        Log::channel('slack')->info('Something happened!');
        echo url()->current();
        echo url()->full();
        return view('user.profile', ['user' => User::findOrFail($id)]);
    }
}
