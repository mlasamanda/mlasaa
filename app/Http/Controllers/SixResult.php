<?php

namespace App\Http\Controllers;
use App\models\Six;
use Illuminate\Http\Request;

class SixResult extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Six::orderBy('id','asc')->paginate(5);
        return view('six.index', compact('students',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
$students=Six::find($id);
return view('six.show')->with('students',$students);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students =Six::find($id);
        return view('six.edit')->with('student', $students);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'sixnumber' => 'required',
            'sixschool' => 'required',
           
        ]);
        $student = Six::find($id);
        $student->sixnumber = $request->sixnumber;
        $student->sixschool = $request->sixschool;
        $student->update();
        return redirect()->route('six.index')
            ->with('success','Details Has Been updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $company=Six::find($id);
        $company->delete();
            return redirect()->route('six.index')
                ->with('success','Company has been deleted successfully');
    }
}
