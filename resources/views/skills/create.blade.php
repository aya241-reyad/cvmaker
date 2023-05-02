@extends('layouts.app')

@section('content')
<div class="container">

<h2>Skill Details</h2>
<div >


<form action="/skills" method="POST">
    @csrf

    <input type="text" name="name" placeholder="Name">
    <input type="text" name="rating" placeholder="Rating">
    <input type="submit" value="Save skills">
</form>
<a class="btn btn-primary mt-3" href="{{route('skills.index')}}" role="button">Next</a>
</div>
</div>


@endsection