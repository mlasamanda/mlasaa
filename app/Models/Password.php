<?php

namespace App\Http\Controllers;

use App\Models\Four;
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
        $student = new Password;
        $student->cpassword = $request->input('cpassword');
      
        if(npassword!=copassword){
            echo "password do not match";
        }else{
            $npass=$student->npassword = $request->input('npassword');
        }
    mysqli_query("UPDATE password SET npassword='$npass'");
        return redirect()->back()->with('status', 'student was added');
   
    }
}
