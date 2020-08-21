<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}
