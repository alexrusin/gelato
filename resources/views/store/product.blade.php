@extends('layouts.gelato-app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	@include('layouts.alertmsg')
        	<h1 class="display-3">{{$product->title}}</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
        	<img src="{{url($product->image_url)}}" alt="{{$product->title}}" class="img-responsive" width="350">
        </div>
        <div class="col-md-7">
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