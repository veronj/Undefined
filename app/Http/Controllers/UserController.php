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

    public function move($x_position, $y_position)
    {
        $user = User::first();
        $user->x_position = $x_position;
        $user->y_position = $y_position;
        $user->save();
        return redirect()->route('userView');
    }
}
