<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<head>
  <title>User Profile||Joyride Planner</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
</head>


<hr>
<div class="container bootstrap snippet">
    <div class="row">
  		<div class="col-sm-10"><h1>User name</h1></div>
    	<div class="col-sm-2"><a href="#" class="pull-right"><img title="profile image" class="img-circle img-responsive" src="img/logo.png"></a></div>
    </div>
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
              

      <div class="text-center">
        <img src="img/man.png" class="avatar img-circle img-thumbnail" alt="Your profile image"><br>

       
<form action="/save-profile" method="POST">
{{csrf_field() }}



<div class="form-group">
       
            <input type="file" name="picture" class="text-center center-block file-upload" id="recipient-name" >
          </div>
        
      </div>

      </form>



        <h6>Change or Upload a photo...</h6>
       
             
        </div><!--/col-3-->
    	<div class="col-sm-9">
            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="/profile">User Information</a></li>
                <li><a data-toggle="tab" href="#messages">More Details</a></li>
                <li><a data-toggle="tab" href="#settings">Share Experiences </a></li>
              </ul>

              
          <div class="tab-content">
            <div class="tab-pane active" id="profile">
                <hr>
                  
                <div class="row">
          <div class="col-md-12">
          
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> User Profile for : {{Auth::user()->name}}</h4>


                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
              </div>
              <div class="card-body">
              <ul class="list-group">
              

  <li class="list-group-item">User ID : {{Auth::user()->id}}</li>
  <li class="list-group-item">User Name : {{Auth::user()->name}}</li>
  <li class="list-group-item">Phone : {{Auth::user()->phone}}</li>
  <li class="list-group-item">Usertype : {{Auth::user()->usertype}}</li>
  <li class="list-group-item">Email : {{Auth::user()->email}}</li>

</ul>

<a href="/role-edit/{{Auth::user()->id}}" class="btn btn-success">EDIT</a>


</div>
</div>
</div>
</div>



</div>
</div>

