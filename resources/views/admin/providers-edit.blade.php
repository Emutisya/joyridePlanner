@extends('layouts.master')


@section('title')

Edit-Registered Service Providers

@endsection

@section('content')
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4> Edit details for registered service provider </h4> 

</div>
<div class="card-body">
<div class="row">
<div class="col-md-6">
<form action="/role-pregister-update/{{ $providers->id}}" method="POST">
{{ csrf_field() }}
{{method_field('PUT') }}
<div class="form-group">

    <label>Name</label>
    <input type="text" value="{{$providers->OwnerN}}" class="form-control" name="OwnerN">
    </div>

    <div class="form-group">
    <label>Phone Number</label>
    <input type="text" value="{{$providers->Phone}}" class="form-control" name="Phone">
    </div>
   
    <div class="form-group">
    <label>Service Name</label>
    <input type="text" value="{{$providers->ServiceN}}" class="form-control" name="ServiceN">
    </div>

  <div class="form-group">
    <label>Description</label>
    <input type="text" value="{{$providers->Description}}" class="form-control" name="Description">
    </div>

  <button type="submit" class="btn btn-success">Update</button>
  <a href="/providers" class="btn btn-danger">Cancel</a>
  
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