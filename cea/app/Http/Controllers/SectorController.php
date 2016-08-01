<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Session;

class SectorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sector = \App\Sector::paginate(20);
        var_dump($sector);
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
        $sec->sdescription = $request->get("sdescription");
        $sec->Alistnorange = $request->get("Alistnorange");
        $sec->Blistnorange = $request->get("Blistnorange");
        $sec->Clistnorange = $request->get("Clistnorange");
        $sec->save();
        Session::flash('message','success');
        Session::flash('alert-class','alert-success');
        return redirect('/sector');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($scode)
    {
        $sector = \App\Sector::find($scode);
        $data["sector"] = $sector;
        
        return view('sector.show',$data);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($scode)
    {
        $sector = \App\Sector::find($scode);
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
