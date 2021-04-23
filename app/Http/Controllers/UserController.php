<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use App\Models\UserType;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user =User::get();

        return view('users.index')->with(compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usertypes = UserType::all();
        return view('users.create')->with('usertypes',$usertypes);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $request->validate([
//            'first_name' => ['bail','required', 'string', 'max:255','alpha'],
//            'middle_name' => ['bail','string', 'max:255',],
//            'last_name' => ['bail','required', 'string', 'max:255','alpha'],
//            'NIC' => ['bail','required', 'string', 'min:10','max:12'],
//            'Address' => ['bail','required', 'string', 'max:255'],
//            'telephone_number' => ['bail','required','regex:/^([0-9\s\-\+\(\)]*)$/','max:10','min:10'],
//            'Gender' => ['bail','required', 'string'],
//            'Date_Of_Birth' => ['bail','required', 'date'],
//            'branch_name' => ['bail','required', 'string', 'max:255'],
//            'user_typeID' => ['bail','required'],
//            'email' => [
//                'bail',
//                'required',
//                'string',
//                'email',
//                'max:255',
////                Rule::unique(CreateUser::class),
//            ],
//            'password' => ['required',
//                'min:6',
//                'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
//                'confirmed']
//        ]);

        User::create([
            'first_name' => $request['first_name'],
            'middle_name' => $request['middle_name'],
            'last_name' => $request['last_name'],
            'NIC' => $request['NIC'],
            'Address' => $request['Address'],
            'telephone_numbers' => $request['telephone_number'],
            'Gender' => $request['Gender'],
            'Date_Of_Birth' => $request['Date_Of_Birth'],
            'branch_name' => $request['branch_name'],
            'user_typeID' => $request['user_typeID'],
            'email' => $request['email'],
            'username' => $request['username'],
            'approvel_state' => $request['approvel_state'],
            'password' => Hash::make($request['password']),
        ]);

        return redirect()->route('user.index')->with('add','A new user is added successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }






//    -------------------------API----------------------

    public function findusers($id)
    {
        $user = User::find($id);
        return response()->json($user);

    }









}
