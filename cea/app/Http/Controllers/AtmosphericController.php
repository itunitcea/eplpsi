<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;

class AtmosphericController extends Controller {

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $atmospheric_emission = \App\AtmosphericEmission::paginate(20);
        //    var_dump($categories);
        $data["atmospheric_emission"] = $atmospheric_emission;
        return view('atmosphericEmission.index', $data);
//        return view('atmosphere.index'); //we should create folder called "category" and file called"index.blade.php"
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('atmosphericEmission.create'); //we should create file called "create.blade.php"
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        $atmospheric_emission = new \App\AtmosphericEmission();
        $atmospheric_emission->nitrogenOxide = $request->get("nitrogenOxide");
        $atmospheric_emission->sulfurOxide = $request->get("sulfurOxide");
        $atmospheric_emission->dustAndSoot = $request->get("dustAndSoot");
        $atmospheric_emission->other = $request->get("other");
        $atmospheric_emission->noOfStacks = $request->get("noOfStacks");
        $atmospheric_emission->height = $request->get("height");
        $atmospheric_emission->causedOdorProblems = $request->get("causedOdorProblems");
        $atmospheric_emission->source = $request->get("source");
        $atmospheric_emission->modeofabatement = $request->get("modeofabatement");
        $atmospheric_emission->save();
        
        return redirect()->back();
//        return view('atmosphere.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($ai_id) {
//        return view('atmosphere.show');
        $atmospheric_emission = \App\AtmosphericEmission::find($ai_id);
        $data["atmospheric_emission"] = $atmospheric_emission;
        
        return view('atmosphericEmission.show',$data);//
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($ai_id) {
        $atmospheric_emission = \App\AtmosphericEmission::find($ai_id);
        $data["atmospheric_emission"] = $atmospheric_emission;
        
        return view('atmosphericEmission.edit',$data);//
//        return view('atmosphere.edit');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id) {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id) {
        //
    }

}
