@extends('layouts.app')

@section('content')
<div class="container">

<h2>tell us something about you</h2>
<div >

@if(session()->has('errors'))

<div class="alert alert-danger" role="alert">

@foreach ($errors->all() as $error)
    <p>{{$error}}</p>
@endforeach


@endif

</div>




<form action="/user-detail" method="POST">
    @csrf

   <div class="form-group">
    <label for="exampleInputEmail1">Full Name</label>
    <input type="text"  name="fullname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter fullname">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Email">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Phone</label>
    <input type="text" name="phone" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Phone">
  </div>

  <div class="form-group">
    <label for="exampleInputEmail1">Address</label>
    <input type="text" name="address" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="address">
  </div>
   
    
    <div class="form-group">
        <label for="exampleInputEmail1">Summary</label>
    <textarea name="summary"  class="form-control" id="" cols="30" rows="4"></textarea>
    </div>

    <input type="submit" class="btn btn-primary mt-3" value="Save Details">
</form>
</div>
</div>








@endsection