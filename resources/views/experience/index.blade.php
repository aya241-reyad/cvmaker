@extends('layouts.app')

@section('content')

<div class="container">

<h2>Work summary</h2>

@foreach($experience as $e)

<div class="card">
<div class="card-body">
    <h4 class="card-title">{{$e->job_title}} ({{$e->start_date}} : {{$e->end_date}})</h4>
    <ul>
        <li>{{$e->employer}}</li>
        <li>{{$e->city}}</li>
        <li>{{$e->state}}</li>
    </ul>
    <a class="btn btn-sm btn-primary" href="{{route('experiences.edit',$e)}}" role="button">Edit</a>
    <form action="{{route('experiences.destroy',$e)}}" class="mt-2" style="display: inline"  method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete" class="btn btn-sm btn-danger">
    
    
    </form>
</div>
</div>


@endforeach

<a class="btn btn-primary mt-3" href="{{route('education.create')}}" role="button">Add Another Education</a>
<a class="btn btn-primary mt-3" href="{{route('skills.index')}}" role="button">Skills</a>





</div>






@endsection