<?php

namespace App\Http\Controllers;

use App\Models\Employer;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisteredUserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $userAttributes = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $employerAttributes = $request->validate([
            'employer_name' => ['required', 'string', 'max:255'],
            'employer_logo' => ['required', 'image', 'mimes:jpeg,png,jpg,gif,svg,webp'],
        ]);

        $logoPath = $request->employer_logo->store('logos');

        $user = User::create($userAttributes);
        $user->employer()->create([
            'name' => $employerAttributes['employer_name'],
            'logo' => $logoPath,
        ]);

        Auth::login($user);

        return redirect('/');
    }
}
