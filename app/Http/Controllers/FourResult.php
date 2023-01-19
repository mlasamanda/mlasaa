<?php

namespace App\Http\Controllers;
use App\models\Four;
use Illuminate\Http\Request;

class FourResult extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students= Four::orderBy('id','asc')->paginate(5);
        return view('four.index', compact('students',));
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
    $students=Four::find($id);
    return view('four.show')->with("students",$students);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students = Four::find($id);
        return view('four.edit')->with('student', $students);
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
            'fournumber' => 'required',
            'fourschool' => 'required',
           
        ]);
        $student = Four::find($id);
        $student->fournumber = $request->fournumber;
        $student->fourschool = $request->fourschool;
        $student->update();
        return redirect()->route('four.index')
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
        $company=four::find($id);
        $company->delete();
            return redirect()->route('four.index')
                ->with('success','Company has been deleted successfully');
    }
}
