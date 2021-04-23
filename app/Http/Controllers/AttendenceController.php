<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AttendenceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function store(Request $request,$id)
    {
        $attendance = new Attendance();
        $attendance->check_in_time = Carbon::now();
        $attendance->user_id = $id;

        $attendance->save();

        return response()->json([
            'status code'=> 200,
            'message'=>'Check in time added successfully'
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function show(Attendance $attendance)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function edit(Attendance $attendance)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Attendance  $attendance
     * @return string
     */
    public function update(Request $request,$id)
    {
        $a_id = DB::table('attendances')->where('user_id',$id)->orderBy('attdnce_ID','DESC')->value('attdnce_ID');
        echo($a_id);
        $attendance = Attendance::find($a_id);
        if($attendance){
            $attendance->check_out_time = Carbon::now();
            $attendance->update();
            return response()->json([
               'status code'=> 200,
               'message'=>'Check out added successfully'
            ]);
        }
        else{
            return "Not Found";
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Attendance  $attendance
     * @return \Illuminate\Http\Response
     */
    public function destroy(Attendance $attendance)
    {
        //
    }

    public function attreport(){
        $att =Attendance::get();
        return view('reports.attreport')->with (compact('att'));
    }



}
