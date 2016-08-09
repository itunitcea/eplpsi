@extends('master')
@section('content')



<form class="form-horizontal" action="manufact_action.php" method="post" enctype="multipart/form-data"> 

    <ul class="nav nav-pills">
        <li class="active"><a data-toggle="pill" href="#productsByproducts">Products Byproducts</a></li>
        <li><a data-toggle="pill" href="#rawMeterials">Raw Meterials</a></li>
        <li><a data-toggle="pill" href="#chemicals">Chemicals</a></li>
        <li><a data-toggle="pill" href="#security">Security</a></li>
    </ul>

    <div class="tab-content">
        <!-- first tab start -->
        <!-- Products and Byproducts -->
        <div id="productsByproducts" class="tab-pane fade in active">

          <br/>
            <fieldset>
                <legend style="color:green;text-align:left;">Details of Products and Byproducts</legend>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="prdByprod">Products Byproducts Name :</label>
                        <div class="col-sm-9">          
                            <input type="Text" class="form-control" id="product_byproducts_name" name="product_byproducts_name" value="{{$products->product_byproducts_name}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="qty">Quantity :</label>
                        <div class="col-sm-9">          
                            <input type="Text" class="form-control" id="qty"name="qty" value="{{$products->qty}}">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-3" for="productstatus">Product Status :</label>
                        <div class="col-sm-9">          
                            <input type="Text" class="form-control" id="prdStatus" name="productstatus" value="{{$products->productstatus}}">
                        </div>
                    </div>
                    <br/>
                    <div>
                        <center>
                            <input type="submit" value="Save"  class="btn btn-success" />
                            <a class="btn btn-info" href="/manufacture">Back </a>
                        </center>
                    </div>
                </form>
            </fieldset>
            <br/><br/>


        </div>
        <!-- first tab end -->

        <!--  second tab start -->
        <div id="rawMeterials" class="tab-pane fade">
            <!-- Raw Meterials -->
           <br/>
            <fieldset>
                <legend style="color:green;text-align:left;">Details of Raw Meterials</legend>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="rawName">Raw Meterials Name :</label>
                        <div class="col-sm-10">          
                            <input type="Text" class="form-control" id="rawName" value="{{$rawmaterials->materialname}}" name="materialname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="qty">Quantity :</label>
                        <div class="col-sm-10">          
                            <input type="Text" class="form-control" id="qty" value="{{$rawmaterials->qty}}" name="qty">
                        </div>
                    </div>
                    <br/>
                    <div>
                        <center>
                            <input type="submit" value="Save"  class="btn btn-success" />
                             <a class="btn btn-info" href="/manufacture">Back </a>
                        </center>
                    </div>
                </form>
            </fieldset>
            <br/><br/>
        </div>
        <!-- Second tab end -->

        <!-- Third tab start -->

        <div id="chemicals" class="tab-pane fade">
            <!--Chemicals -->
            <br/>

            <fieldset>
                <legend style="color:green;text-align:left;">Details of Chemicals</legend>
                <form class="form-horizontal" role="form">
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="chemicalName">Chemical Name :</label>
                        <div class="col-sm-10">          
                            <input type="Text" class="form-control" id="chemicalName" value="{{$chemicalused->chemicalname}}" name="chemicalname">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="brandName">Brand Name :</label>
                        <div class="col-sm-10">          
                            <input type="Text" class="form-control" id="brandName" value="{{$chemicalused->trdename}}" name="trdename">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="qty">Quantity :</label>
                        <div class="col-sm-10">          
                            <input type="Text" class="form-control" id="qty" value="{{$chemicalused->quantity}}" name="quantity">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-2" for="purpose">Purpose :</label>
                        <div class="col-sm-10">          
                            <input type="Text" class="form-control" id="purpose" value="{{$chemicalused->purpose}}" name="purpose">
                        </div>
                    </div>
                    <br/>
                    <div>
                        <center>
                            <input type="submit" value="Save"  class="btn btn-success" />
                             <a class="btn btn-info" href="/manufacture">Back </a>
                        </center>
                    </div>
                </form>
            </fieldset>
            <br/><br/>
        </div>
        <!-- Third tab end -->

        <!-- forth tab start -->
        <div id="security" class="tab-pane fade">
            <!-- Security -->
        <br/>
            <fieldset>
                <legend style="color:green;text-align:left;">Details of Security</legend>
                <div class="form-group">
                        <label class="control-label col-sm-5" for="Precautionarymeasures">Precautionary measures adopted in the transport and handling of any hazardous/toxic/flammable/explosive material :</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="5" id="Precautionarymeasures" name="precautionarymeasures">{{$security->precautionarymeasures}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="Storagefacilities">Storage facilities for hazardous/toxic/flammable/explosive meterials :</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="5" id="Storagefacilities" name="storage_facilities">{{$security->storage_facilities}}</textarea>
                        </div>
                    </div>
                    <div class="form-group">
                              <label class="control-label col-sm-5" for="firefighting" name="firefightingequipment">Do you have adequate fire fighting equipment :</label>
                              <div class="col-sm-7">
                                <label class="radio-inline"><input type="radio" name="firefighting">Yes</label>
                                <label class="radio-inline"><input type="radio" name="firefighting">No</label>
                              </div>
                            </div>
                   
                    <div class="form-group">
                        <label class="control-label col-sm-5" for="fireEquipments">If so, details of such equipment :</label>
                        <div class="col-sm-7">
                            <textarea class="form-control" rows="5" id="fireEquipments" name="detailsofequip">{{$security->detailsofequip}}</textarea>
                        </div>
                    </div>
                    <div>
                        <center>
                            <input type="submit" value="Save"  class="btn btn-success" />
                             <a class="btn btn-info" href="/manufacture">Back </a>
                        </center>
                    </div>
                </form>
            </fieldset>
            <br/><br/>
        </div>

        <!-- forth tab end -->

    </div>
    <br/>

    @endsection
