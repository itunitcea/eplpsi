<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;
use Illuminate\Database\Query\Builder;
use App\Epl_Category;
use App\Sector;
use App\Province;
use App\District;
use App\LocalAuthority;
use App\Models\InspectionGroup;
use App\Industry;
use DB;
use View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;

use App\Http\Requests;

class SearchIndustryController extends Controller
{
     public function index()
    {
        

        $province = Province::all();
        $district = District::all();
        $localauthority = LocalAuthority::all();
        $epl_category = Epl_Category::all();
        $sector = Sector::all();

        $query = Industry::query();
        if(Input::has('province')) 
        {
            $query->where('provincecode',Input::get('province'));
        }
        if(Input::has('dicode')) 
        {
            $query->where('districtcode',Input::get('dicode'));
        }
        if(Input::has('lid')) 
        {
            $query->where('laid',Input::get('lid'));
        }
        if(Input::has('scode')) 
        {
            $query->where('sector',Input::get('scode'));
        }
        if(Input::has('categoryID')) 
        {
            $query->where('categoryID',Input::get('categoryID'));
        }
        if(Input::has('industryName')) 
        {
            $query->where('industryName',Input::get('industryName'));
        }
       $industry = $query->paginate(25);
        //$industry = Industry::paginate(25);

        
        return View::make('searchind',compact('industry','province','sector','epl_category','localauthority','district'));

        //return View::make('searchind')->with('industry',$industry,'province',$province);

        // $results = Industry::where('provincecode')->get();

        // if ($province->prcode)
        // {
        //     $industry->where('provincecode',Industry::get('prcode'));
        // }
        // if (Industry::has('districtcode'))
        // {
        //     $industry->where('districtcode',Industry::get('dicode'));
        // }
        // if (Industry::has('laid'))
        // {
        //     $industry->where('laid',Industry::get('lid'));
        // }

        // return view('/searchind',['province'=>$province, 'district'=>$district, 'sector'=>$sector, 'epl_category'=>$epl_category,'results'=>$results]);
    }
}
