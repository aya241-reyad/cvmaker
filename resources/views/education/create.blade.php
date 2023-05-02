@extends('layouts.app')

@section('content')
<div class="container">

<h2>Education Details</h2>
<div >

<form action="/education" method="POST">
    @csrf

    <input type="text" name="school_name" placeholder="SchoolName">
    <input type="text" name="school_location" placeholder="SchoolLocation">
    <input type="text" name="degree" placeholder="Degree">
    <input type="text" name="field_of_study" placeholder="FieldOfStudy">
    <input type="date" name="graduation_start_date" >
    <input type="date" name="graduation_end_date" >

    <input type="submit" value="Save Education">
</form>
</div>
</div>








@endsection