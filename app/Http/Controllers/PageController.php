<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;
use DB,Cart,Datetime;


class PageController extends Controller
{

    public function __construct(){
        $categories = Category::all();
        view()->share('categories',$categories);
        $categories = Category::all();
        $newproduct = Product::orderBy('id', 'desc')->take(4)->get();
        view()->share('newproduct',$newproduct);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       // $products = Product::all();
        //dung cach nay de lay anh cuar product
        $products= Product::with('images')->get();
        return view('pages.index',compact('products'));
    }
    public function category($id)
    {
        $products = Product::where('category_id',$id)->get();
        $category = Category::find($id);
        return view('pages.category',compact('products','category'));
    }
        public function product(Product $product)
    {
         $sameproduct = Product::where('price','>',$product->price-1000000)
                            ->where('price', '<',$product->price+1000000)
                            ->where('id','<>',$product->id)->take(6)->get();
        return view('pages.product', compact('product','sameproduct'));

        return view('pages.product', compact('product','sameproduct'));

    }
     public function compare(Product $product , Product $product2)
    {
        return view('pages.compare', compact('product','product2'));
    }
}
