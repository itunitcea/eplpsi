<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class WaterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $water = \App\Water::paginate(20);
    //    var_dump($categories);
       $data["water"] = $water;
        return view('water.index',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('water.create'); //we should create file called "create.blade.php"
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $water = new \App\Water();
        $water->wr_processing = $request->get("wr_processing");
        $water->wr_cooling = $request->get("wr_cooling");
        $water->wr_washing = $request->get("wr_washing");
        $water->wr_domestic = $request->get("wr_domestic");
        $water->swater_publicsupply = $request->get("swater_publicsupply");
        $water->swater_groundwater = $request->get("swater_groundwater");
        $water->swater_sufacewater = $request->get("swater_sufacewater");
        $water->totaldailydischargewwater = $request->get("totaldailydischargewwater");
        $water->totaldisDome = $request->get("totaldisDome");
        $water->totaldisIndu = $request->get("totaldisIndu");
        $water->discharge_method = $request->get("discharge_method");
        $water->finalpointofDischarge_ww = $request->get("finalpointofDischarge_ww");
       
        $water->save();
        
        return redirect()->back();
//        return view('water.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($w_id)
    {
//      return view('water.show');  
        $water = \App\Water::find($w_id);
        $data["water"] = $water;
        
        return view('water.show',$data);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($w_id)
    {
        $water = \App\Water::find($w_id);
        $data["water"] = $water;
        
        return view('water.edit',$data);//
//        return view('water.edit');
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
}


