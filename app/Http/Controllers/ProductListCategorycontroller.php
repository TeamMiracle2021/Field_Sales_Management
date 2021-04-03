<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use PDF;

class ProductListCategorycontroller extends Controller
{
    //
    function show(){
        $data=  DB:: table('categories') 
        ->Join('products','categoryID',"=",'products.category_id')
// ->groupBy('category_id');
->get();
return view('categoryreport',['data'=>$data]);

    }

    
    public function downloadPDF(){
        $data=  DB:: table('categories') 
        ->Join('products','categoryID',"=",'products.category_id')
         
        ->get();

        $pdf=PDF::loadView('categoryreport',compact('data'));
        return $pdf->download('categoryreport.pdf');

    }

    public function search( ){

        $search_text=$_GET['query'];
        $data=  DB:: table('categories') 
        ->Join('products','categoryID',"=",'products.category_id')
         
       
  
       ->where('category_name','LIKE','%'.$search_text.'%')
       ->orwhere('product_Name','LIKE','%'.$search_text.'%') 
       ->get();
       
        return view('categoryreport',compact('data'));
 
       
 
   }
}
