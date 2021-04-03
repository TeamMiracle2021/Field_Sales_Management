<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use PDF;

class RouteListCategorycontroller extends Controller
{
    //
    function show(){
        $data=  DB:: table('routes') 
        ->Join('shops','shop_ID',"=",'shops.ShopID')
        // ->groupBy('category_id');
        ->get();
       return view('routereport',['data'=>$data]);        
    }

    public function downloadPDF(){
        $data=  DB:: table('routes') 
        ->Join('shops','shop_ID',"=",'shops.ShopID')
        // ->groupBy('category_id');
        ->get();

        $pdf=PDF::loadView('routereport',compact('data'));
        return $pdf->download('routereport.pdf');

    }

    public function search( ){

        $search_text=$_GET['query'];
        $data=  DB:: table('routes') 
        ->Join('shops','shop_ID',"=",'shops.ShopID')
       ->where('route_name','LIKE','%'.$search_text.'%')
       ->orwhere('shop_name','LIKE','%'.$search_text.'%') 
       ->get();
       
        return view('routereport',compact('data'));
 
       
 
   }
}
