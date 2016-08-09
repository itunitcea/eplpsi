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

$products = \App\Products_byproducts::paginate(10);
$data["products_byproducts"] = $products;

$rawmaterials = \App\Rawmaterials::paginate(10);
$data["rawmaterials"] = $rawmaterials;

$chemicalused = \App\Chemicalused::paginate(10);
$data["chemicalused"] = $chemicalused;

$security = \App\Security::paginate(10);
$data["security"] = $security;
return view('manufacture.index', $data);
}

public function create() {

return view('manufacture.create');
}

public function store(Request $request) {
$products = new \App\Products_byproducts();
$products->product_byproducts_name = $request->get("product_byproducts_name");
$products->qty = $request->get("qty");
$products->productstatus = $request->get("productstatus");
$products->save();

$rawmaterials = new \App\Rawmaterials();
$rawmaterials->materialname = $request->get("materialname");
$rawmaterials->qty = $request->get("qty");
$rawmaterials->save();

$chemicalused = \App\Chemicalused();
$chemicalused->chemicalname = $request->get("chemicalname");
$chemicalused->trdename = $request->get("trdename");
$chemicalused->quantity = $request->get("quantity");
$chemicalused->purpose = $request->get("purpose");
$chemicalused->save();

$security = \App\Security();
$security->precautionarymeasures = $request->get("precautionarymeasures");
$security->storage_facilities = $request->get("storage_facilities");
$security->firefightingequipment = $request->get("firefightingequipment");
$security->detailsofequip = $request->get("detailsofequip");
$security->save();

return redirect()->back();
}

public function showProducts($productID) {
$products = \App\Products_byproducts::find($productID);
$data["products"] = $products;
return view('manufacture.show', $data);
}

public function showRawMeterials($materialID) {
$rawmaterials = \App\Rawmaterials::find($materialID);
$data["rawmaterials"] = $rawmaterials;

return view('manufacture.show', $data);
}


}
