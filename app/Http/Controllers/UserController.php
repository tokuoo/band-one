<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show(User $user)
    {
        return view('profile/partials/show')->with(['user' => $user]);
    }
}
