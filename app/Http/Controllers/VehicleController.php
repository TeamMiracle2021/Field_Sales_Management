<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Vehicle;
use App\Models\User;
use App\Http\Controllers\Controller;
use App\Models\VehicleStock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class VehicleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $vehicle =Vehicle::get();
        return view('vehicle.Index')->with(compact('vehicle'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('vehicle.Add')->with('users',$users);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'vehicle_no'=>'required',
            'capacity'=>'required',
            'description'=>'required'

        ],[
            'vehicle_no.required' =>'Vehicle no is required',
            'capacity.required'=> 'Capacity is required',
            'description.required'=> 'description is required'

        ]);


        if($validateData) {

            $vehicle = new Vehicle();
            $vehicle->vehicle_no = $request->vehicle_no;
            $vehicle->capacity = $request->capacity;
            $vehicle->description = $request->description;
            $vehicle->save();

            $user = User::find($request->input('user_id'));

            $v_id = DB::table('vehicles')
               ->orderBy('vehicle_ID', 'DESC')
                ->value('vehicle_ID');

            $user->vehicle_ID = $v_id;
            $user->update();


            return redirect()->route('vehicle.index')->with('add', 'Vehicle added  successfully!');
        }else{
            return "Validation failed";
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function show(Vehicle $vehicle)
    {
//        dd($vehicle->vehicle_ID);

        $user = DB::table('vehicles')
            ->join('users','vehicles.vehicle_ID','=','users.vehicle_ID')
            ->get();

        $products = DB::table('vehicle_stock')
            ->join('products','vehicle_stock.product_ID','=','products.productID')
            ->join('users','vehicle_stock.user_id','=','users.userID')
            ->join('vehicles','users.vehicle_ID','=','vehicles.vehicle_ID')
            ->select('products.product_Name','vehicle_stock.quantity_per_product')
            ->where('users.vehicle_ID','=',$vehicle->vehicle_ID)
            ->get();

//        dd($products);
        return view('vehicle.show')->with('user',$user)->with('products',$products);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function edit(Vehicle $vehicle)
    {
        $user = DB::table('vehicles')
            ->join('users','vehicles.vehicle_ID','=','users.vehicle_ID')
            ->get();
//        dd($user);
        return view('vehicle.Edit', compact('vehicle'))->with('user',$user);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vehicle $vehicle)
    {
        $this->Validate($request,[
            'vehicle_no'=>'required',
            'capacity'=>'required',
            'description'=>'required'

        ],[
            'vehicle_no.required' =>'Vehicle no is required',
            'capacity.required'=> 'Capacity is required',
            'description.required'=> 'description is required'

        ]);


        $vehicle->update($request->all());

        return redirect()->route('vehicle.index')->with('add', 'Data updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Vehicle  $vehicle
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vehicle $vehicle)
    {
        $vehicle->delete();
        return redirect()->route('vehicle.index')->with('alert', 'Vehicle deleted successfully!');
    }



    public function addVehicleStock($id)
    {
        $product = Product::get();
        $vehicle = Vehicle::find($id);

        $user = DB::table('users')
            ->join('vehicles','vehicles.vehicle_ID','=','users.vehicle_ID')
            ->select('vehicles.vehicle_no','users.userID','users.first_name','users.middle_name','users.last_name')
            ->where('vehicles.vehicle_ID','=',$id)
            ->get();


        return view('vehicle.addStockVehicle')
            ->with('vehicle',$vehicle)
            ->with('product',$product)
            ->with('user',$user);
    }


    public function saveVehicleStock(Request $request,$id)
    {


        $products=$request->input('products');
        $qty=$request->input('quantities');
        $u_id = $id;

        for ($i = 0; $i < count($products); $i++) {

            $stockID = DB::table('vehicle_stock')
                ->where('user_id', $u_id)
                ->where('product_ID', $products[$i])
                ->value('stock_id');

            if ($stockID) {
                $stock = VehicleStock::find($stockID);
                $stock->quantity_per_product += $qty[$i];
                $stock->update();
            } else {

                $newstock = new VehicleStock();
                $newstock->user_id = $u_id;
                $newstock->product_ID = $products[$i];
                $newstock->quantity_per_product = $qty[$i];
                $newstock->save();
            }
                $quantity = DB::table('products')
                    ->where('productID', $products[$i])
                    ->value('qty');

                $newquantity = $quantity - ($qty[$i]);

                $product = Product::find($products[$i]);
                $product->qty = $newquantity;
                $product->update();

            }

        return redirect()->route('vehicle.index')->with('alert', 'Stock Added for Vehicle successfully!');
;
    }



    public function viewQty($id){
        $products = DB::table('vehicle_stock')
            ->join('products','vehicle_stock.product_ID','=','products.productID')
            ->select('products.product_Name','vehicle_stock.quantity_per_product')
            ->where('user_id','=',$id)
            ->get();

        $vehicle = DB::table('vehicles')
            ->join('users','vehicles.vehicle_ID','=','users.vehicle_ID')
            ->select('users.first_name','users.last_name','vehicles.vehicle_no')
            ->where('users.userID','=',$id)
            ->get();

        return response(['products'=>$products,'vehicle'=>$vehicle]);
    }


public function jquery(){
        return view('vehicle.testjQ');
}


    public function jtest(){
        return view('vehicle.testjQ');
    }




}
