@extends('layouts.master')
@section('content')
    <style>
        .product{
            background: #f0f0f0;
            margin:0.5em 2.5em;
        }
        .title{
            margin:1em;
            background: white;
            padding: 0.5em;
            font-weight: bold;
            font-size: 120%;
        }
        .thumbnail img{
            height: 15em;
            width: 90%;
            object-fit: cover;
        }
        b{
            color: red;
        }
        .caption a{
            text-decoration: none;
            color: black;
        }
        .caption a:hover{
            text-decoration: none;
            color: #288ad6;
        }
        .thumbnail:hover{
            border: 1px solid red;         
        }
        .thumbnail:hover img{
            -webkit-transform: scale(1.05);
            -moz-transform: scale(1.05);
            -ms-transform: scale(1.05);
            transform: scale(1.05);
            -webkit-transition: transform 0.5s; 
            transition: transform 0.5s; 
        }
        .pagination{
            display: inline-flex;
            width: 50%;
        }
    </style>
    <div class="row product">
        <div class="title">{{ strtoupper($category->name) }}</div>
        @foreach($products as $product)
        <div class="col-md-2">
            <div class="thumbnail">
                <a href="#"><img src="{{asset('storage/'.$product->images[0]->images_url)}}"></a>
                <div class="caption">
                    <p><a href="#">{{ $product->name }}</a></p>
                    <p><b>{{ number_format($product->price,0, '', '.')}}₫</b></p>
                    <button class="btn btn-success">
                        <span class="fa fa-shopping-cart fa-1x"> Add to cart</span> 
                    </button>
                </div>
            </div>
        </div>
    @endforeach 
    </div>
   
@endsection 