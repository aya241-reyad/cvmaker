<?php

namespace App\Http\Controllers;

use App\Models\UserDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $details=auth()->user()->details;
        return view('user_detail.index',compact('details'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('user_detail.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
        'fullname'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'summary'=>'required',
        ]);
        //UserDetail::create($request->all());
        $detail=new UserDetail;
        $detail->fullname=$request->fullname;
        $detail->email=$request->email;
        $detail->phone=$request->phone;
        $detail->address=$request->address;
        $detail->user_id=Auth::user()->id;
        $detail->save();
        return redirect()->route('education.create');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $details=UserDetail::find($id);
        return view('user_detail.edit',compact('details'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $details=UserDetail::find($id);
        $request->validate([
        'fullname'=>'required',
        'email'=>'required|email',
        'phone'=>'required',
        'summary'=>'required',
        ]);
        $details->update($request->all());
        return redirect()->route('user-detail.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $details=UserDetail::find($id);
        $details->delete();
        return back();
    }
}
