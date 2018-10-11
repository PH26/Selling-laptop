@extends('layouts.master')
@section('content')
<style>
	.panel-heading{
		background: #00e68a;
		border-radius: 0;
		font-weight: bold;
		color: white;
	}

	.product-price{
		color: red;
		font-weight: bold;
		font-size: 150%;
		padding-top: 1em;
	}
	.buy-now{
		margin-top: 0.5em;
		border-radius: 0.3em;
		background: #ff751a;
		text-align: center;
		color:white;
	}
	.buy-now:visited p{
		color: white;
	}
	.buy-now:hover p{
		color: white;	
	}
	.buy-now:active p{
		color: white;
	}
	.col-md-2{
		font-weight: bold;
	}
	
</style>
   
<div class="col-md-12">
	<div class="panel">
    	<div>
    		<div class="col-md-2 panel-heading" style="padding-left: 2em;">Name</div>
			<div class="col-md-5 panel-heading">
				<a href="{{route('product',$product)}}" style="color: white">{{ strtoupper($product->name) }}</a>
			</div>
			<div class="col-md-5 panel-heading">
				<a href="{{route('product',$product2)}}" style="color: white">{{ strtoupper($product2->name) }}</a>
			</div>
    	</div>
	    <div class="panel-body">
    		<div class="col-md-2"><p class="product-price">Price</p></div>
			<div class="col-md-5"><p class="product-price">{{ number_format($product->price,0, '', '.')}}₫</p></div>
			<div class="col-md-5"><p class="product-price">{{ number_format($product2->price,0, '', '.')}}₫</p></div>
			<hr>
			<div class="col-md-2">Screen</div>
			<div class="col-md-5">{{$product->screen}}</div>
			<div class="col-md-5">{{$product2->screen}}</div>
			<hr>
			<div class="col-md-2">OS</div>
			<div class="col-md-5">{{$product->OS}}</div>
			<div class="col-md-5">{{$product2->OS}}</div>
			<hr>
			<div class="col-md-2">ScreenCard</div>
			<div class="col-md-5">{{$product->screenCard}}</div>
			<div class="col-md-5">{{$product2->screenCard}}</div>
			<hr>
			<div class="col-md-2">CPU</div>
			<div class="col-md-5">{{$product->cpu}}</div>
			<div class="col-md-5">{{$product2->cpu}}</div>
			<hr>
			<div class="col-md-2">Storage</div>
			<div class="col-md-5">{{$product->storage}}</div>
			<div class="col-md-5">{{$product2->storage}}</div>
			<hr>
			<div class="col-md-2">RAM</div>
			<div class="col-md-5">{{$product->ram}}</div>
			<div class="col-md-5">{{$product2->ram}}</div>
			<hr>
			<div class="col-md-2">PIN</div>
			<div class="col-md-5">{{$product->pin}}</div>
			<div class="col-md-5">{{$product2->pin}}</div>
			<hr>
			<div class="col-md-2">Weight</div>
			<div class="col-md-5">{{$product->weight}}</div>
			<div class="col-md-5">{{$product2->weight}}</div>
			<hr>
			<div class="col-md-2">Size</div>
			<div class="col-md-5">{{$product->size}}</div>
			<div class="col-md-5">{{$product2->size}}</div>	
			<hr>
			<div class="col-md-2">Connect</div>
			<div class="col-md-5">{{$product->connect}}</div>
			<div class="col-md-5">{{$product2->connect}}</div>		
			<hr>
			<div class="col-md-2">Image</div>
			<div class="col-md-3">
				<div id="carousel-example-generic" class="carousel slide super" data-ride="carousel">
		 			<!-- Wrapper for slides -->
		 			<a href="{{route('product',$product)}}">
		 				<div class="carousel-inner" role="listbox">
					  		<?php $a=1 ?>
					  		@foreach($product->images as $image)
					  			@if($a==1)
					  				<div class="item active">
						      			<img src="{{asset('storage/'.$image->images_url)}}">
						    		</div>
						    	@else
						    		<div class="item">
					      				<img src="{{asset('storage/'.$image->images_url)}}">
					    			</div>
					  			@endif
					  			<?php $a++ ?>
					  		@endforeach
					 	</div>
		 			</a>		  		
				</div>
			</div>
			<div class="col-md-3 col-md-offset-2">
				<div id="carousel-example-generic" class="carousel slide super" data-ride="carousel">
		 			<!-- Wrapper for slides -->
			  		<a href="{{route('product',$product2)}}">
		 				<div class="carousel-inner" role="listbox">
					  		<?php $i=1 ?>
					  		@foreach($product2->images as $image)
					  			@if($i==1)
					  				<div class="item active">
						      			<img src="{{asset('storage/'.$image->images_url)}}">
						    		</div>
						    	@else
						    		<div class="item">
					      				<img src="{{asset('storage/'.$image->images_url)}}">
					    			</div>
					  			@endif
					  			<?php $i++ ?>
					  		@endforeach
					 	</div>
		 			</a>	
				</div>
			</div>
			<hr>
			<div class="col-md-5 col-md-offset-1">
				<a class="col-md-12 buy-now" href="#">
		      		<p style="font-weight: bold; font-size: 115%; padding-top: 0.3em;">BUY NOW</p>
					<p style="padding-bottom: 0.1em;">Delivery in a hour or get at the supermarket</p>
		      	</a>
			</div>
			<div class="col-md-5">
				<a class="col-md-12 buy-now" href="#">
		      		<p style="font-weight: bold; font-size: 115%; padding-top: 0.3em;">BUY NOW</p>
					<p style="padding-bottom: 0.1em;">Delivery in a hour or get at the supermarket</p>
		      	</a>
			</div>	
	      	
		</div>
	</div>
</div>  
@include('pages.backtotop')   
@endsection 