<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use PDF;
class ShopListunproductivecontroller extends Controller
{
    //

    function show(){
        $data=  DB:: table('shops') 
        ->Join('shop_unproductives','ShopID',"=",'shop_unproductives.shop_ID')
        // ->groupBy('category_id');
        ->get();
       return view('unproductives',['data'=>$data]);

       
        
            
    }

    public function downloadPDF(){
        $data=  DB:: table('shops') 
        ->Join('shop_unproductives','ShopID',"=",'shop_unproductives.shop_ID')
        // ->groupBy('category_id');
        ->get();

        $pdf=PDF::loadView('unproductives',compact('data'));
        return $pdf->download('unproductives.pdf');

    }

    public function search( ){

        $search_text=$_GET['query'];
        $data=  DB:: table('shops') 
        ->Join('shop_unproductives','ShopID',"=",'shop_unproductives.shop_ID')
       ->where('shop_name','LIKE','%'.$search_text.'%')
       ->orwhere('unproductive_reason','LIKE','%'.$search_text.'%') 
       ->get();
       
        return view('unproductives',compact('data'));
 
       
 
   }
}
