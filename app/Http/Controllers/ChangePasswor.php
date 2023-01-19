<?php

namespace App\Http\Controllers;

use App\Models\Password;
use Illuminate\Http\Request;

class FormFour extends Controller
{
    public function four(){
        return view('user.password');
    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'cpassword' => ['required', 'string', 'max:255'],
            'npassword' => ['required', 'string', 'max:255'],
            'copassword' => ['required', 'string', 'max:255'],

        ]);
    }

    public function store(Request $request)
    {
        $student = new Four;
        $student->fournumber = $request->input('cpassword');
      
        if(npassword!=copassword){
            echo "password do not match";
        }else{
            $student->fourschool = $request->input('npassword');
        }
        $student->save();
        return redirect()->back()->with('status', 'student was added');
   
    }
}
