@extends('layouts.app')

@section('content')
<div class="container">

<h2> Edit Work Details</h2>
<div >
    
<form action="{{ url('experiences/' . $experience->id) }}" method="POST">
    @csrf
@method('PUT')
    <input type="text" name="job_title" placeholder="JobTitle" value="{{$experience->job_title}}">
    <input type="text" name="employer" placeholder="Employer" value="{{$experience->employer}}">
    <input type="text" name="city" placeholder="city" value="{{$experience->city}}">
    <input type="text" name="state" placeholder="state" value="{{$experience->state}}">
    <input type="date" name="start_date" value="{{$experience->start_date}}" >
    <input type="date" name="end_date" value="{{$experience->end_date}}">

    <input type="submit" value="Save Experience">
</form>
</div>
</div>








@endsection