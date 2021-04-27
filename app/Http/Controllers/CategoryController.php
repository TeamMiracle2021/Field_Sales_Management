<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
<<<<<<< HEAD
=======
use App\Models\Product;
>>>>>>> cf79acdaf153af19eeac55680b2711c462775f5d

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    //********************************************************************************   index  ********************************************************************************
    public function index()
    {
        $product = Category::all();
        return view('product.viewCategory');//compact('category'));//->with(compact('category'));
    }
    //**************************************************************************************************************************************************************************






    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */




<<<<<<< HEAD
    //********************************************************************************   create  ******************************************************************************* 
=======
    //********************************************************************************   create  *******************************************************************************
>>>>>>> cf79acdaf153af19eeac55680b2711c462775f5d
    public function create()
    {
        return view('product.create');
    }
    //**************************************************************************************************************************************************************************






    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




<<<<<<< HEAD
    //********************************************************************************   store  ********************************************************************************  
=======
    //********************************************************************************   store  ********************************************************************************
>>>>>>> cf79acdaf153af19eeac55680b2711c462775f5d
    public function store(Request $request)
    {

        //return view('product.createCategory');
        // $request->validate([
        //     'category_name' =>'required'
        // ]);


        $request->validate([
            'category_name'=>'required|max:255',
<<<<<<< HEAD
            
=======

>>>>>>> cf79acdaf153af19eeac55680b2711c462775f5d

        ]);

        Category::create($request->all()); //categoryIndex.blade.php fileekata user insert karana data CategoryControllerr eke thiyana st

        return redirect()->route('product.index')->with('alert','Data added for category table successfully!');//product=product = product kiyana folder name (views wala thiyana ) category= catagory.blade.php
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   show  ********************************************************************************
    public function show(Category $category)
    {
        //
    }
    //**************************************************************************************************************************************************************************







    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   edit  ********************************************************************************
    public function edit(Category $category)
    {
        //
    }
    //**************************************************************************************************************************************************************************





    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */




     //********************************************************************************   update  ********************************************************************************
    public function update(Request $request, Category $category)
    {
        //
    }
    //***************************************************************************************************************************************************************************





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Category  $category
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   destroy  ********************************************************************************
    public function destroy(Category $category)
    {
        //
    }
     //***************************************************************************************************************************************************************************
}
