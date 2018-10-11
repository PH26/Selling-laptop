@extends('layouts.master')
@section('content')
<style>
	.product-name{
		font-weight: bold;
    margin:2em;
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
		font-size: 90%;
		padding: 0.5em 0;
	}
	.super{
		height: 30em;
	}
	.super .item{
		width: 60%;
		object-fit: cover;
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
	.thumbnail{
        height: 20em;
    }
    .thumbnail img{
        width: 50%;
        object-fit: cover;
    }
    .thumbnail:hover{
        border: 2px solid #00e68a;         
    }
    .thumbnail:hover img{
        -webkit-transform: scale(1.04);
        -moz-transform: scale(1.04);
        -ms-transform: scale(1.04);
        transform: scale(1.04);
        -webkit-transition: transform 0.5s; 
        transition: transform 0.5s; 
    }
    .col-md-4{
    	font-weight: bold;
    }
</style>
    <div class="col-md-12 product">  
    	<p class="product-name">{{ strtoupper($product->name) }}</p>
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

    	<div class="col-md-6 ">
    		<div class="row properties">
    			<p class="product-price col-md-9">{{ number_format($product->price,0, '', '.')}}₫</p>
          		<form class="" method="GET" action="{{route('cart')}}">
                <input type="hidden" name="product_id" value="{{$product->id}}">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <button class="btn btn-success col-md-2 " style="background: red">
                	<span class="fa fa-shopping-cart fa-1x"> Add to cart</span> 
            	</button>
           		 </form>
    		</div>
          	
          	<div class="row properties">
          		<div class="col-md-4">Screen:</div>
          		<div class="col-md-8">{{$product->screen}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">OS:</div>
          		<div class="col-md-8">{{$product->OS}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">ScreenCard:</div>
          		<div class="col-md-8">{{$product->screenCard}}</div>
          	</div>
          	<div class="row properties">
          		<div class="col-md-4">Weight:</div>
          		<div class="col-md-8">{{$product->weight}}</div>
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
          		<div class="col-md-4">Size:</div>
          		<div class="col-md-8">{{$product->size}}</div>
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
		@if(count($sameproduct)>0)
		<div class="col-md-12">
	    	<div class="panel-heading">COMPARE WITH SIMILAR PRODUCTS</div>
		    <div class="panel-body">
		        @foreach($sameproduct as $item)
	                <div class="col-md-3">
	                    <div class="thumbnail">
	                        <a href="{{route('product',$item)}}"><img src="{{asset('storage/'.$item->images[0]->images_url)}}"></a>
	                        <div class="caption">
	                            <p><a href="{{route('product',$item)}}">{{ $item->name }}</a></p>
	                            <p><b style="color: red;">{{ number_format($item->price,0, '', '.')}}₫</b></p>
			                    <form method="GET" action="{{route('cart')}}">
	                                <input type="hidden" name="product_id" value="{{$product->id}}">
	                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
	                                <button class="btn btn-success " style="background: red">
	                                	<span class="fa fa-shopping-cart fa-1x"> Add to cart</span> 
		                            </button>
		                        </form>
	                            <a href="{{route('compare',[$product, $item]) }}" style="; color:blue; font-weight:normal; ;">
	                            	Detailed comparison
	                            </a>
	                        </div>
	                    </div>
	                </div>
	            @endforeach
		    </div>
		</div>       			
	@endif       
    @include('pages.backtotop')
@endsection