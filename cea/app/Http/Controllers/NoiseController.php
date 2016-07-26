<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use DB;
use Illuminate\Support\Facades\Redirect; // redirect pages

class NoiseController extends Controller
{
    /**
     * Show the profile for the given user.
     * @return Response
     */
    
   
    public function index()
    {
        $noise = \App\Noise::all();
//        var_dump($categories); // to display errors
        $data["noise"] = $noise;
        return view('noise.index',$data);
    }
    
    public function create()
    {
        return view('noise.create');
    }
    
    public function store(Request $request)
    {
        $noise = new \App\Noise();
        $noise->noise_pollution_source = $request->get("noise_pollution_source");
        $noise->noise_pollution_method = $request->get("noise_pollution_method");
        
        $noise->save();
        
        return redirect()->back();
    }
    
    public function show($noise_id)
    {
        $noise = \App\Noise::find($noise_id);
        if(is_null($noise)){
            return Redirect::to('/noise');
        }
        return view('noise.show', compact('noise'));
    }
    
    public function edit($noise_id)
    {
        $noise = \App\Noise::find($noise_id);
        if(is_null($noise)){
            return Redirect::to('/noise');
        }
        return view('noise.edit', compact('noise'));
//        return view('industry.edit');
    }
    
    
//    public function delete()
//    {
//        return view('industry.delete');
//    }
}

