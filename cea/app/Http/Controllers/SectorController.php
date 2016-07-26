<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sector = \App\Sector::all();
    //    var_dump($categories);
        $data["sector"] = $sector;
        return view('sector.index',$data);//We should create folder called "Category" and file called 'index.blade.php'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('sector.create');//
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
        $sec = new \App\Sector();
        $sec->scode = $request->get("scode");
        $sec->sdescription = $request->get("sdescriotion");
        $sec->Alistnorange = $request->get("Alistnorange");
        $sec->Blistnorange = $request->get("Blistnorange");
        $sec->Clistnorange = $request->get("Clistnorange");
        $sec->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $sector = \App\Sector::find($id);
        $data["sector"] = $sector;
        
        return view('sector.show',$dsata);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sector = \App\Sector::find($id);
        $data["sector"] = $sector;
        
        return view('sector.edit',$data);//
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
