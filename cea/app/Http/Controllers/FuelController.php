<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class FuelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fuel = \App\Fuel::paginate(20);
    //    var_dump($categories);
       $data["fuel"] = $fuel ;
        return view('fuel.index',$data);//We should create folder called "Category" and file called 'index.blade.php'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('fuel.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $fuel  = new \App\Energy_reqt();
        $fuel ->fueltype = $request->get("fueltype");
        $fuel ->purpose = $request->get("purpose");
        $fuel ->fuelconsumption = $request->get("fuelconsumption");
        $fuel->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($fid)
    {
        $fuel = \App\Fuel::find($fid);
        $data["fuel"] = $fuel;
        
        return view('fuel.show',$data);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($fid)
    {
        $fuel = \App\Fuel::find($fid);
        $data["fuel"] = $fuel;
        
        return view('fuel.edit',$data);//
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
