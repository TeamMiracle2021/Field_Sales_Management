<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Shop;
use Carbon\Carbon;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use App\Models\Route;
use App\Models\Unproductive;


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
//        $type = DB::table('users')->where('userID',$Shop->user_id)->value('user_typeID');
        return view('Shop.Index')->with (compact('Shop'));
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

        return view('Shop.Add')->with('users', $users)->with('routes',$routes);

    }









    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->Validate($request,[
            'shop_name'=>'required',
            'owner_name'=>'required',
            'owner_NIC'=>'required|max:10<=12',
            'lat'=>'numeric',
            'lng'=>'numeric',
            'image'=>'nullable|mimes:jpg,jpeg,bmp,svg,png',
            'address_no' => 'required',
            'suburb'=> 'required',
            'city' => 'required',
            'telephone_numbers' => 'numeric|max:10=10',
            'user_id'=> 'required',
            'RouteID'=>'required'

        ],[
            'owner_NIC.required'=>'NIC should be 10 or 12 characteristics',
            'telephone_numbers'=>'Telephone number should be 10 numbers'
        ]);


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

        return view('Shop.show',compact('shop'));
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
        $users = User::all();
        $routes = Route::all();

        return view('Shop.Edit',compact('shop'))->with('users', $users)->with('routes',$routes);

//        return view('Shop.Edit',compact('shop'));
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
        $this->Validate($request,[
            'shop_name'=>'required',
            'owner_name'=>'required',
            'owner_NIC'=>'required|max:10<=12',
            'lat'=>'numeric',
            'lng'=>'numeric',
            'image'=>'nullable|mimes:jpg,jpeg,bmp,svg,png',
            'address_no' => 'required',
            'suburb'=> 'required',
            'city' => 'required',
            'telephone_numbers' => 'numeric|max:10=10',
            'user_id'=> 'required',
            'RouteID'=>'required'

        ],[
            'owner_NIC.required'=>'NIC should be 10 or 12 characteristics',
            'telephone_numbers'=>'Telephone number should be 10 numbers'
        ]);

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
        $shop->delete();
        return redirect()->route('shop.index')->with('add','Record Deleted');
    }



    public function shopreport()
    {
        $Shop =Shop::get();
        return view('reports.shopreport')->with (compact('Shop'));
    }


    public function unpreport()
    {

        $unp = DB::table('shop_unproductives')
            ->join('shops','shop_unproductives.shop_ID','=','shops.ShopID')
            ->join('users','shops.user_id','=','users.userID')
            ->select('shop_unproductives.unproductive_reason','shop_unproductives.unproductive_date','shops.shop_name','users.first_name','users.last_name')
            ->get();
        return view('reports.unproductive')->with (compact('unp',$unp));

    }






        //__________________________________________________________API__________________________________________________________________
    public function shop1($id)
    {
        $shop = Shop::find($id);
        return response()->json($shop);

    }

    public function viewshops($id){
        $shops = DB::table('shops')->where('user_id',$id)->get();
//        $shop = DB::table('shops')->where('user_id',$id)->select('','')->get();
        return $shops;

    }

    public function viewshopdetails($id){
        $shop = DB::table('shops')->where('ShopID',$id)->get();
        return $shop;
    }


    public function mobileshopadd(Request $request){


            $Shop=new Shop();
            $Shop->shop_name=$request->shop_name;
            $Shop->owner_name=$request->owner_name;
            $Shop->owner_NIC=$request->owner_NIC;
//            $Shop->lat=$request->lat;
//            $Shop->lng=$request->lng;
////
//
//            if($request->hasfile('avatar')){
//                $file=$request->file('avatar');
//                $extension=$file->getClientOriginalExtension();//get image extension
//                $filename= time().'.'.$extension;
//                $file->move('uploads/shop',$filename);
//                $Shop->image=$filename;
//            }else{
//                return $request;
//                $Shop->image='';
//            }

            $Shop->address_no=$request->address_no;
            $Shop->suburb=$request->suburb;
            $Shop->city=$request->city;
            $Shop->province=$request->province;
            $Shop->country=$request->country;
            $Shop->registered_date= Carbon::now();
            $Shop->due_dates=11;
            $Shop->telephone_numbers=$request->telephone_numbers;
            $Shop->user_id=$request->user_id;
//            $Shop->RouteID=$request->RouteID;
            $Shop->save();
        if ($Shop) {
            return ["Result" => "Data has been saved"];
        } else {
            return ["Result" => "Operation failed"];
        }

        }



        public function orderlist($id){
            $order = DB::table('orders')->where('shop_ID',$id)->get();

            return response()->json([
                'status code'=> 200,
                'data' =>$order,
                ]);
        }

        public function orderdetails($id){

            $order = DB::table('order_products')
                ->join('products','order_products.product_ID','=','products.productID')
                ->where('order_products.OrderID',$id)
                ->select('order_products.OrderID','products.product_Name','order_products.quantity_per_product','order_products.discount_per_product')
                ->get();

            return response()->json([
                'status code'=> 200,
                'data' =>$order,

            ]);

        }



    public function shopclosereason(Request $request,$id)
    {
        $unproductive = new Unproductive();
        $unproductive->unproductive_reason=$request->unproductive_reason;
        $unproductive->unproductive_date=Carbon::now();
        $unproductive->shop_ID=$id;
        $unproductive->save();

        return response()->json([
            'status code'=> 200,
            'message'=>'unproductive save successfully'
        ]);
    }





}
