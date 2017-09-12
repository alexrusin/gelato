@extends('layouts.gelato-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 character-info">
                <h2>{{$character->name}}</h2>
                <p> <img src="{{url('images/'.$character->image_url)}}" alt="{{$character->name}}" class="img-responsive" width="200">
                {{$character->about}}</p>
                <div class="clearfix"></div>

        </div>
    </div>
</div>
@endsection