<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use PDF;

class productreportcontroller extends Controller
{
    function dboparation(){
        // $ =DB::table('products')->get();
        // return view('productreport',['data'=>$data]);

        $data = DB::table('products') 
        // ->whereBetween('cost_price', array(1, 160))->get();
                 ->get();
                return view('productreport',['data'=>$data]);
    }

    
    public function search(Request $request){

        // $search_text=$_GET['query'];
        // $dat = DB::table('products')
        // ->where('product_Name','LIKE','%'.$search_text.'%')->get();
        // return view('search',compact('dat'));

        $fromDate = $request->input('fromDate');
        $toDate   = $request->input('toDate');

        $dat = DB::table('products')
        ->where('Expire_date', '>=', $fromDate)
        ->where('Expire_date', '<=', $toDate)
        ->get();
       // dd($dat);
        return view('search',compact('dat'));

    }

    public function downloadPDF(){
        $dat = DB::table('products')

        
        
        ->get(); 
        $pdf=PDF::loadView('search',compact('dat'));
        return $pdf->download('productReport.pdf');

    }
}
