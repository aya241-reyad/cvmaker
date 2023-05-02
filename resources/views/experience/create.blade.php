@extends('layouts.app')

@section('content')
<div class="container">

<h2>Work Details</h2>
<div >


<form action="/experiences" method="POST">
    @csrf

    <input type="text" name="job_title" placeholder="JobTitle">
    <input type="text" name="employer" placeholder="Employer">
    <input type="text" name="city" placeholder="city">
    <input type="text" name="state" placeholder="state">
    <input type="date" name="start_date" >
    <input type="date" name="end_date" >

    <input type="submit" value="Save Experience">
</form>
</div>
</div>








@endsection