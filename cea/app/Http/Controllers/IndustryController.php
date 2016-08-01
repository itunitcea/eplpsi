<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use App\Epl_Category;
use App\Sector;
use App\Province;
use App\District;
use App\LocalAuthority;
use App\Models\InspectionGroup;
use DB;
use View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use App\Industry;

use App\Http\Requests;

class IndustryController extends Controller
{
    private $epl_category;


    /**
     * Get tables
     * @return Models
     */
    public function __construct()
    {
        $this->epl_category = new Epl_Category();
    }

    /**
     * Show the profile for the given user.
     * @return Response
     */
    public function index()
    {
        
        $industries = \App\Industry::paginate(20);
//        var_dump($categories); // to display errors
        $data["industries"] = $industries;
        return view('industry.index',$data);
    }
    
    public function create()
    {

        $epl_categories = Epl_Category::lists('categoryID');
        $sector = Sector::lists('scode');
        $province = Province::all();
        $district = District::all();
        $localauthority = LocalAuthority::lists('laname','lid');
        $groupname = InspectionGroup::all();
        return view('industry.create',['epl_categories'=> $epl_categories,'sector'=>$sector,'province'=>$province,'district'=>$district,
                    'localauthority'=> $localauthority, 'groupname'=>$groupname]);
    }
    
    public function store(Request $request)
    {
        $ind = new \App\Industry();
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
        $ind->dsd_id = $request->get("dsd_id");
        $ind->isWithinIndustrialZone = $request->get("isWithinIndustrialZone");
        $ind->localinvestment = $request->get("localinvestment");
        $ind->foreigninvestment = $request->get("foreigninvestment");
        $ind->noOfShift = $request->get("noOfShift");
        $ind->noOfWorkersEachShift = $request->get("noOfWorkersEachShift");
        $ind->landUseWithIn5Km = $request->get("landUseWithIn5Km");
        $ind->landAvailableForTreatmantPlant = $request->get("landAvailableForTreatmantPlant");
        $ind->insGrpID = $request->get("insGrpID");
        $ind->save();
        return redirect()->back();
    }
    
    public function show($industryID)
    {
          $industry = Industry::find($industryID);
        if(is_null($industry)){
            return Redirect::to('/industry');
        }
        return view('industry.show', compact('industry'));
    }
    
     public function edit($industryID)
    {
        $industry = Industry::find($industryID);
        if(is_null($industry)){
            return Redirect::to('/industry');
        }
        return view('industry.edit', compact('industry'));
//        return view('industry.edit');
    }
    
    
//    public function delete()
//    {
//        return view('industry.delete');
//    }
}

