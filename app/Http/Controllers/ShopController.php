<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderProduct;
use App\Models\Product;
use App\Models\ReturnProduct;
use App\Models\Shop;
use App\Models\VehicleStock;
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
//            'lat'=>'numeric',
//            'lng'=>'numeric',
            'image'=>'nullable|mimes:jpg,jpeg,bmp,svg,png',
            'address_no' => 'required',
//            'suburb'=> 'required',
//            'city' => 'required',
//            'status'=>'required',
            'telephone_numbers' => 'numeric|max:10=10',
//            'user_id'=> 'required',
            'RouteID'=>'required'

        ],[
            'owner_NIC.required'=>'NIC should be 10 or 12 characteristics',
            'telephone_numbers'=>'Telephone number should be 10 numbers'
        ]);


        $Shop=new Shop();
        $Shop->shop_name=$request->shop_name;
        $Shop->owner_name=$request->owner_name;
        $Shop->owner_NIC=$request->owner_NIC;
//        $Shop->lat=$request->lat;
//        $Shop->lng=$request->lng;


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
        $Shop->district=$request->district;
        $Shop->source='Administrator';
//        $Shop->status=$request->status;
        $Shop->registered_date=$request->registered_date;
//        $Shop->due_dates=$request->due_dates;
        $Shop->telephone_numbers=$request->telephone_numbers;
//        $Shop->user_id=$request->user_id;
        $Shop->RouteID=$request->RouteID;
        $user=Route::find($request->input('RouteID'));
        $user1=$user->user_id;
        $Shop->user_id=$user1;
        //shop::create($request->all());
        $Shop->save();
//        return redirect()->route('shop.index')->with('add','Record Added');

        return view('Shop.autocomplete');

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
//            'suburb'=> 'required',
//            'city' => 'required',
            'status'=>'required',
