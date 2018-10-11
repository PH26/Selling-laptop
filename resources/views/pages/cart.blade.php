@extends('layouts.master')
@section('content')
    <style type="text/css">
        .cart{
            background: white;
        }
        .cart *{
            text-align: center;
        }
        .cart thead{
            background: #3498DB;
            color:white;
        }
        .price{
            color: red;
            font-weight: bold;
        }
        .cart_total{
            color: red;
            font-weight: bold;
        }
        .cart_name{
            font-size: 1.25em;
            text-decoration: none;
            color: black;
        }
        .cart_name:hover{
            text-decoration: none;
            color: #3498DB;
            background:
        }
        .total{
            font-weight: bold;
            font-size: 1.20em;
            background: red;
        }
        .sum *{
            text-align: right;
            font-size: 1.1em;
            font-weight: bold;
        }
        .btn-default:hover{
            background: red;
        }
        .action{
            background: white;
            border:1px solid black;
        }
        .action:hover{
            border-radius: 0;
            border:1px solid;
            color:red;
        }
        .order, .empty {
        color: white;
        background: #3498DB;
        padding:0.5em 2.1em;
        float: right;
        margin-left: 1em;
        cursor: pointer;
        border-radius: 5px;
    }
    .order:hover , .empty:hover{
        text-decoration: none;
        color:white;
        background: red;
    }
    .emptycart{

    }
    .backhomes a{

    display: inline-block;
    text-align: center;
    font-size: 14px;
    color: #307f0f;
    height: 50px;
    line-height: 50px;
    padding: 0 20px;
    background-color: #fff;
    border: solid 1px #34a105;
    -webkit-border-radius: 2px;
    -moz-border-radius: 2px;
    border-radius: 2px;
    }
a {
    margin: 0;
    padding: 0;
    font-size: 100%;
    vertical-align: baseline;
    background: transparent;
}
    }
    </style>
    <div class="col-md-7" style="padding: 1em; padding-left: 3em;">
        <h1 style="color: red;font-size: 150%">YOUR CART</h1>
        @if(count($cart))
            <table class=" table table-hover">
                <tr>
                    <th class="col-md-2">Image</th>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Total</th>
                    <th>Remove</th>
                </tr>
                <tbody>
                @foreach($cart as $item)
                    <?php
                    $product= App\Product::find($item->id);
                    ?>
                    <tr>
                        <td><a href="{{route('product',$product)}}">
                                <img src="{{asset('storage/'.$product->images[0]->images_url)}}" height="70px" width="60px">
                            </a>
                        </td>
                        <td>
                            <p><a class="cart_name" href="{{route('product',$product)}}">
                                    {{$product->name}}
                                </a></p>
                        </td>
                        <td class="cart_price price">
                            <p>{{ number_format($product->price,0, '', '.')}}₫</p>
                        </td>
                        <td class="cart_quantity">
                            <div class="btn-group">
                                <a class="cart_quantity_up" href='{{url("cart?product_id=$item->id&increment=1")}}'>
                                    <button type="button" class="btn action">+</button>
                                </a>

                                <input class="cart_quantity_input" type="text" name="quantity" value="{{$item->qty}}" autocomplete="off" size="2">

                                <a class="cart_quantity_down" href='{{url("cart?product_id=$item->id&decrease=1")}}'>
                                    <button type="button" class="btn action">-</button>
                                </a>

                            </div>
                        </td>
                        <td class="cart_total">
                            <p class="cart_total_price">{{ number_format($item->subtotal,0, '', '.')}}₫</p>
                        </td>
                        <td>
                            <form method="GET" action="{{route('cart.remove')}}">
                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit"class="btn btn-default"
                                        onclick="return confirm('Do you want to remove?')">
                                    <i class="fa fa-trash-o  fa-2x" style="color:black"></i>
                                </button>
                            </form>

                        </td>
                    </tr>
                @endforeach
                <tr class="sum">
                    <td colspan="9" style="color: red">Total:{{Cart::subtotal()}}₫</td>
                </tr>
                <tr colspan="9">
                    <td colspan="">
                        <div class="order col-md-6">ORDER</div>
                    </td>
                    <td>
                         <div class="empty">EMPTY</div>
                    </td>
                </tr>
                @else
                    <div class="col-md-8 col-md-push-8   emptycart">
                        <img style="width: 150px; height: auto;padding-left: 5em;"  src="{{asset('storage/images/empty-cart.png')}}">
                        <p style="padding-top: 1em">You have no items in the shopping cart</p>
                    </div>
                    <p class="col-md-7 col-md-push-7 backhomes">
                            <a href="">BACK TO HOME</a>
                    </p>
                @endif
                </tbody>
            </table>
    </div>

</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    var button = $('.empty');
    button.click(function(){
        if (confirm("Do you want empty cart?")) {
            var url = '{{ route("cart.destroy") }}';
            window.location.href=url;
        }
    });
});
</script>
@include('pages.backtotop')
@endsection