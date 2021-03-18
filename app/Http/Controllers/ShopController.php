<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Shop =Shop::get();
        return view('shop.Index')->with (compact('Shop'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('shop.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Shop=new Shop();
        $Shop->shop_name=$request->shop_name;
        $Shop->owner_name=$request->owner_name;
        $Shop->owner_NIC=$request->owner_NIC;
        $Shop->lat=$request->lat;
        $Shop->Lng=$request->Lng;
        $Shop->image=$request->file('file');
//        $Shop->imageName=time();
//        $Shop->move(public_path('image'));
        $Shop->address_no=$request->address_no;
        $Shop->suburb=$request->suburb;
        $Shop->city=$request->city;
        $Shop->province=$request->province;
        $Shop->country=$request->country;
        $Shop->registered_date=$request->registered_date;
        $Shop->due_dates=$request->due_dates;
        //$Shop->telephone_numbers->telephone_numbers;
        $Shop->user_id=$request->user_id;
        //shop::create($request->all());
        $Shop->save();
        return redirect()->route('shop.index')->with('add','Record Added');

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function show(Shop $shop)
    {
        return view('shop.show',compact('shop'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function edit(Shop $shop)
    {
        return view('shop.Edit',compact('shop'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shop $shop)
    {
        $shop->update($request->all());
        return redirect()->route('shop.index')->with('add','Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shop  $shop
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shop $shop)
    {
        //
        $shop->delete();
        return redirect()->route('shop.index')->with('add','Record Deleted');
    }


}
