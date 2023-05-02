<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;

class EducationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    $education=auth()->user()->education;
    return view('education.index',compact('education'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('education.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
        'school_name'=>'required',
        'school_location'=>'required',
        'degree'=>'required',
        'graduation_start_date'=>'required',
        'graduation_end_date'=>'required'
        ]);
        // $education=new Education;
        // $education->school_name=$request->school_name;
        // $education->school_location=$request->school_location;
        // $education->degree=$request->degree;
        // $education->field_of_study=$request->field_of_study;
        // $education->graduation_start_date=$request->graduation_start_date;
        // $education->graduation_end_date=$request->graduation_end_date;
        // $education->save();
        auth()->user()->education()->create($request->all());
        return redirect()->route('education.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Education $education)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Education $education)
    {
        return view('education.edit',compact('education'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Education $education)
    {
        $request->validate([
        'school_name'=>'required',
        'school_location'=>'required',
        'degree'=>'required',
        'graduation_start_date'=>'required',
        'graduation_end_date'=>'required'
        ]);

        $education->update($request->all());
        return redirect()->route('education.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Education $education)
    {
        $education->delete();
        return back();
    }
}
