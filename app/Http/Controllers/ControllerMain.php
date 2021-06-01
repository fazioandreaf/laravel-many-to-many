<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControllerMain extends Controller
{
    public function home(){
        return view('pages.home');
    }
}
