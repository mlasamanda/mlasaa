<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Four;

class FourController extends Controller
{

    public function four()
    {
        return view("user.four");

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
            'fournumber' => ['required', 'string', 'max:255'],
            'fourschool' => ['required', 'string', 'max:255'],

        ]);
    }

    public function store(Request $request)
    {
        $student = new Four;
        $student->fournumber = $request->input('fournumber');
        $student->fourschool = $request->input('fourschool');
        $student->save();
        return redirect()->route('formSix')->with('status', 'student was added');
    }
}
