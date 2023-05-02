@extends('layouts.app')

@section('content')

<div class="container">

<h2>Education summary</h2>

@foreach($education as $e)

<div class="card">
<div class="card-body">
    <h4 class="card-title">{{$e->school_name}} {{$e->school_location}} ({{$e->graduation_start_date}} : {{$e->graduation_end_date}})</h4>
    <a class="btn btn-sm btn-primary" href="{{route('education.edit',$e)}}" role="button">Edit</a>
    <form action="{{route('education.destroy',$e)}}" class="mt-2" style="display: inline"  method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete" class="btn btn-sm btn-danger">
    
    
    </form>
</div>
</div>


@endforeach

<a class="btn btn-primary mt-3" href="{{route('education.create')}}" role="button">Add Another Education</a>
<a class="btn btn-primary mt-3" href="{{route('experiences.index')}}" role="button">Work History</a>


</div>









@endsection