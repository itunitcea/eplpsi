<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class IndustryController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * 
     * @return Response
     */
    public function index()
    {
      
        return view('industry.index');
    }
    
    public function create()
    {
      
        return view('industry.create');
    }
    public function show()
    {
      
        return view('industry.show');
    }
}