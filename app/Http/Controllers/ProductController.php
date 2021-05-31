<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;
use App\Models\UserType;
use Session;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */





    //********************************************************************************   index  ********************************************************************************
    public function index()
    {
        $product = Product::get();
        return view('product.index')->with(compact('product'));
    }
    //**************************************************************************************************************************************************************************





    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */





    //********************************************************************************   create  *******************************************************************************
    public function create()
    {
        $users=User::all();
        $categories = Category::all();
        return view('product.createProduct')->with('categories', $categories)->with('users',$users);
    }
    //**************************************************************************************************************************************************************************


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   store  ********************************************************************************
    public function store(Request $request)
    {

        $validateData = $request->validate([
            'product_Name'=>'required',
            'cost_price'=>'required|numeric',
            'sales_price'=>'required|numeric',
            'labled_price'=>'required|numeric',
            'weight'=>'required|numeric',
             'category_id'=>'required'

        ],[
            'product_Name.required' =>'Product name is required',
            'cost_price.required'=> 'Cost price is required',
            'sales_price.required'=> 'Sales price is required',
            'labled_price.required'=> 'Labled price is required',
            'weight.required'=> 'Weight should be grams'


        ]);

        Product::create($validateData);
//        Product::create($request->all());

        return redirect()->route('product.index')->with('alert', 'Data added for product table successfully!'); //product=product = product kiyana folder name (views wala thiyana ) category= catagory.blade.php
        //return redirect('product.index')->with('add','Data added to product table successfully');
    }
    //**************************************************************************************************************************************************************************



    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   show  ********************************************************************************
    public function show(Product $product)
    {
        $user = User::all();
        return view('product.showProduct', compact('product'))->with('user',$user);
    }
    //**************************************************************************************************************************************************************************





    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   edit  ********************************************************************************
    public function edit(Product $product)
    {
        $categories=Category::all();
        return view('product.edit', compact('product'))->with('categories',$categories);

        //dd($product);
    }
    //**************************************************************************************************************************************************************************






    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   update  ********************************************************************************
    public function update(Request $request, Product $product)
    {
//        $product->update($request->all());
        //return redirect()->route('product.index');


        $this->Validate($request,[
            'product_Name'=>'required',
            'cost_price'=>'required|numeric',
            'sales_price'=>'required|numeric',
            'labled_price'=>'required|numeric',
            'weight'=>'required|numeric',
//            'Expire_date'=>'required',
            'category_id'=>'required'

        ],[
            'product_Name.required' =>'Product name is required',
            'cost_price.required'=> 'Cost price is required',
            'sales_price.required'=> 'Sales price is required',
            'labled_price.required'=> 'Labled price is required',
            'weight.required'=> 'Weightis required',
//            'Expire_date.required'=> 'Expire date is required',
            'category_id.required'=> 'category is required'

        ]);


                $product->update($request->all());

        return redirect()->route('product.index')->with('alert', 'Data updated for product table successfully!');


    }
    //***************************************************************************************************************************************************************************





    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Product  $product
     * @return \Illuminate\Http\Response
     */




    //********************************************************************************   destroy  ********************************************************************************
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('product.index')->with('alert', 'Data deleted from product table successfully!');
    }
    //***************************************************************************************************************************************************************************


    //********************************************************************************   destroy  ********************************************************************************
    public function search()
    {
        // $search_text = $_GET['query'];
        // $product = Product::where('product_Name', 'LIKE', '%'.$search_text.'%')->with('category')->get();
        // return view('product.search', compact('product'));
    }
    //***************************************************************************************************************************************************************************




    public function form()
    {
        return view('createProduct');
    }

    public function productPost(Request $request)
    {
        alert()->success('we will contact you soon')->persistent('Close')->autoclose(3500);
        return back();
    }








    public function productreport()
    {
        $product = Product::get();
        return view('reports.productreport')->with(compact('product'));
    }



    public function CsvImport (){

        $categories=Category::all();
        return view('product.CsvImport')->with('categories',$categories);
    }




    public function uploadFile(Request $request){


        $c_id=$request->category_id;

        if ($request->input('submit') != null ){

            $file = $request->file('file');

            // File Details
            $filename = $file->getClientOriginalName();
            $extension = $file->getClientOriginalExtension();
            $tempPath = $file->getRealPath();
            $fileSize = $file->getSize();
            $mimeType = $file->getMimeType();

            // Valid File Extensions
            $valid_extension = array("csv");

            // 2MB in Bytes
            $maxFileSize = 2097152;

            // Check file extension
            if(in_array(strtolower($extension),$valid_extension)){

                // Check file size
                if($fileSize <= $maxFileSize){

                    // File upload location
                    $location = 'csv';

                    // Upload file
                    $file->move($location,$filename);

                    // Import CSV to Database
                    $filepath = public_path($location."/".$filename);

                    // Reading file
                    $file = fopen($filepath,"r");

                    $importData_arr = array();
                    $i = 0;

                    while (($filedata = fgetcsv($file, 1000, ",")) !== FALSE) {
                        $num = count($filedata );

                        // Skip first row (Remove below comment if you want to skip the first row)
                        /*if($i == 0){
                           $i++;
                           continue;
                        }*/
                        for ($c=0; $c < $num; $c++) {
                            $importData_arr[$i][] = $filedata [$c];
                        }
                        $i++;
                    }
                    fclose($file);

                    // Insert to MySQL database
                    foreach($importData_arr as $importData){

                        $insertData = array(
                            "product_Name"=>$importData[0],
                            "cost_price"=>$importData[1],
                            "sales_price"=>$importData[2],
                            "labled_price"=>$importData[3],
                            "weight"=>$importData[4],
                            "category_id"=>$c_id,
                            "created_at"=>Carbon::now(),
                            "updated_at"=>Carbon::now()

                        );
                        Product::insertData($insertData);



                    }

                    Session::flash('add','Import Successful.');
                }else{
                    Session::flash('add','File too large. File must be less than 2MB.');
                }

            }else{
                Session::flash('add','Invalid File Extension.');
            }

        }

        // Redirect to index
        return redirect()->route('product.index');
    }











    //==============================================================API=======================================================

    public function viewcategories(){
        $categories = Category::get();
        return $categories;
    }

    public function viewcategoryproducts($id){
        $products = DB::table('products')->where('category_id',$id)->get();
        return $products;

    }

}
