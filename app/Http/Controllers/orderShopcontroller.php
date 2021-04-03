<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use PDF;

class orderShopcontroller extends Controller
{
    function show(){
        $data=  DB:: table('orders') 
->Join('shops','shop_ID',"=",'shops.ShopID')
// ->groupBy('category_id');
->get();
return view('orderreport',['data'=>$data]);

    }

    public function search(Request $request){

        // $search_text=$_GET['query'];
        // $dat = DB::table('products')
        // ->where('product_Name','LIKE','%'.$search_text.'%')->get();
        // return view('search',compact('dat'));

        $fromDate = $request->input('fromDate');
        $toDate   = $request->input('toDate');

        $data=  DB:: table('orders') 
        ->Join('shops','shop_ID',"=",'shops.ShopID')
        ->where('placed_date', '>=', $fromDate)
        ->where('placed_date', '<=', $toDate)
        ->get();
       // dd($dat);
        return view('searchp',compact('data'));

    }

    public function downloadPDF(){
        $data=  DB:: table('orders') 
        ->Join('shops','shop_ID',"=",'shops.ShopID')

        
        
        ->get(); 
        $pdf=PDF::loadView('searchp',compact('data'));
        return $pdf->download('productorder.pdf');

    }
}
