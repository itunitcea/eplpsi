<?php
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use \App\Industry;
use DB;

class IndustryController extends Controller
{
    /**
     * Show the profile for the given user.
     * @return Response
     */
    public function index()
    {
////        $industry = Industry::all();
////        return view(industry.index)->with('índustry',$industry);
//$industries = \App\Industry::all();
////        var_dump($categories); // to display errors
//        $data["industries"] = $industries;
//        return view('industry.index',$data);
        $industries = \App\Industry::all();
        $data["industries"] = $industries;
        return view('industry.index',$data);//We should create folder called "Category" and file called 'index.blade.php'
    }
    
    public function create()
    {
        return view('industry.create');
    }
    
      public function show($id)
    {
        $industry = \App\Industry::find($id);
        $data["industry"] = $industry;
        
        return view('industry.show',$data);//
    }
    
     public function edit($id)
    {
        $industry = \App\Industry::find($id);
        $data["industry"] = $industry;
        
        return view('industry.edit',$data);//
    }
    
     public function store(Request $request)
    {

        $ind = new \App\Industry();
        $ind->industryID = $request->get("industryID");
        $ind->language = $request->get("language");
        $ind->industryName = $request->get("industryName");
        $ind->industrytype = $request->get("industrytype");
        $ind->BOIregistration = $request->get("BOIregistration");
        $ind->eplcategoryid = $request->get("eplcategoryid");
        $ind->sector = $request->get("sector");
        $ind->industrynature = $request->get("industrynature");
        $ind->indadd1 = $request->get("indadd1");
        $ind->indadd2 = $request->get("indadd2");
        $ind->indadd3 = $request->get("indadd3");
        $ind->provincecode = $request->get("provincecode");
        $ind->districtcode = $request->get("districtcode");
        $ind->laid = $request->get("laid");
        $ind->gnd_id = $request->get("gnd_id");
        $ind->dsd_id = $request->get("dsd_id");
        $ind->isWithinIndustrialZone = $request->get("isWithinIndustrialZone");
        $ind->localinvestment = $request->get("localinvestment");
        $ind->foeigninvestment = $request->get("foeigninvestment");
        $ind->dateofCommencementofOperation = $request->get("dateofCommencementofOperation");
        $ind->noOfWorkersEachShift = $request->get("noOfWorkersEachShift");
        $ind->landUseWithIn5Km = $request->get("landUseWithIn5Km");
        $ind->landAvailableForTreatmantPlant = $request->get("landAvailableForTreatmantPlant");
        $ind->insGrpID = $request->get("insGrpID");
        
        $ind->save();
        
        return redirect()->back();
    }
//    public function delete()
//    {
//        return view('industry.delete');
//    }
}

