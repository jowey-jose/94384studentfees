<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Student;
use App\Fees;

class ProjectController extends Controller
{
    //
    public function student(){
        return view('94384.student');
    }

    public function fees(){
        return view('94384.fees');
    }
}
