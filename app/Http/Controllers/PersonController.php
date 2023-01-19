<?php
namespace App\Http\Controllers;
use App\Models\Person;
use Illuminate\Http\Request;
class PersonController extends Controller
{

    public function person(){
        return view("user.personalinfo");

    }
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'fname' => ['required', 'string', 'max:255'],
            'lname' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'nation' => ['required', 'string', 'max:255'],
            'dob' => ['required', 'string', 'max:255'],
            'mobile' => ['required', 'string', 'max:255'],

        ]);
    }
    public function store(Request $request){
        $student = new Person();
        $student->fname = $request->input('fname');
        $student->lname = $request->input('lname');
        $student->gender = $request->input('gender');
        $student->nation = $request->input('nation');
        $student->dob = $request->input('dob');
        $student->mobile = $request->input('mobile');
        $student->save();
        return redirect() ->route('formFour')->with('status','student was added');
    }
}
