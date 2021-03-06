<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use App\Image;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products= Product::paginate(10);
        $categories= Category::all();
        return view('Admin.products.list',['products'=>$products],['categories'=>$categories]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories= Category::all();
        return view('Admin.products.add',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'unique:products,name',
            'price' => 'numeric',
        ],
            [
                'name.unique' => 'Name already exists',
                'price.numeric' => 'Price must be numeric'
            ]);
        // dd($request->file('images'));
        $product = Product::create($request->all());
        if ($request->file('images')) {
            foreach ($request->file('images') as $image) {
                $path = $image->store('images');
                $imag = Image::create([
                    'images_url' => $path,
                    'product_id' => $product->id
                ]);
            }
            return redirect()->route('products.create')->with('message', 'successful');
        }
    }

        /**
         * Display the specified resource.
         *
         * @param  \App\User $user
         * @return \Illuminate\Http\Response
         */
        public function show(User $user)
        {
            //
        }
         public function destroy($id){
            $product = Product::find($id);
            $size = count($product->orders);
             if ($size == 0) {
            $product->delete();
            return redirect()->route('products.list')->with('success', 'Delete  successfully');
            }
         return redirect()->route('products.list')->with('error', 'Cannot delete!');
        
             }
        }