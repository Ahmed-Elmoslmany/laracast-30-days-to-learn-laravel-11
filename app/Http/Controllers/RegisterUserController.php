<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;



class RegisterUserController extends Controller
{
    //
    public function create()
    {
        return view("auth.register");
    }

    public function store(Request $request)
    {
        $attributes = request()->validate([
            "first_name" => ["required", "min:3", "max:25"],
            "last_name" => ["required", "min:3", "max:25"],
            "email" => ["required", "email"],
            "password" => ["required", "min:6", "confirmed"],
        ]);

        $user = User::create($attributes);

        Auth::login($user);

       return redirect("/jobs");
    }
}
