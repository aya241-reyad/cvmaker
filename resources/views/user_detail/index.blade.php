@extends('layouts.app')

@section('content')

<div class="container">

<h2>User Detail</h2>



<div class="card">
<div class="card-body">
    <h4 class="card-title">Name :{{$details->fullname}} , Email: {{$details->email}} , Phone:{{$details->phone}}</h4>
    <a class="btn btn-sm btn-primary" href="{{ url('user-detail/' . $details->id) }}" role="button">Edit</a>
    <form action="{{ url('user-detail/' . $details->id) }}" class="mt-2" style="display: inline"  method="POST">
    @csrf
    @method('DELETE')
    <input type="submit" value="delete" class="btn btn-sm btn-danger">
    
    
    </form>
</div>
</div>




<a class="btn btn-primary mt-3" href="{{route('education.create')}}" role="button">Education</a>





</div>






@endsection