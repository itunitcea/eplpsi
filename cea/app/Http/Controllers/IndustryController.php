<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndustryController extends Controller
{
    /**
     * Show the profile for the given user.
     * @return Response
     */
    public function index()
    {
        $industries = \App\Industry::all();
//        var_dump($categories); // to display errors
        $data["industries"] = $industries;
        return view('industry.index',$data);
    }
    
    public function create()
    {
        return view('industry.create');
    }
    
    public function show()
    {
        return view('industry.show');
    }
    
    public function edit()
    {
        return view('industry.edit');
    }
    
    
//    public function delete()
//    {
//        return view('industry.delete');
//    }
}

