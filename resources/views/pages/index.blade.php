@extends('layouts.master')
@section('content')
    <style>
        .thumbnail img{
            height: 15em;
            width: 90%;
            object-fit: cover;
        }
        b{
            color: red;
        }  
    </style>
    
    @foreach($products as $product)
        <div class="col-md-3">
        <div class="thumbnail">
            <img src="{{asset('storage/'.$product ->images[0]->images_url)}}">
            <div class="caption">
                <p>{{ $product->name }}</p>
                <p><b>{{ $product->price }}</b></p>
                <button class="btn btn-success">
                    <span class="fa fa-shopping-cart fa-1x"> Add to cart</span> 
                </button>
            </div>
        </div>
    </div>
    @endforeach 
@endsection 