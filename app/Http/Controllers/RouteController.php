<?php

namespace App\Http\Controllers;

use App\Models\Route;
use Illuminate\Http\Request;
use function Couchbase\defaultDecoder;

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
        return view('Route.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
           'route_name'=>'required'
        ]);

       Route::create($request->all());

        return redirect()->route('route.index')->with('add','Record Added');
      //  return view('Route.index');


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function show(Route $route)
    {
        return view('route.show',compact('route'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Route  $route
     * @return \Illuminate\Http\Response
     */
    public function edit(Route $route)
    {
        return view('route.edit',compact('route'));
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
        $route->update($request->all());
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


    public function addData(Request $request)
    {
        //
    }




}
