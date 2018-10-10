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
        $sameproduct = Product::where('price',$product->price)->where('id','<>',$product->id)->take(4)->get();
        return view('pages.product', compact('product','sameproduct'));

    }
     public function compare(Product $product , Product $product2)
    {
        return view('pages.compare', compact('product','product2'));
    }
    public function addcart($id)
    {
        $pro = Product::where('id',$id)->first();
        Cart::add(['id' => $pro->id, 'name' => $pro->name, 'qty' => 1, 'price' => $pro->price,'options' => ['img' => $pro->images]]);
        return redirect()->route('getcart');
    }

    public function getupdatecart($id,$qty,$dk)
    {
      if ($dk=='up') {
         $qt = $qty+1;
         Cart::update($id, $qt);
         return redirect()->route('getcart');
      } elseif ($dk=='down') {
         $qt = $qty-1;
         Cart::update($id, $qt);
         return redirect()->route('getcart');
      } else {
         return redirect()->route('getcart');
      }
    }
    public function getdeletecart($id)
    {
     Cart::remove($id);
     return redirect()->route('getcart');
    }
    public function xoa()
    {
        Cart::destroy();   
        return redirect()->route('index');   
    }
    public function getcart()
    {   
        return view ('detail.card');
    }
}
