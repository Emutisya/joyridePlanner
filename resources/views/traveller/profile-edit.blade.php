<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>User Profile-Edit||Joyride Planner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
</head>

<div class="container">
<div class="row">
<div class="col-md-12">
<div class="card">
<div class="card-header">
<h4> Edit details for User ID: {{Auth::user()->id}} || {{Auth::user()->name}}</h4> 

</div>
<div class="card-body">
<div class="row">
<div class="col-md-6">
<form action="/role-register-update/{{Auth::user()->id}}" method="POST">
{{ csrf_field() }}
{{method_field('PUT') }}
<div class="form-group">
    <label>Name</label>
    <input type="text" value="{{$users->name}}" class="form-control" name="name">
    </div>

    <div class="form-group">
    <label>Phone Number</label>
    <input type="text" value="{{$users->phone}}" class="form-control" name="phone">
    </div>
   
    <div class="form-group">
    <label>Email Address</label>
    <input type="text" value="{{$users->email}}" class="form-control" name="email">
    </div>

<!--
    <div class="form-group">
    <label>Give Role</label>
    <select name="usertype" class="form-control">
    <option value="Admin">Admin</option>
    <option value="sprovider">Service Provider</option>
    <option value="Traveller">Traveller</option>
    <option value="NULL">NULL</option>
    </select>
    </div>
  -->
  <button type="submit" class="btn btn-success">Update</button>
  <a href="/profile" class="btn btn-danger">Cancel</a>
</form>

</div>
</div>
</div>
</div>
</div>
</div>
</div>
