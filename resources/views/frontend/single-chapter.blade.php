@extends('layouts.gelato-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 character-info">
                <h2 class="text-center">{{$chapter->title}}</h2>
                <p>{{$chapter->excerpt}}</p>

        </div>
    </div>
</div>
@endsection