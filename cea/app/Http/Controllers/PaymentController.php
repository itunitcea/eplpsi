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
        return view('payment.index');
    }
    
    public function create()
    {
        return view('payment.create');
    }
    
    public function show()
    {
        return view('payment.show');
    }
    
    public function edit()
    {
        return view('payment.edit');
    }
    
//    public function delete()
//    {
//        return view('payment.delete');
//    }
}

