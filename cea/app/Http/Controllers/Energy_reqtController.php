<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class Energy_reqtController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $energy_reqt = \App\Energy_reqt::all();
    //    var_dump($categories);
       $data["energy_reqt"] = $energy_reqt;
        return view('energy_reqt.index',$data);//We should create folder called "Category" and file called 'index.blade.php'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('energy_reqt.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        $input = $request::all();
//        \App\Category::create($input);
//        return redirect()->back();
        $energy_reqt = new \App\Energy_reqt();
        $energy_reqt->totalenergyconsumption_inplantgeneration = $request->get("totalenergyconsumption_inplantgeneration");
        $energy_reqt->totalenergyconsumption_publicsupply = $request->get("totalenergyconsumption_publicsupply");
        $energy_reqt->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($er_id)
    {
        $energy_reqt = \App\Energy_reqt::find($er_id);
        $data["energy_reqt"] = $energy_reqt;
        
        return view('energy_reqt.show',$data);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($er_id)
    {
        $energy_reqt = \App\Energy_reqt::find($er_id);
        $data["energy_reqt"] = $energy_reqt;
        
        return view('energy_reqt.edit',$data);//
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
