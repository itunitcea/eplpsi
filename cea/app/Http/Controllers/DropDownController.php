<?php

namespace App\Http\Controllers;

use App\Models\Epllicence;
use Illuminate\Http\Request;
use App\Province;
use App\District;
use App\LocalAuthority;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class DropDownController extends Controller
{
    // public function getProvinceDropdown()
    // {
    //     $input = Input::get('option');
    //     $province = DB::table('province')
    //     ->where('dicode', $input)
    //     ->orderBy('dicode', 'asc')
    //     ->lists('prcode','province');
    
    //     return Response::json($province);
    // }

    public function getDistrictDropdown(Request $request)
    {
        $district = District::where('prcode', $request->get('prcode'))->get();
        return view('ajaxviews.district', compact('district'));
    }

    public function getLocalAuthorityDropdown(Request $request)
    {
        $localauthority = LocalAuthority::where('dicode', $request->get('dicode'))->get();
        return view('ajaxviews.localauthority', compact('localauthority'));
    }
    
    

    public function getEplLicence(Request $request)
    {
        $eplLicence = Epllicence::where('industryID', $request->get('industryID'))->get();
        return view('ajaxviews.epl-licence', compact('eplLicence'));
    }
}
