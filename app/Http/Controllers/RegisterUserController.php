<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\File;

class RegisterUserController extends Controller
{
    public function create(){

        return view('auth.register');
    }
    public function store(Request $request)
    {
        $userAttributes=$request->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users'],
            'password' => ['required','confirmed','min:6'],
        ]);
        $employerAttributes=$request->validate([
            'employer' => ['required'],
            'logo' => ['required',File::image()->max('2 MB')],
        ]);

        $user = User::create($userAttributes);

        $logoPath=$request->file('logo')->store('logos','public');
        $user->employer()->create([
            'name'=>$employerAttributes['employer'],
            'logo'=>$logoPath,
        ]);

        Auth::login($user);

        return redirect(route('home'));
    }
}
