<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories= Category::all();
        return view('Admin.categories.list',compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admin.categories.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required|unique:categories,name|max:255'
        ],
            [

                'name.required'=>'Please input categories name',
                'name.unique'=>'Name already exists',
                'name.max'=>'Length nax name 255'

            ]);
        $category = new Category();
        $category->name=$request->name;
        if ($request->file('img')) {
                $path = $request->file('img')[0]->store('images');
                $category->img=$path;
        } 
        $category->save();  
        return redirect('admin/categories/list')->with('message','successful');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function show(Category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function edit(Category $category)
    {
        return view('Admin.categories.edit',['category'=>$category]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Category $category)
    {

        $this->validate($request,[
            'name'=>'required|unique:categories,name|min:3|max:255'
        ],
            [

                'name.required'=>'Please input categories name',
                'name.min'=>'Length min name 3',
                'name.unique'=>'Name already exists',
                'name.max'=>'Length nax name 255'

            ]);
        $category->name= $request->name;
        $category->update($request->all());
        return redirect()->route('categories.list')->withSuccess('message','Update  success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Category  $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(Category $category)
    {
        $category->delete();
        return redirect()->route('categories.list');
    }
}
