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
@endsection