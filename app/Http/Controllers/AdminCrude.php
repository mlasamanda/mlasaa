<?php
namespace App\Http\Controllers;
use App\Models\Person;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdminCrude extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Person::orderBy('id','asc')->paginate(5);
        return view('admin.index', compact('students',));

    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'application' => 'required',
            'role'=>'required',
      
        ]);
        $student = new user();
        $student->email = $request->email;
        $student->role = $request->role;
        $student->application = $request->application;
        $student->password= Hash::make('12345');
        $input = $request->all();
         $student->save();
        return redirect()->route('admin.index')
            ->with('success','New User has been created successfully.');
    }
     
    
    public function show($id)
    {
        $students=Person::find($id);
        return view('admin.show')->with('students', $students);
    }
   

    public function edit($id)
    {
        $students = Person::find($id);
        return view('admin.edit')->with('student', $students);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\personinfo $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'gender' => 'required',
            'nation' => 'required',
            'dob' => 'required',
            'mobile' => 'required',
        ]);
        $student = Person::find($id);
        $student->fname = $request->fname;
        $student->lname = $request->lname;
        $student->gender = $request->gender;
        $student->nation = $request->nation;
        $student->dob= $request->dob;
        $student->mobile= $request->mobile;
        $student->update();
        return redirect()->route('admin.index')
            ->with('success','Details Has Been updated successfully');
    }
   
    public function destroy($id)
    {
    $company=person::find($id);
    $company->delete();
        return redirect()->route('admin.index')
            ->with('success','Company has been deleted successfully');
    }
}
