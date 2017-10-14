@extends('layouts.gelato-app')

@section('content')
<a href="{{route('cart')}}"><div class="shoppingCart"></div></a>
<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
            <h1>Products</h1>
        </div>
    </div>
    <div class="row">
        <div class="cards-list">
        @foreach ($products as $product)
            <div class="card">
                <a href="{{route('product',['product' => $product->id])}}">
                	<img src="{{url('images/store/' . $product->image_url)}}" alt="{{$product->title}}" class="img-responsive center-block">
                    <h4 class="chapter">{{$product->title}}</h4>
                    <button class="btn btn-primary">Shop Now</button>
                                      
                </a>
            </div>
        @endforeach
        </div> 
    </div>
</div>
@endsection