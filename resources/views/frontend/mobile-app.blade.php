@extends('layouts.gelato-app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Check out our mobile app in AppStore</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img src="{{url('images/mobile-app/HatLinkPage.jpg')}}" alt="App Screen Shot" class="img-responsive center-block">  
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img src="{{url('images/mobile-app/TheStory.jpg')}}" alt="App Screen Shot" class="img-responsive center-block">  
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <img src="{{url('images/mobile-app/Instructions.jpg')}}" alt="App Screen Shot" class="img-responsive center-block">  
        </div>
    </div>
</div>
@endsection