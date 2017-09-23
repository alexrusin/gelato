@extends('layouts.gelato-app')

@section('content')
<div class="container" id="mainContent">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Welcome to Gelato the Clown Website!</h1>
            <h4>A wonderful character in a dual role as the bullied boy and the confidant clown that changed his life.</h4>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img src="{{url('images/GelatoCover.jpg')}}" alt="Gelato Cover Image" class="img-responsive center-block">  
        </div>
    </div>
</div>
@endsection