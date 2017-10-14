@extends('layouts.gelato-app')

@section('content')
<div class="container containerShoppingCart">
	<div class="row">
        <div class="col-md-12">
        	@include('layouts.alertmsg')
        	<h1 class="display-3">Shopping Cart</h1>
        </div>
    </div>

    <div class="row">
    	<div class="col-md-12">

    		@if(!$cart->content()->count())
				<h2 class="display-5">Your shopping cart is empty</h2>
				<a href="{{route('store')}}" class="btn btn-success">Continue Shopping</a>
    		@else
	    	<table class="table">
			   	<thead>
			       	<tr>
			       		<th></th>
			           	<th>Product</th>
			           	<th>Qty</th>
			           	<th>Price</th>
			           	<th>Subtotal</th>
			           	<th></th>
			       	</tr>
			   	</thead>

			   	<tbody>

			   		@foreach($cart->content() as $row)

			       		<tr id="$row->rowId">
			       			<td>
			       				@if($row->options->has('image_url'))
			       					<img src="{{url('images/store/'. $row->options->image_url)}}" alt="{{$row->name}}" class="img-responsive" width="50">
			       				@else
									<img src="{{url('images/store/no-image.jpg')}}" alt="{{$row->name}}" class="img-responsive" width="50">
			       				@endif
			       			</td>
			           		<td>
			               		<p><strong>{{$row->name}}</strong></p>
			               		<p><strong>Size: </strong>{{$row->options->has('size') ? $row->options->size : ''}}</p>
			           		</td>
			           		<td><strong>{{$row->qty}}</strong></td>
			           		<td>${{$row->price(2)}}</td>
			           		<td>${{$row->subtotal(2)}}</td>
			           		<td><button data-row-id="{{$row->rowId}}" class="btn btn-danger deleteButton">Delete</button>
			           		</td>
			       		</tr>

				   	@endforeach
			   	</tbody>
			   	
			   	<tfoot>
			   		<tr>
			   			<td colspan="3">&nbsp;</td>
			   			<td>Subtotal</td>
			   			<td>{{$cart->subtotal(2)}}</td>
			   		</tr>
			   		<tr>
			   			<td colspan="3">&nbsp;</td>
			   			<td>Tax</td>
			   			<td>{{$cart->tax(2)}}</td>
			   		</tr>
			   		<tr>
			   			<td colspan="3">&nbsp;</td>
			   			<td>Total</td>
			   			<td>{{$cart->total(2)}}</td>
			   		</tr>
			   	</tfoot>
			</table>
			<div class="row">
				<div class="col-md-4 col-md-offset-8">
					<a href="{{route('store')}}" class="btn btn-success" style="margin-right: 20px;">Continue Shopping</a>
					<a href="#" class="btn btn-primary">Checkout</a>
				</div>
			</div>
			@endif
		</div>
    </div>
</div>
@endsection

@push('scripts')
<script src="{{ asset('js/shopping-cart.js') }}"></script>
@endpush