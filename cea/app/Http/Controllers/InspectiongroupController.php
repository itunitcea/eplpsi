<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Pagination\Paginator;

use App\Models\InspectionGroup;
use DB;
use View;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Facades\Input;
use App\Industry;
use App\Http\Requests;

class InspectiongroupController extends Controller {

    private $inspectiongroup;

    /**
     * Get tables
     * @return Models
     */
    public function __construct() {
        $this->inspectiongroup = new InspectionGroup();
    }

    /**
     * Show the profile for the given user.
     * @return Response
     */
    public function index() {

        $inspectiongroups = Inspectiongroup::paginate(20);
//        var_dump($categories); // to display errors
        $data["inspectiongroups"] = $inspectiongroups;
        return view('inspectiongroup.index', $data);
    }

    public function create() {
        return view('inspectiongroup.create');
    }

    public function store(Request $request) {
        $inspectiongroup = new Inspectiongroup();
        $inspectiongroup->groupname = $request->get("groupname");
//        $inspectiongroup->industryName = $request->get("industryName");
        
        $inspectiongroup->save();
        return redirect()->back();
    }

    public function show($insgroupID) {
        $inspectiongroup = Inspectiongroup::find($insgroupID);
        if (is_null($inspectiongroup)) {
            return Redirect::to('/inspectiongroup');
        }
        return view('inspectiongroup.show', compact('inspectiongroup'));
    }

    public function edit($insgroupID) {
        $inspectiongroup = Inspectiongroup::find($insgroupID);
        if (is_null($inspectiongroup)) {
            return Redirect::to('/inspectiongroup');
        }
        return view('inspectiongroup.edit', compact('inspectiongroup'));
//        return view('industry.edit');
    }

//    public function delete()
//    {
//        return view('industry.delete');
//    }
}
