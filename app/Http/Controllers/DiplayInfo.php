<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DiplayInfo extends Controller
{
    public function display(Person $students){
        return view('user.persondetails')->with('students', $students);
}
}