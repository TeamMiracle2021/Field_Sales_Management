<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Route;


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
        $users = User::all();
        $routes = Route::all();

        return view('shop.Add')->with('users', $users)->with('routes',$routes);

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


        if($request->hasfile('avatar')){
            $file=$request->file('avatar');
            $extension=$file->getClientOriginalExtension();//get image extension
            $filename= time().'.'.$extension;
            $file->move('uploads/shop',$filename);
            $Shop->image=$filename;
        }else{
            return $request;
            $Shop->image='';
        }

        $Shop->address_no=$request->address_no;
        $Shop->suburb=$request->suburb;
        $Shop->city=$request->city;
        $Shop->province=$request->province;
        $Shop->country=$request->country;
        $Shop->registered_date=$request->registered_date;
        $Shop->due_dates=$request->due_dates;
        $Shop->telephone_numbers=$request->telephone_numbers;
        $Shop->user_id=$request->user_id;
        $Shop->RouteID=$request->RouteID;
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
//        return view('maps.mapview');
//        return DB::select("select lat from shops where shopID=4");

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

        if($request->avatar != '') {
            $path = public_path() . '/uploads/shop/';

            //code for remove old file
            if ($shop->image != '' && $shop->image != null) {
                $file_old = $path . $shop->image;
                unlink($file_old);
            }

            //upload new file
            $file = $request->avatar;
            $filename = $file->getClientOriginalName();
            $file->move($path, $filename);

            //for update in table
            $shop->update(['image' => $filename]);

        }
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



    public function shopreport()
    {
        $Shop =Shop::get();
        return view('reports.shopreport')->with (compact('Shop')); // blade eka open krpnko


    }







//    public function Validator(array $data){
//        return Validator::make($data, [
//            'fname' => ['required', 'string', 'max:255'],
//            'mname' => ['required', 'string', 'max:255'],
//            'lname' => ['required', 'string', 'max:255'],
//            'contact' => ['required', 'numeric', 'digits:10'],
//            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
//            'password' => ['required', 'string', 'min:8', 'confirmed'],
//            'avatar' => ['sometimes', 'image', 'mimes:jpg,jpeg,bmp,svg,png' ,'max:5000'],
//        ]);
//
//
//    }

}
