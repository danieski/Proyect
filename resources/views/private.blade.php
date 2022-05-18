
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
@if (auth()->guest())
<div class="d-flex justify-content-center">
<div class="card border-success" style="max-width: 20rem;">
    <div class="card-header bg-transparent border-success">Header</div>
    <div class="card-body text-success">
      <h5 class="card-title">Index</h5>
        <p class="card-text">Hello Guest</p>
    </div>
    <div class="card-footer bg-transparent border-success">Footer</div>
  </div>
</div>


@elseif (auth()->user()->name == "admin")
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
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center h-75">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card bg-dark text-white" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">

      <h5 class="card-title">User Panel</h5>
      <p class="card-text">Hello {{ auth()->user()->name }}</p>
      <p class="card-text"> This account has been created {{ auth()->user()->created_at->diffForHumans() }}</p>
      <p class="card-text">Your email is {{ auth()->user()->email }}</p>
      <p class="card-text">Your id is {{ auth()->user()->id }}</p>
      
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
          
        @csrf
        <a href="{{ route('logout') }}" class="btn btn-outline-light btn-lg px-5" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>

      </form>
      


    </div>

      
  </div>
  @endif
</div>
</div>
</div>
</div>
</div>
</div>
<a class="btn btn-primary btn-lg btn-block" href={{"delete/".auth()->user()->id }}>Delete</a>
<a class="btn btn-primary btn-lg btn-block" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
</div>

</section>


@endsection
