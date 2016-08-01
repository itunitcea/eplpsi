<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;

class ManufactureController extends Controller {

    /**
     * Show the profile for the given user.
     *
     * 
     * @return Response
     */
    public function index() {

        $products = \App\Products_byproducts::paginate(20);
//        var_dump($categories); // to display errors
        $data["products_byproducts"] = $products;
        return view('manufacture.index', $data);
    }

    public function create() {

        return view('manufacture.create');
    }

    public function show() {

        return view('manufacture.show');
    }

}