//            'telephone_numbers' => 'numeric|max:10=10',
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



    public function orderreport()
    {
        $ordrep = DB::table('orders')
//            ->join('order_products','orders.OrderID','=','order_products.OrderID')
            ->join('shops','orders.shop_ID','=','shops.ShopID')
            ->join('users','orders.user_id','=','users.userID')
//            ->join('products','order_products.product_ID','=','products.productID')
            ->select('orders.OrderID','orders.bill_value','orders.placed_date','shops.shop_name','users.first_name')
            ->get();
//        return $ordrep;
        return view('reports.oderreport')->with ('ordrep',$ordrep);
    }


    public function orderdetailreport($id){

        $order = DB::table('order_products')
            ->join('products','order_products.product_ID','=','products.productID')
            ->where('order_products.OrderID',$id)
            ->select('order_products.OrderID','products.product_Name','order_products.quantity_per_product',
                'order_products.discount_per_product')
            ->get();


        $orders = DB::table('orders')
            ->join('shops','orders.shop_ID','=','shops.ShopID')
            ->join('users','orders.user_id','=','users.userID')
            ->where('orders.OrderID',$id)
            ->select('orders.bill_value','users.first_name','shops.shop_name','users.last_name',
            'orders.placed_date', 'orders.return_total', 'orders.final_bill')
            ->get();


        $ordertotal = DB::table('order_products')
            ->join('orders','order_products.OrderId','=','orders.OrderID')
            ->join('products','order_products.product_ID','=','products.productID')
            ->select(DB::raw('sum(order_products.quantity_per_product) as quantity'))
            ->where('order_products.OrderID',$id)
            ->get();

        $returns=DB::table('return_products')
            ->join('products','return_products.product_ID','=','products.productID')
            ->where('return_products.OrderID',$id)
            ->select('return_products.OrderID','products.product_Name','return_products.quantity_per_product')
            ->get();


        return view('reports.ord2')
            ->with('order',$order)
            ->with('orders',$orders)
            ->with('ordertotal',$ordertotal)
            ->with('returns',$returns);
//        dd($order,$orders,$ordertotal);

    }


    public function salesIndex()
    {
        $user=User::all();
       return view('reports.totalSalesHome')->with('user',$user);
       //dd($user);
    }



    public function allSales(Request $request)
    {
        $sd=$request->input('start_date');
        $ed=$request->input('end_date');

        $allSales = DB::table('orders')
            ->select(DB::raw('sum(bill_value) as totalValue'))
            ->whereBetween('placed_date',[$request->input('start_date'),$request->input('end_date')])
            ->get();

        return view('reports.totalSales')->with('allSales',$allSales)->with('sd',$sd)->with('ed',$ed);
    }


    public function allSalesByUser(Request $request)
    {
        $sd=$request->input('start_date');
        $ed=$request->input('end_date');

        $allSalesByUser = DB::table('orders')
            ->join('users','orders.user_id','=','users.userID')
            ->select('orders.user_id','users.first_name','users.middle_name','users.last_name',
                        DB::raw('count(OrderID) as numOfBills'),DB::raw('sum(bill_value) as totalValue'))
            ->whereBetween('placed_date',[$request->input('start_date'),$request->input('end_date')])
            ->groupBy('orders.user_id','users.first_name','users.middle_name','users.last_name')
            ->get();

        return view('reports.userWiseSales')->with (compact('allSalesByUser','sd','ed'));

    }




    public function allSalesOfProducts(Request $request)
    {
        {
            $sd=$request->input('start_date');
            $ed=$request->input('end_date');

            $productsales = DB::table('order_products')
                ->join('orders','order_products.OrderId','=','orders.OrderID')
                ->join('products','order_products.product_ID','=','products.productID')

                ->select('products.product_Name',
                    DB::raw('sum(order_products.quantity_per_product) as quantity'),
                    DB::raw('sum(order_products.quantity_per_product * products.sales_price) as total'))

                ->whereBetween('orders.placed_date',[$request->input('start_date'),$request->input('end_date')])
                ->groupBy('order_products.product_ID','products.product_Name')
                ->get();

            return view('reports.productWiseSales')->with (compact('productsales','sd','ed'));
        }
    }






    public function storeHalfShop(Request $request)
    {
        $this->Validate($request,[
            'shop_name'=>'required',
            'owner_name'=>'required',
            'owner_NIC'=>'required|max:10<=12',
//            'lat'=>'numeric',
//            'lng'=>'numeric',
            'image'=>'nullable|mimes:jpg,jpeg,bmp,svg,png',
            'address_no' => 'required',
//            'suburb'=> 'required',
//            'city' => 'required',
//            'status'=>'required',
            'telephone_numbers' => 'numeric|max:10=10',
//            'user_id'=> 'required',
            'RouteID'=>'required'

        ],[
            'owner_NIC.required'=>'NIC should be 10 or 12 characteristics',
            'telephone_numbers'=>'Telephone number should be 10 numbers'
        ]);


        $Shop=new Shop();
        $Shop->shop_name=$request->shop_name;
        $Shop->owner_name=$request->owner_name;
        $Shop->owner_NIC=$request->owner_NIC;
//        $Shop->lat=$request->lat;
//        $Shop->lng=$request->lng;


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
        $Shop->district=$request->district;
        $Shop->source='Administrator';
//        $Shop->status=$request->status;
        $Shop->registered_date=$request->registered_date;
//        $Shop->due_dates=$request->due_dates;
        $Shop->telephone_numbers=$request->telephone_numbers;
//        $Shop->user_id=$request->user_id;
        $Shop->RouteID=$request->RouteID;
        $user=Route::find($request->input('RouteID'));
        $user1=$user->user_id;
        $Shop->user_id=$user1;
        //shop::create($request->all());
        $Shop->save();
//        return redirect()->route('shop.index')->with('add','Record Added');

        return view('Shop.autocomplete');

    }

    public function getshoplocation(Request $request)
    {

        $s_id = DB::table('shops')->orderBy('ShopID','DESC')->value('ShopID');
        $shop = Shop::find($s_id);
        if($shop){
            $shop->lat = $request->input('latitude');
            $shop->lng = $request->input('longitude');
            $shop->status='Completed';
            $shop->update();
            return redirect()->route('shop.index')->with('add','Record Added');
        }
        else{
            return "Not Found";
        }

    }


    public function frommap(Request $request)
    {
        return view('Shop.frommap');

    }

    public function shopstorefinal(Request $request)
    {
        $s_id = DB::table('shops')->orderBy('ShopID','DESC')->value('ShopID');
        $shop = Shop::find($s_id);
        if($shop){
            $shop->lat = $request->input('lat');
            $shop->lng = $request->input('lng');
            $shop->status='Completed';
            $shop->update();
            return redirect()->route('shop.index')->with('add','Record Added');
        }
        else{
            return "Not Found";
        }

    }




    public function editshoplocation(Request $request)
    {
     return view('Shop.editlocation');

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
            $Shop->lat=$request->lat;
            $Shop->lng=$request->lng;
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
            $Shop->district=$request->district;
            $Shop->source='Mobile User';
            $Shop->status='Partially Completed';
            $Shop->registered_date= Carbon::now();
            $Shop->due_dates=15;
            $Shop->telephone_numbers=$request->telephone_numbers;
            $Shop->user_id=$request->user_id;
            $Shop->RouteID=$request->RouteID;
            $Shop->save();
        if ($Shop) {
            return ["Result" => "Shop has been saved"];
        } else {
            return ["Result" => "Operation failed"];
        }

        }




    public function mobileshopaddwi(Request $request){


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
        $Shop->district=$request->district;
        $Shop->source='Mobile User';
        $Shop->status='Partially Completed';
        $Shop->registered_date= Carbon::now();
        $Shop->due_dates=15;
        $Shop->telephone_numbers=$request->telephone_numbers;
        $Shop->user_id=$request->user_id;
        $Shop->RouteID=$request->RouteID;
        $Shop->save();
        if ($Shop) {
            return ["Result" => "Shop has been saved"];
        } else {
            return ["Result" => "Operation failed"];
        }

    }





        public function orderlist($id){
            $order = DB::table('orders')->where('shop_ID',$id)->get();

//            return response()->json([
//                'data' =>$order,
//                ]);
            return $order;
        }

        public function orderdetails($id){

            $order = DB::table('order_products')
                ->join('products','order_products.product_ID','=','products.productID')
                ->where('order_products.OrderID',$id)
                ->select('order_products.OrderID','products.product_Name','order_products.quantity_per_product','order_products.discount_per_product')
                ->get();

            $return = DB::table('return_products')
                ->join('products','return_products.product_ID','=','products.productID')
                ->where('return_products.OrderID',$id)
                ->select('return_products.OrderID','products.product_Name','return_products.quantity_per_product')
                ->get();

            $orders = DB::table('orders')
                ->join('shops','orders.shop_ID','=','shops.ShopID')
                ->join('users','orders.user_id','=','users.userID')
                ->where('orders.OrderID',$id)
                ->select('orders.bill_value','users.first_name','shops.shop_name','users.last_name',
                    'orders.placed_date','orders.return_total','orders.final_bill')
                ->get();

            return response()->json([
//                'status code'=> 200,
                'description' =>$orders,
                'data'=>$order,
                'return'=>$return,
            ]);
//            return ([$order],[$orders]);

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

        public function order(Request $request){
        $order = new Order();
        $order->placed_date=Carbon::now();
        $user_id=$request-> input('userId');
        $order->bill_value=$request-> input('grandTotal');
        $order->discount=$request-> input('discount');
        $order->user_id=$request-> input('userId');
        $order->shop_ID=$request-> input('shopId');
        $order->save();

        $o_id=DB::table('orders')
            ->where('user_id',$user_id)
            ->orderBy('OrderID','DESC')
            ->value('OrderID');


            $productDetails=$request->input('productDetails');

            $i=0;
            for($i=0;$i<count($productDetails);$i++){

                $orderprd = new OrderProduct();
                $orderprd->OrderID=$o_id;
                $orderprd->product_ID=$productDetails[$i]['productId'];
                $orderprd->quantity_per_product=$productDetails[$i]['productQuantity'];
                $orderprd->save();
            }

        }




    public function orderWithReturns(Request $request,$id)
    {
        $order = new Order();
        $order->placed_date = Carbon::now();
        $user_id = $request->input('userId');
        $order->bill_value = $request->input('grandTotal');
        $order->discount = $request->input('discount');
        $order->user_id = $request->input('userId');
        $order->shop_ID = $request->input('shopId');
        $order->return_total = $request->input('returnTotal');
        $order->final_bill = $request->input('billValue');
        $order->save();

        $o_id = DB::table('orders')
            ->where('user_id', $user_id)
            ->orderBy('OrderID', 'DESC')
            ->value('OrderID');

//for order products table
        $productDetails = $request->input('productDetails');

        $i = 0;
        for ($i = 0; $i < count($productDetails); $i++) {

            $orderprd = new OrderProduct();
            $orderprd->OrderID = $o_id;
            $orderprd->product_ID = $productDetails[$i]['productId'];
            $orderprd->quantity_per_product = $productDetails[$i]['productQuantity'];

            $orderprd->save();

            $StockID =  DB::table('vehicle_stock')
                ->where('user_id', $id)
                ->where('product_ID',$productDetails[$i]['productId'])
                ->value('stock_id');

            $stock = VehicleStock::find($StockID);
            $stock->quantity_per_product -= ($productDetails[$i]['productQuantity']);
            $stock->update();



        }
//for return products table
            $returnProductDetails = $request->input('returnProductDetails');

            $i = 0;
            for ($i = 0; $i < count($returnProductDetails); $i++) {

                $orderreturn = new ReturnProduct();
                $orderreturn->OrderID = $o_id;
                $orderreturn->product_ID = $returnProductDetails[$i]['productId'];
                $orderreturn->quantity_per_product = $returnProductDetails[$i]['returnQuantity'];
                $orderreturn->save();
            }

        return response()->json([
            'message'=>'save successfully'
        ]);
    }















    public function getallorders(Request $request,$id)
    {
        $orderreport = DB::table('orders')
            ->select(DB::raw('count(OrderID) as numOfBills'),DB::raw('sum(bill_value) as totalValue'))
            ->whereBetween('placed_date',[$request->input('start_date'),$request->input('end_date')])
            ->where('user_id',$id)
            ->get();

        return $orderreport;
    }






    public function totalitems(Request $request,$id)
    {
        $productreport = DB::table('order_products')
            //->select(DB::raw('count(OrderID) as num'),DB::raw('sum(bill_value) as total'))

            ->join('orders','order_products.OrderId','=','orders.OrderID')
            ->join('products','order_products.product_ID','=','products.productID')

            ->select('order_products.product_ID',
                'products.product_Name',
                DB::raw('sum(order_products.quantity_per_product) as quantity'),
                DB::raw('sum(order_products.quantity_per_product * products.sales_price) as total'))

            ->whereBetween('orders.placed_date',[$request->input('start_date'),$request->input('end_date')])
            ->where('orders.user_id',$id)
            ->groupBy('order_products.product_ID','products.product_Name')
            ->get();
        return $productreport;
    }




    public function billsfromshops(Request $request,$id)
    {
        $billsfromshops = DB::table('orders')
//            ->join('order_products','orders.OrderId','=','order_products.OrderID')
            ->join('shops','orders.shop_ID','=','shops.ShopID')
            ->select('shops.shop_name',DB::raw('count(OrderID) as numOfBills'),DB::raw('sum(bill_value) as totalValue'))
            ->whereBetween('placed_date',[$request->input('start_date'),$request->input('end_date')])
            ->where('orders.user_id',$id)
            ->groupBy('shops.shop_name')
            ->get();

        return $billsfromshops;
    }

    public function viewShopsForRoute($id,$id2){
        $shops = DB::table('shops')
            ->where('user_id',$id)
            ->where('RouteID',$id2)
            ->get();
        return $shops;

    }




    public function onlyimage(Request $request){

        $s_id = DB::table('shops')->orderBy('ShopID','DESC')->value('ShopID');
        $Shop = Shop::find($s_id);
        if($Shop){

                $file=$request->file('avatar');
                $extension=$file->getClientOriginalExtension();//get image extension
                $filename= time().'.'.$extension;
                $file->move('uploads/shop',$filename);
                $Shop->image=$filename;

            $Shop->update();
            return ["success"];
        }
        else{
            return ["Not Found"];
        }

    }




}




