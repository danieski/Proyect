@extends("layouts.app")
@section("content")
<h1>Subscription</h1>
<input id="card-holder-name" type="text">
 
<!-- Stripe Elements Placeholder -->
<div id="card-element"></div>
 
<button id="card-button">
    Process Payment
</button>
@endsection
