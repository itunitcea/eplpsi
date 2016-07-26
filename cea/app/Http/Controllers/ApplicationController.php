<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Pagination\Paginator;
use App\Application;

use App\Http\Requests;

class ApplicationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {      
         $epl_licence = \App\Application::all();
    //    var_dump($categories);
       $data["epl_licence"] = $epl_licence;
        return view('application.index',$data);//We should create folder called "Category" and file called 'index.blade.php'
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('application.create');//
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    // store industry
//        $industry->Industry::find($industryID)->where('industryID','400')->first('industryName);
        $epl_licence = new \App\Application();
        $epl_licence->appDate = $request->get("appDate");
        $epl_licence->applicationtype = $request->get("applicationtype");
        $epl_licence->ApplicantName = $request->get("ApplicantName");
        $epl_licence->Address = $request->get("Address");
        $epl_licence->AddLine1 = $request->get("AddLine1");
        $epl_licence->AddLine2 = $request->get("AddLine2");
        $epl_licence->ContactNo = $request->get("ContactNo");
        $epl_licence->save();
        
        return redirect()->back();
//        return view('application.store');//
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($applicationID)
    {
        $epl_licence = \App\Application::find($applicationID);
        $data["epl_licence"] = $epl_licence;
        
        return view('application.show',$data);//
//        return view('application.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($applicationID)
    {
        $epl_licence = \App\Application::find($applicationID);
        $data["epl_licence"] = $epl_licence;
        
        return view('application.edit',$data);//
//        return view('application.show');
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

