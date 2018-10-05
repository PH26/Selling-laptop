<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Product;


class PageController extends Controller
{

    public function __construct(){
        $categories = Category::all();
        view()->share('categories',$categories);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();
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
        return view('pages.product',compact('product'));
    }

}
