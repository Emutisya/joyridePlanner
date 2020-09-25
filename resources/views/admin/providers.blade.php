@extends('layouts.master')


@section('title')

Service providers || JOYRIDE PLANNER

@endsection

@section('content')


<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enter Service Provider Details</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <form action="/save-providers" method="POST">

{{csrf_field() }}


      <div class="modal-body">
        
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Owner Name:</label>
            <input type="text" class="form-control" name="OwnerN" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Phone Number:</label>
            <input type="text" name="Phone" class="form-control" id="recipient-name">
          </div>

          <div class="form-group">
            <label for="recipient-name" class="col-form-label">Service Name:</label>
            <input type="text" name="ServiceN" class="form-control" id="recipient-name">
          </div>
          <div class="form-group">
            <label for="message-text" class="col-form-label">Description:</label>
            <textarea name="Description" class="form-control" id="message-text"></textarea>
          </div>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Add S.Provider</button>
      </div>
      </form>
    </div>
  </div>
</div>



<div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h4 class="card-title"> Service Providers
                
                
                
                
                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#exampleModal">ADD</button>
                @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
                </h4>
              </div>
              <div class="card-body">
                <div class="table-responsive">
                <table class="table">
                    <thead class="text-primary">
                        <th>ID</th>
                        <th>Owner Name</th>
                        <th>Phone Number</th>
                        <th>Service Name</th>
                        <th>Description</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
</thead>
<tbody>

@foreach ($providers as $data)


    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->OwnerN }}</td>
        <td>{{$data->Phone }}</td>
        <td>{{$data->ServiceN }}</td>
        <td>{{$data->Description }}</td>
     

        <td>
        <a href ="/role-editp/{{$data->id}}" class="btn btn-success">EDIT</a>
        </td>

        <td>
        <form action="/role-deletep/{{$data->id}}" method="post">
       {{ csrf_field() }}
       {{ method_field('DELETE')}}
        <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
</tr>
@endforeach
</tbody>
</table>
</div>
</div>
</div>
</div>
</div>
@endsection


@section('scripts')

@endsection