@extends('layouts.master')


@section('title')

Edit-Registered Travel locations

@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4> Edit travel location details: </h4> 

</div>
<div class="card-body">
<div class="row">
<div class="col-md-6">
<form action="/role-psregister-update/{{ $places->id}}" method="POST">
{{ csrf_field() }}
{{method_field('PUT') }}
<div class="form-group">

          <label >Continent:</label>
          <select name="continent" class="form-control">
    <option value="Africa">Africa</option>
    <option value="N.America">N.America</option>
    <option value="Europe">Europe</option>
    <option value="Asia">Asia</option>
    </select>
    </div>

    <div class="form-group">
    <label>Country</label>
    <input type="text" value="{{$places->country}}" class="form-control" name="country">
    </div>
   
    <div class="form-group">
    <label>City</label>
    <input type="text" value="{{$places->city}}" class="form-control" name="city">
    </div>

    <div class="form-group">
    <label>Currency</label>
    <input type="text" value="{{$places->currency}}" class="form-control" name="currency">
    </div>


<!--
    <div class="form-group">
    <label>Give Role</label>
    <select name="usertype" class="form-control">
    <option value="admin">Admin</option>
    <option value="sprovider">Service Provider</option>
    <option value="traveller">Traveller</option>
    <option value="NULL">NULL</option>
    </select>
    </div>
  -->
  <button type="submit" class="btn btn-success">Update</button>
  <a href="/places" class="btn btn-danger">Cancel</a>
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