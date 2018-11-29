<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function index()
    {
        $user = User::first();
        $user->nearSectors = $user->getNearSectors();
       // dd($user->getNearSectors());

        return view('userView', compact('user'));
    }
}
