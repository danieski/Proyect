
@extends("layouts.app")
@section("content")
<style>
.center {
  margin-left: auto;
  margin-right: auto;
}
td{
    padding-right:30px;
}
</style>
@if (auth()->user()->name == "admin")
<div class="d-flex justify-content-center">
<div class="col-sm-5 mb-2">
<div class="card text-center bg-success">
    <div class="card-header">
      Admin Panel
    </div>
    <div class="card-body">
      <h5 class="card-title">Users table</h5>
      <p class="card-text">Lets show the users table</p> 
    <table class="center">   
      <thead style="font-weight: bold">
        <tr>
            <td>Name</td>
            <td>Email</td>
            <td>Create At</td>
            <td>Delete</td>
        </tr> 
        </thead>
        @foreach ($Users as $User)

        <tr>
            <td>{{$User->name}}</td>
            <td>{{$User->email}}</td>
            <td>{{$User->created_at}}</td>
            <td><a href={{"delete/".$User->id }}>Delete</a></td>
        </tr>    
        @endforeach
    </table>
    </div>

  </div>
</div>
</div>
@elseif (auth()->check())
<div class="d-flex justify-content-center">
<div class="card border-success" style="max-width: 20rem;">
    <div class="card-header bg-transparent border-success">Header</div>
    <div class="card-body text-success">
      <h5 class="card-title">User Panel</h5>
      <p class="card-text">Hello {{ auth()->user()->name }}</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>
</div>
@else
<div class="card border-success" style="max-width: 20rem;">
    <div class="card-header bg-transparent border-success">Header</div>
    <div class="card-body text-success">
      <h5 class="card-title">Index</h5>
        <p class="card-text">Hello Guest</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>
@endif
@endsection
