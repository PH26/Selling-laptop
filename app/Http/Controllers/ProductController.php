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
        $product = Product::create($request->all());
        if ($request->file('img')) {
            foreach ($request->file('img') as $image) {
                $path = $image->store('images');
                $imag = Image::create([
                    'images_url' => $path,
                    'product_id' => $product->id
                ]);
            }
            return redirect()->route('products.list')->with('message', 'successful');
        }
    }

        /**
         * Display the specified resource.
         *
         * @param  \App\User $user
         * @return \Illuminate\Http\Response
         */
        public
        function show(User $user)
        {
            //
        }

        /**
         * Show the form for editing the specified resource.
         *
         * @param  \App\User $user
         * @return \Illuminate\Http\Response
         */
        public
        function edit(User $user)
        {
            return view('Admin.users.edit', ['user' => $user]);
        }

        /**
         * Update the specified resource in storage.
         *
         * @param  \Illuminate\Http\Request $request
         * @param  \App\User $user
         * @return \Illuminate\Http\Response
         */
        public
        function update(Request $request, User $user)
        {
            $user->update($request->all());
//     dd($request->all());
            return redirect()->route('users.list')->withSuccess('message', 'Update  success');
        }

        /**
         * Remove the specified resource from storage.
         *
         * @param  \App\User $user
         * @return \Illuminate\Http\Response
         */
        public
        function destroy(User $user)
        {
            $user->delete();
            return redirect()->route('users.list');
        }
    }
