@extends('layouts.gelato-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Chapters</h1>
        </div>
    </div>
    <div class="row">
        <div class="cards-list">
        @foreach ($chapters as $index => $chapter)
            <div class="card">
                <a>
                <!-- <a href="{{route('single-chapter', ['chapter'=>$chapter->id])}}"> -->
                    <div class="chapter">Chapter {{($index+1)}}</div>
                    <h4 class="chapter-name">{{$chapter->title}}</h4>
                    <img src="{{url('images/'.$chapter->image_url)}}" alt="{{$chapter->title}}" class="img-responsive center-block">                  
                </a>
            </div>
        @endforeach
        </div> 
    </div>
</div>
@endsection