<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\person;
class Revsubmission extends Controller
{
    public function rev($id){
        
        $students=Person::find($id);
        return view('user.persondetails',compact('students')) ;
    }
}
