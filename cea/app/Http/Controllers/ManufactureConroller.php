<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ManufactureController extends Controller
{
    /**
     * Show the profile for the given user.
     *
     * 
     * @return Response
     */
    public function index()
    {
      
        return view('manufacture.index');
    }
    
    public function create()
    {
      
        return view('manufacture.create');
    }
    public function show()
    {
      
        return view('manufacture.show');
    }
}