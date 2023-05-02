<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $experience=auth()->user()->experience;
        return view ('experience.index',compact('experience'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('experience.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'job_title'=>'required',
        'employer'=>'required',
        'city'=>'required',
        'state'=>'required',
        'start_date'=>'required',
        'end_date'=>'required'
        ]);
        auth()->user()->experience()->create($request->all());
        return redirect()->route('experiences.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Experience $experience)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Experience $experience)
    {
       return view('experience.edit',compact('experience'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Experience $experience)
    {
    $request->validate([
        'job_title'=>'required',
        'employer'=>'required',
        'city'=>'required',
        'state'=>'required',
        'start_date'=>'required',
        'end_date'=>'required'
        ]);

        $experience->update($request->all());
        return redirect()->route('experience.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Experience $experience)
    {
        $experience->delete();
        return back();
    }
}
