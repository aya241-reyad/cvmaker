@extends('layouts.app')

@section('content')
<div class="container">

<h2> Skills Details</h2>
<div >
    
<form action="{{ url('user-detail/' . $details->id) }}" method="POST">
    @csrf
@method('PUT')
<div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text"  name="fullname" value="{{$details->fullname}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter fullname">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" value="{{$details->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" value="{{$details->phone}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" value="{{$details->address}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="address">
  </div>
   
    
    <div class="form-group">
        <label for="exampleInputEmail1">Summary</label>
    <textarea name="summary"  class="form-control" id="" cols="30" rows="4">{{$details->summary}}</textarea>
    </div>
   

    <input type="submit" class="btn btn-primary mt-3" value="Save Details">
</form>
</div>
</div>


@endsection