<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use PDF;

class returncontroller extends Controller
{
    //
    function show(){
        $data=  DB:: table('returns') 
      // ->Join('return_products','returns.product_ID',"=",'returns.productID')
    ->Join('shops','shops.ShopID',"=",'returns.shop_ID')
  //  ->Join('return_products','returnID ',"=",'return_products.returnID')
// ->groupBy('category_id');
->get();
return view('return',['data'=>$data]);

    }


    public function downloadPDF(){
        $data=  DB:: table('returns') 
        // ->Join('return_products','returns.product_ID',"=",'returns.productID')
      ->Join('shops','shops.ShopID',"=",'returns.shop_ID')
    //  ->Join('return_products','returnID ',"=",'return_products.returnID')
  // ->groupBy('category_id');
  ->get();

        $pdf=PDF::loadView('return',compact('data'));
        return $pdf->download('return.pdf');

    }


    public function search( ){

       $search_text=$_GET['query'];
       $data=  DB:: table('returns') 
       // ->Join('return_products','returns.product_ID',"=",'returns.productID')
     ->Join('shops','shops.ShopID',"=",'returns.shop_ID')
   //  ->Join('return_products','returnID ',"=",'return_products.returnID')
 // ->groupBy('category_id');
 
      ->where('shop_name','LIKE','%'.$search_text.'%')->get();
      
       return view('return',compact('data'));

      

  }
}
