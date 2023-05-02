@extends('layouts.app')

@section('content')
<div class="container">

<h2> Edit Education</h2>
<div>

    <form action="{{ url('education/' . $education->id) }}" method="POST">
    @csrf
@method('PUT')
    <input type="text" name="school_name" placeholder="SchoolName" value="{{$education->school_name}}">
    <input type="text" name="school_location" placeholder="SchoolLocation" value="{{$education->school_location}}">
    <input type="text" name="degree" placeholder="Degree" value="{{$education->degree}}">
    <input type="text" name="field_of_study" placeholder="FieldOfStudy" value="{{$education->field_of_study}}">
    <input type="date" name="graduation_start_date" value="{{$education->graduation_start_date}}" >
    <input type="date" name="graduation_end_date" value="{{$education->graduation_end_date}}">

    <input type="submit" value="Save Education">
</form>
</div>
</div>








@endsection