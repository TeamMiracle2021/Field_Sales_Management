<?php

namespace App\Http\Controllers;

use App\Models\CreateUser;
use Illuminate\Http\Request;
use App\Models\UserType;
// use App\Models\Role;

// copied from App\Fortify\Action

use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Password;

class UserCreateController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = CreateUser::get();
        return view('user.index')->with(compact('user'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $usertypes = UserType::all();
        return view('user.user')->with('usertypes',$usertypes);
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
            'first_name' => ['bail','required', 'string', 'max:255','alpha'],
            'middle_name' => ['bail','string', 'max:255',],
            'last_name' => ['bail','required', 'string', 'max:255','alpha'],
            'NIC' => ['bail','required', 'string', 'min:10','max:12'],
            'Address' => ['bail','required', 'string', 'max:255'],
            'telephone_number' => ['bail','required','regex:/^([0-9\s\-\+\(\)]*)$/','max:10','min:10'],
            'Gender' => ['bail','required', 'string'],
            'Date_Of_Birth' => ['bail','required', 'date'],
            'branch_name' => ['bail','required', 'string', 'max:255'],
            'user_typeID' => ['bail','required'],
            'email' => [
                'bail',
                'required',
                'string',
                'email',
                'max:255',
                Rule::unique(CreateUser::class),
            ],
            'password' => ['required',
            'min:6',
            // 'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[\d\x])(?=.*[!$#%]).*$/',
            // 'confirmed'
            ]
        ]);

        CreateUser::create([
            'first_name' => $request['first_name'],
            'middle_name' => $request['middle_name'],
            'last_name' => $request['last_name'],
            'NIC' => $request['NIC'],
            'Address' => $request['Address'],
            'telephone_number' => $request['telephone_number'],
            'Gender' => $request['Gender'],
            'Date_Of_Birth' => $request['Date_Of_Birth'],
            'branch_name' => $request['branch_name'],
            'user_typeID' => $request['user_typeID'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);

        Password::sendResetLink($request->only(['email']));

        return redirect()->route('user.index')->with('add','A new user is added successfully!');
    }
 

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CreateUser  $createUser
     * @return \Illuminate\Http\Response
     */
    public function show(CreateUser $user)
    {
        return view('user.userview',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CreateUser  $createUser
     * @return \Illuminate\Http\Response
     */
    public function edit(CreateUser $user)
    {
        // $user = UserType::find($user);
        return view('user.edit',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CreateUser  $createUser
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, CreateUser $user)
    {
        $user->update($request->all());
        return redirect()->route('user.index')->with('add','Record is updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CreateUser  $createUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(CreateUser $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('add','Record is deleted succesfully!');
    }
}
