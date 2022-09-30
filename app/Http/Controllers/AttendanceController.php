<?php

namespace App\Http\Controllers;

use App\Models\Attendance;
use Illuminate\Http\Request;

class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $view = attendance::select('Name','Checkin','Checkout')->get();

        return response()->json(
            $view
        );
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->input();

        foreach($data as $key => $value){
            $data = new attendance;
            $data->name = $value['Name'];
            $data->checkin = $value['Checkin'];
            $data->checkout = $value['Checkout'];
            $data->save();
        }

        return response()->json([
            'status' => 200,
        ]);
        
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

    public function challenge02(Request $request){
        $num=$request->N;
        $num--;

        $arr = array();

        for ($x = 0; $x < $num; $x++) {
            $arr[] = $x;
        }
        $num++;

        for ($x = 0; $x < $num; $x++) {
            $newarr[]=rand($arr[0],end($arr));
        }

        $value=array_unique( array_diff_assoc( $newarr, array_unique( $newarr ) ) );
        $value = array_values($value);
        return response()->json(array('array'=>$newarr,'occur more than once'=>$value));

    }
}
