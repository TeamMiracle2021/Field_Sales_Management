<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function Couchbase\defaultDecoder;
Use App\Models\User;

class RouteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $route = route::get();
//        $route = route::paginate(6);
        return view('Route.index')->with(compact('route'));
//        return view('Route.index',compact('route'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users = User::all();
        return view('Route.create')->with('users', $users);
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
            'route_name'=>'required',
            'start_lat' =>'required|numeric',
            'start_lng'=>'required|numeric',
            'end_lat'=>'required|numeric',
            'end_lng'=>'required|numeric',
            'user_id' =>'required'

        ],[
            'route_name.required' => 'Route name is required',
            'start_lat.required' => 'Start point latitude is required',
            'start_lng.required' => 'Start point latitude is required',
            'end_lat.required' => 'End point latitude is required',
            'end_lng.required' => 'End point longitude is required',
            'user_id.required' => 'User is required'

        ]);

        Route:: create($validateData);
//       Route::create($request->all());

        return redirect()->route('route.index')->with('add','Record Added');



    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        return view('Route.show',compact('route'));
//        return view('reports.productreport');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        $users = User::all();
        return view('route.edit',compact('route'))->with('users', $users);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Route $route)
    {
        $validateData = $request->validate([
            'route_name'=>'required',
            'start_lat' =>'required|numeric',
            'start_lng'=>'required|numeric',
            'end_lat'=>'required|numeric',
            'end_lng'=>'required|numeric',
            'user_id' =>'required'

        ],[
            'route_name.required' => 'Route name is required',
            'start_lat.required' => 'Start point latitude is required',
            'start_lng.required' => 'Start point latitude is required',
            'end_lat.required' => 'End point latitude is required',
            'end_lng.required' => 'End point longitude is required',
            'user_id.required' => 'User is required'

        ]);



        $route->update($validateData);
        return redirect()->route('route.index')->with('add','Record Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function destroy(Route $route)
    {
        $route->delete();
        return redirect()->route('route.index')->with('add','Record Deleted');
    }



    public function routereport()
    {
        $route = route::get();
        return view('reports.routereport',compact('route'));
    }







    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $rout,compact('route')e
     * @return \Illuminate\Http\Response
     */
    public function show2($id)
    {
        $route = Route::find($id);
        return view('maps.mapview')->with('route', $route);
    }






    public function getlatlng()
    {
        return view('maps.getlatlng');
    }




//    -------------------------API----------------------------
    public function show3($id)
    {
        $route = Route::find($id);
//        return response()->json($route);
        return response()->json($route->shops);
    }


    public function storemobile(Request $request)
    {
        Route::create($request->all());
    }

    public function viewroutes($id){
        $routes  = DB::table('routes')->where('user_id',$id)->get();
        return $routes;
    }

    public function viewroute($id){
        $route = new Route();
        $route->details  = DB::table('routes')->where('RouteID',$id)->get();
        $route->waypoints = DB::table('shops')
            ->where('RouteID',$id)
            ->select('shop_name','lat','lng')
            ->get();
//        $route->waypoints->lat = DB::table('shops')->where('RouteID',$id)->value('lat');
//        $route->waypoints->lng = DB::table('shops')->where('RouteID',$id)->value('lng');


        return $route;
    }

}
