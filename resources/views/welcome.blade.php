@extends('layouts.app')
@section('content')
<script>
    $(document).ready(function() {
     setInterval(function() {
      $('#res').load('demo.blade.php');
     
     }, 5000);
    });
   </script>
@if (auth()->check())
{{-- Post if you are loged --}}
<div class="col-6 mx-auto">
<div class="card bg-dark text-white">
    <div class="card-body p-5 text-center">
<form action="{{ url("/") }}" method="POST">
    @csrf
    <input class= "form-control" type="text"  name="body" placeholder="Post Something">
    
    </div>
    <input type="submit"  class="btn btn-success" value="Post">
</form>
</div>
</div>
</div>    
@else
    
@endif
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="/css/main.css" rel="stylesheet">
{{-- Display the posts from the database --}}
@foreach ($Posts as $Post )
<div class="col-6 mx-auto">


<div class="social-feed-box">

    <div class="pull-right social-action dropdown">
       
        <ul class="dropdown-menu m-t-xs">
            <li><a href="#">Config</a></li>
        </ul>
    </div>
    <div class="social-avatar">
        <a href="" class="pull-left">
            <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
        </a>
        <div class="media-body">
            <a href="#">
                {{$Post->user->name}}
            </a>
            <small class="text-muted">{{$Post->created_at->diffForHumans() }}</small>
        </div>
    </div>
    <div class="social-body">
        <p>
            {{$Post->body}}
        </p>
{{-- Like button --}}
        <div class="btn-group">
            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
        </div>
    </div>
</div>
</div>
@endforeach
<div class="col-6 mx-auto">
{{ $Posts->links() }}
</div>



@endsection
