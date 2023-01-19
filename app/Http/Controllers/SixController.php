<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Six;
class SixController extends Controller
{

    public function six(){
        return view("user.six");

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
            'sixnumber' => ['required', 'string', 'max:255'],
            'sixschool' => ['required', 'string', 'max:255'],

        ]);
    }
    public function store(Request $request){
        $student = new Six;
        $student->sixnumber = $request->input('sixnumber');
        $student->sixschool = $request->input('sixschool');
        $student->save();
        return redirect() ->route('apply.index')->with('status','student was added');
    }
}
