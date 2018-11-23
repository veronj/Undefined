<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Sector;

class SectorController extends Controller
{
    public function index() {
        $sectors = Sector::all();
        return view('welcome', compact('sectors'));
    }
}
