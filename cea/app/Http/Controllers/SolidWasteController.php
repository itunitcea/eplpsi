<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class SolidWasteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
//        return view('solidwaste.index'); //we should create folder called "category" and file called"index.blade.php"
        $solidwaste = \App\SolidWaste::paginate(20);
    //    var_dump($categories);
        $data["solidwaste"] = $solidwaste;
        return view('solidWaste.index',$data);//We should create folder called "Category" and file called 'index.blade.php'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('solidWaste.create'); //we should create file called "create.blade.php"
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        return view('solidwaste.store');
        $sw = new \App\SolidWaste();
        $sw->natureOfSolidWaste = $request->get("swType");
        $sw->total_qty_sw = $request->get("swqty");
        $sw->sw_disposal_method = $request->get("swdisposal");
        $sw->save();
        
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($sw_id)
    {
        $solidwaste = \App\SolidWaste::find($sw_id);
        $data["solidwaste"] = $solidwaste;
        
        return view('solidWaste.show',$data);//
//      return view('solidWaste.show');  
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($sw_id)
    {
        $solidwaste = \App\SolidWaste::find($sw_id);
        $data["solidwaste"] = $solidwaste;
        
        return view('solidWaste.edit',$data);//
//        return view('solidwaste.edit');
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

