<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Employee;

class ControllerMain extends Controller
{
    public function home(){
        $employee=Employee::all();
        // dd($employee);
        return view('pages.home',compact('employee'));
    }
}
