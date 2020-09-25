@extends('layouts.master')


@section('title')

Edit-Registered Users

@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4> Edit details for registered User </h4> 

</div>
<div class="card-body">
<div class="row">
<div class="col-md-6">
<form action="/role-register-update/{{ $users->id}}" method="POST">
{{ csrf_field() }}
{{method_field('PUT') }}
<div class="form-group">
    <label>Name</label>
    <input type="text" value="{{$users->name}}" class="form-control" name="name">
    </div>
<!--
    <div class="form-group">
    <label>Phone Number</label>
    <input type="text" value="{{$users->phone}}" class="form-control" name="phone">
    </div>
   
    <div class="form-group">
    <label>Email Address</label>
    <input type="text" value="{{$users->email}}" class="form-control" name="email">
    </div>

-->
    <div class="form-group">
    <label>Give Role</label>
    <select name="usertype" class="form-control">
    <option value="Admin">Admin</option>
    <option value="sprovider">Service Provider</option>
    <option value="Traveller">Traveller</option>
    <option value="NULL">NULL</option>
    </select>
    </div>
  
  <button type="submit" class="btn btn-success">Update</button>
  <a href="/role-register" class="btn btn-danger">Cancel</a>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>

@endsection


@section('scripts')

@endsection