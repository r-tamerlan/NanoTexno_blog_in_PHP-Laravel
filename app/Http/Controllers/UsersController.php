<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;

class UsersController extends Controller
{
    public function signin_form()
    {
        return view('users.signin');
    }

    public function registration_form()
    {
        return view('users.registr');
    }

    // POST
    public function signin()
    {

    }

    public function registration()
    {

        $user= User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'activation_key' => Str::random(60),
            'active' => 0,
        ]);

        auth()->login($user);
        return redirect()->route('homepage');

    }
}
