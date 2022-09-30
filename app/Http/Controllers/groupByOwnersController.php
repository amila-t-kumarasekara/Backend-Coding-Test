<?php

namespace App\Http\Controllers;

use App\Models\groupByowners;
use Illuminate\Http\Request;

class groupByOwnersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\groupByowners  $groupByowners
     * @return \Illuminate\Http\Response
     */
    public function show(groupByowners $groupByowners)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\groupByowners  $groupByowners
     * @return \Illuminate\Http\Response
     */
    public function edit(groupByowners $groupByowners)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\groupByowners  $groupByowners
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, groupByowners $groupByowners)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\groupByowners  $groupByowners
     * @return \Illuminate\Http\Response
     */
    public function destroy(groupByowners $groupByowners)
    {
        //
    }

    public function challenge04(){

        $array = array(
            "insurance.txt" =>"Company A",
            "letter.docx" =>"Company A",
            "Contract.docx" =>"Company B"
        );


        $original_array=collect($array)
            ->groupBy(fn($value,$key)=>$value)
            ->map(fn($group)=>$group->values())
            ->all();


        return response()->json($original_array);
    }
}
