<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Database\Seeders\DatabaseSeeder;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
//use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use phpDocumentor\Reflection\DocBlock\Tags\Uses;




class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return DB::table('shops')
//            ->join('users','shops.user_id',"=",'users.userID')
//            //->join('products','products.ProductID',"=",'order_details.ProductID')
//            ->select('shops.*','users.first_name')
//            //->where('shops.user_id')
//            ->get();

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
        $Shop->lng=$request->lng;
        $Shop->image=$request->image;


//        if($request->hasfile('image')){
//            $file=$request->file('image');
//            $extension=$file->getClientOriginalExtension();//get image extension
//            $filename= time().'.'.$extension;
//            $file->move('/uploads/shop/',$filename);
//            $Shop->image=$filename;
//        }else{
//            return $request;
//            $Shop->image='';
//        }

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
//        $Shop = DB::table('shops')
//            ->join('users','shops.user_id','=','users.userID')
//            ->select('shops.*','users.first_name')
//            ->get();
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



//    public function joinuser(User $user)
//    {
//        // return DB::table('orders')->get();
//        return DB::table('shops')
//            ->join('users','shops.user_id',"=",'users.userID')
//            //->join('products','products.ProductID',"=",'order_details.ProductID')
//            ->select('users.first_name')
//            ->where('shops.user_id')
//            ->get();
//    }
}
