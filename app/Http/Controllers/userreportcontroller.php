<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
Use PDF;

class userreportcontroller extends Controller
{
   function dboparationa(){
      $data= DB::table('users') ->get();
    return view('Userreport',['data'=>$data]);
}


public function downloadPDFU(){
   $data = DB::table('users')
   // ->where('cost_price', '=', 123)
   ->get();
   $pdf=PDF::loadView('Userreport',compact('data'));
   return $pdf->download('UserReport.pdf');

}

public function search( ){

   $search_text=$_GET['query'];
   $data= DB::table('users')

  ->where('first_name','LIKE','%'.$search_text.'%') 
  ->orWhere('last_name','LIKE','%'.$search_text.'%')
  ->orWhere('NIC','LIKE','%'.$search_text.'%')
  ->orWhere('Address','LIKE','%'.$search_text.'%')
  ->orWhere('Gender','LIKE','%'.$search_text.'%')
  ->orWhere('email','LIKE','%'.$search_text.'%')
  ->orWhere('branch_name','LIKE','%'.$search_text.'%')
  
  
  ->get();
  
   return view('Userreport',compact('data'));

  

}
   }  
   
