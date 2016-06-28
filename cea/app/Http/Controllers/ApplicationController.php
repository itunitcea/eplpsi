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
        return view('appliction.index');
    }
    
    public function create()
    {
        return view('appliction.create');
    }
    
    public function show()
    {
        return view('appliction.show');
    }
    
    public function edit()
    {
        return view('appliction.edit');
    }
    
//    public function delete()
//    {
//        return view('appliction.delete');
//    }
}

