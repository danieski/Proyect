
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
{{-- This is the user Panel --}}
<section class="vh-100 gradient-custom">
  <div class="container py-1 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
              <div class="mb-md-5 mt-md-5 pb-5">
      <h5 class="card-title">User Panel</h5>
      <p class="card-text">Hello {{ auth()->user()->name }}</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>
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
