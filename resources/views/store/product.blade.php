@extends('layouts.gelato-app')

@section('content')
<a href="{{route('cart')}}"><div class="shoppingCart"></div></a>
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	@include('layouts.alertmsg')
        	<h1 class="display-3">{{$product->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-6">
        	<div id="gallery">
        		@foreach($product->productImages as $image)
					<a class="image-not-selected" href="{{url('images/store/' . $image->image_url)}}"><img src="{{url('images/store/thumbs/' . $image->image_url)}}" width="70"  alt="{{$product->name}}"></a>
        		@endforeach
        	</div>
        	<div id="photo"></div>
        </div>
        <div class="col-md-6">
        	<p class="h4">{{$product->description}}</p>
        	 <div class="row">
		    	<div class="col-md-12">
		    		@if($unavailable)
					<p class="h4"><strong>Sorry, the product is currently unavailable</strong><p>
		    		@else
		    		<p class="h4"><strong>Price: </strong><span id="productPrice">{{$price}}</span><p>
		    		@endif
		    	</div>
		    </div>
		    @if(!$unavailable && starts_with($price, '$'))
		    {!!Form::open(['route' => 'add-shopping-cart'], ['id'=>'add-to-cart'])!!}
		    <div id="variantData" class="row">
		    	<div class="col-md-4 form-group">
		    		{!!Form::label('size', 'Size')!!}
		    		{!!Form::select('size', $sizes, null, ['class' => 'form-control', 'id'=>'size'])!!}
		    	</div>
		    	<div class="col-md-4 form-group">
		    		{!!Form::label('quantity', 'Quantity')!!}
		    		{!!Form::select('quantity', $quantityArray, '1', ['class' => 'form-control', 'id'=>'quantity'])!!}
		    	</div>
		    </div>
		    <div class="row">
		    	<div class="col-md-6">
		    		<button class="btn btn-primary btn-lg" id="addToCart"></i> ADD TO CART</button>
		    	</div>
		    </div>
		    {!!Form::close()!!}
		    @endif
        </div>
    </div>
    
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/product.js') }}"></script>
@endpush