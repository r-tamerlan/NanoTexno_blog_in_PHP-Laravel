<?php

namespace App\Http\Controllers;

use App\Mail\UserSignUpMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;

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
        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        if (auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
            request()->has('rememberMe')]) // attempt funksiyasi burda gelen email deyerini gedib data bazadan yoxlayir
            // ve varsa onuda gelen parolla yoxlayir
        ):
            request()->session()->regenerate(); //sessionu yenileyirik
            return redirect()->intended('/'); //bu komanda istifadeci eger giris teleb eden bir seifeye girerse
        // avtomatik olaraq onu giris sehifesine yonlendirir ki evvel giris etsin, girisden den sorada da evvel girmek
        // istediyi seyifeye yonlendirir. Eger bir xeta olarsada icinde yazdigimiz line yonlendirir
        else:
            $errors = ['email' => 'Incorrect entry'];
            return back()->withErrors($errors);
        endif;
    }


    public function registration()
    {
        $this->validate(request(), [
            'name' => 'required|min:5|max:60',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5|max:15'
        ]);

        $user = User::create([
            'name' => request('name'),
            'email' => request('email'),
            'password' => Hash::make(request('password')),
            'activation_key' => Str::random(60),
            'active' => 0,
            'remember_token' => 1
        ]);

        Mail::to(request('email'))->send(new UserSignUpMail($user));

        auth()->login($user);
        return redirect()->route('homepage')
            ->with("active_user_name", request('name'))
            ->with('message', 'Account have to activation')
            ->with('message_type', 'warning');

    }

    public function activation($activation_key)
    {
        $user = User::where('activation_key', $activation_key)->first();
        if (!is_null($user)) {
            $user->activation_key = null;
            $user->active = 1;
            $user->save();
            return redirect()->to('/')  // bu kod return redirect()->route('homepage'); ile eyni seydi. Ve burada with codu ile geden her sey Sessionda saxlanilir
            ->with('message', 'Activation Success')
                ->with('message_type', 'success');
        } else {
            return redirect()->to('/')
                ->with('message', 'User registration could not be activated')
                ->with('message_type', 'danger');
        }
    }

    public function exitaccount()
    {
        auth()->logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('homepage');

    }
}
