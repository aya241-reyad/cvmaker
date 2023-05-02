<?php

namespace App\Http\Controllers;

use App\Models\skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $skills=auth()->user()->skills;
        return view ('skills.index',compact('skills'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('skills.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
        'name'=>'required',
        'rating'=>'required',
        ]);
        auth()->user()->skills()->create($request->all());
        return redirect()->route('skills.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(skill $skill)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(skill $skill)
    {
         return view('skills.edit',compact('skill'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, skill $skill)
    {
    $request->validate([
        'name'=>'required',
        'rating'=>'required',
        ]);
        $skill->update($request->all());
        return redirect()->route('skills.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(skill $skill)
    {
        $skill->delete();
        return back();
    }
}
