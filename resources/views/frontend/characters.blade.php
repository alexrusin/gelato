@extends('layouts.gelato-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>List of Characters</h1>
        </div>
    </div>
    <div class="row">
        <div class="cards-list">
        @foreach ($characters as $character)
            <div class="card">
                <a>
               <!--  <a href="{{route('single-character', ['character'=>$character->id])}}"> -->
                    <img src="{{url('images/'.$character->image_url)}}" alt="{{$character->name}}" class="img-responsive center-block">
                    <h4 class="character-name">{{$character->name}}</h4>
                    <p class="tag-line">{{$character->tag_line}}</p>
                </a>
            </div>
        @endforeach
        </div>  
    </div>
</div>
@endsection