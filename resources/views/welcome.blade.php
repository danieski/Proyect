@extends('layouts.app')
@section('content')
@if (auth()->check())
<div class="d-flex justify-content-center">
<form action="{{ url("/") }}" method="POST">
    @csrf
    <input type="text"  name="body" placeholder="Post Something">
    <input type="submit"  class="btn btn-success" value="Post">
</form>
</div>    
@else
    
@endif
<table>
@foreach ($Posts as $Post )
<tr>
 <td>{{$Post->body}}</td>
 <td>{{$Post->created_at}}</td>
</tr>
  
@endforeach
</table>
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<link href="/css/main.css" rel="stylesheet">
<div class="social-feed-box">

    <div class="pull-right social-action dropdown">
        <button data-toggle="dropdown" class="dropdown-toggle btn-white">
            <i class="fa fa-angle-down"></i>
        </button>
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
                Andrew Williams
            </a>
            <small class="text-muted">Today 4:21 pm - 12.06.2014</small>
        </div>
    </div>
    <div class="social-body">
        <p>
            Many desktop publishing packages and web page editors now use Lorem Ipsum as their
            default model text, and a search for 'lorem ipsum' will uncover many web sites still
            in their infancy. Packages and web page editors now use Lorem Ipsum as their
            default model text.
        </p>

        <div class="btn-group">
            <button class="btn btn-white btn-xs"><i class="fa fa-thumbs-up"></i> Like this!</button>
            <button class="btn btn-white btn-xs"><i class="fa fa-comments"></i> Comment</button>
            <button class="btn btn-white btn-xs"><i class="fa fa-share"></i> Share</button>
        </div>
    </div>
    <div class="social-footer">
        <div class="social-comment">
            <a href="" class="pull-left">
                <img alt="image" src="https://bootdey.com/img/Content/avatar/avatar1.png">
            </a>
            <div class="media-body">
                <a href="#">
                    Andrew Williams
                </a>
                Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words.
                <br>
                <a href="#" class="small"><i class="fa fa-thumbs-up"></i> 26 Like this!</a> -
                <small class="text-muted">12.06.2014</small>
            </div>
        </div>
@endsection