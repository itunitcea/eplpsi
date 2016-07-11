<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class InspectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //return view('inspection.index');//We should create folder called "inspection" and file called 'index.blade.php'
        $inspection = \App\Inspection::all();
    //    var_dump($categories);
       $data["inspections"] = $inspection;
        return view('inspection.index',$data);//We should create folder called "inspection" and file called 'index.blade.php'
    
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('inspection.çreate');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $insp = new \App\Inspection();
        $insp->nameOfInspectionOfficer = $request->get("officerName");
        $insp->inspectiondate = $request->get("inspectionDate");
        $insp->inspectionSatus = $request->get("inspectionSatus");
        $insp->reason = $request->get("inspectionReason");
        $insp->save();
        
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
        //return view('inspection.show');//
        $inspection = \App\Inspection::find($id);
        $data["inspection"] = $inspection;
        
        return view('inspection.show',$dsata);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $inspection = \App\Inspection::find($id);
        $data["inspection"] = $inspection;
        
        return view('inspection.edit',$data);//
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
