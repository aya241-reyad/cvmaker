@extends('layouts.app')

@section('content')
<div class="container">

<h2> Skills Details</h2>
<div >
    
<form action="{{ url('skills/' . $skill->id) }}" method="POST">
    @csrf
@method('PUT')
    <input type="text" name="name" placeholder="Name" value="{{$skill->name}}">
    <input type="text" name="rating" placeholder="Rating" value="{{$skill->rating}}">
   

    <input type="submit" value="Save Experience">
</form>
</div>
</div>


@endsection