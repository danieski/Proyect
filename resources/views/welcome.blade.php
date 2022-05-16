@extends('layouts.app')
@section('content')
@if (auth()->check())
<div class="col-6 mx-auto">
    <div class="w-50">
<form action="{{ url("/") }}" method="POST">
    @csrf
    <input type="text"  name="body" placeholder="Post Something">
    <input type="submit"  class="btn btn-success" value="Post">
</form>
    </div>
</div>    
@else
    
@endif
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="/css/main.css" rel="stylesheet">

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

        <div class="btn-group">
            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
        </div>
    </div>
</div>
</div>
@endforeach
<div class="col-6 mx-auto">
{{ $Posts->links() }}
</div>



@endsection
