@extends('layouts.app')

@section('content')

<div class="container">

<h2>Skill summary</h2>

@foreach($skills as $e)

<div class="card">
<div class="card-body">
    <h4 class="card-title">{{$e->name}} ({{$e->rating}})</h4>
    <a class="btn btn-sm btn-primary" href="{{route('skills.edit',$e)}}" role="button">Edit</a>
    <form action="{{route('skills.destroy',$e)}}" class="mt-2" style="display: inline"  method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete" class="btn btn-sm btn-danger">
    
    
    </form>
</div>
</div>


@endforeach

<a class="btn btn-primary mt-3" href="{{route('skills.create')}}" role="button">Add Another Skill</a>





</div>






@endsection