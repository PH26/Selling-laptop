@extends('layouts.master')
@section('content')
<style>
	.product{
		background: white;
	}
	.product-name{
		margin:0 1em;
        background: white;
        padding: 0.5em;
        font-weight: bold;
        font-size: 150%;
	}
	.product-price{
		color: red;
		font-weight: bold;
		font-size: 200%;
	}
	.properties{
		border-top:1px solid #d1e0e0; 
		border-bottom:1px solid #d1e0e0;
		font-size: 105%;
		padding: 0.5em 0;
	}
	.super{
		height: 30em;
		padding: 4em 0;
	}
	.super .item{
		width: 60%;
		object-fit: cover;
	}
	.buy-now{
		margin-top: 1em;
		border-radius: 0.3em;
		background: red;
		text-align: center;
		color:white;
	}
	.buy-now:visited{
	    text-decoration: none;
		color: white;
	}
	.buy-now:hover{
		text-decoration: none;
		color: white;
	}
	.buy-now:active{
		text-decoration: none;
		color: white;
	}
</style>
    <div class="col-md-12 product">  
    	<p class="product-name">{{$product->name}}</p>
    	<div class="col-md-5">
    		<div id="carousel-example-generic" class="carousel slide super" data-ride="carousel">
		 		<!-- Wrapper for slides -->
			  	<div class="carousel-inner" role="listbox">
			  		<?php $i=1 ?>
			  		@foreach($product->images as $image)
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
			</div>
    	</div>

    	<div class="col-md-6">
          	<p class="product-price">{{ number_format($product->price,0, '', '.')}}₫</p>
          	<div class="row properties">
          		<div class="col-md-4">Screen:</div>
          		<div class="col-md-8">{{$product->screen}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">OS:</div>
          		<div class="col-md-8">{{$product->OS}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">Camera:</div>
          		<div class="col-md-8">{{$product->cam}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">CPU:</div>
          		<div class="col-md-8">{{$product->cpu}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">RAM:</div>
          		<div class="col-md-8">{{$product->ram}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">Storage:</div>
          		<div class="col-md-8">{{$product->storage}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">Ram:</div>
          		<div class="col-md-8">{{$product->ram}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">PIN:</div>
          		<div class="col-md-8">{{$product->pin}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">VGA:</div>
          		<div class="col-md-8">{{$product->vga}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">Connect:</div>
          		<div class="col-md-8">{{$product->connect}}</div>
          	</div>
          	<a class="col-md-12 buy-now" href="#">
          		<p style="font-weight: bold; font-size: 120%; padding-top: 0.4em;">BUY NOW</p>
				<p style="padding-bottom: 0.1em;">Delivery in 1 hour or at the shop</p>
          	</a>
    	</div>
    	<div class="col-md-1"></div>
    </div>
@endsection