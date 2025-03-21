<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard(){

        return \view('frontend.dashboard')->with(session('role'));
    }

    
}
