<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class AtmoshericController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $atmospheric = \App\Atmosheric::all();
    //    var_dump($categories);
        $data["atmospheric"] = $atmospheric;
        return view('atmospheric.index',$data);//We should create folder called "Category" and file called 'index.blade.php'
//        return view('atmosheric.index'); //we should create folder called "category" and file called"index.blade.php"
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('atmosheric.create'); //we should create file called "create.blade.php"
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // industryID, epl_licence_id
        $atmospheric = new \App\Atmosheric();
        $atmospheric->nitrogenOxide = $request->get("nitrogenOxide");
        $atmospheric->sulfurOxide = $request->get("sulphureOxide");
        $atmospheric->dustAndSoot = $request->get("dustSoot");
        $atmospheric->other = $request->get("anyOther");
        $atmospheric->noOfStacks = $request->get("noOfChimneys");
        $atmospheric->height = $request->get("chimneyHeight");
        $atmospheric->causedOdorProblems = $request->get("isodour");
        $atmospheric->source = $request->get("odourSource");
        $atmospheric->modeofabatement = $request->get("abatement");
        
        // date updated
        $atmospheric->created_at = new DateTime();
        $atmospheric->updated_at = new DateTime();
        $atmospheric->save();
        
        return redirect()->back();
//        return view('atmosheric.store');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $atmospheric = \App\Atmosheric::find($id);
        $data["atmospheric"] = $atmospheric;
        
        return view('atmospheric.show',$dsata);//
//      return view('atmosheric.show');  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $atmospheric = \App\Atmosheric::find($id);
        $data["atmospheric"] = $atmospheric;
        
        return view('atmospheric.edit',$data);//
//        return view('atmosheric.edit');
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
