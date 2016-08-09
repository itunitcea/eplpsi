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
        <br/>

        <fieldset>
            <legend style="color:green;text-align:left;">Details of Products and Byproducts</legend>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="col-sm-5 control-label">Products Byproducts Name :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$products->product_byproducts_name}}</label>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label" for="qty">Quantity :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$products->qty}}</label>
                </div>
                <div class="form-group">
                    <label class="col-sm-5 control-label" for="prdStatus">Product Status :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$products->productstatus}}</label>
                </div>
                <br/>
                <div>
                    <center>
                        <input type="submit" value="Save"  class="btn btn-success" />
                        <a class="btn btn-warning" href="{{url('/manufacture/'.$products->productID.'/edit')}}">Edit</a>
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
                    <label class="control-label col-sm-5" for="rawName">Raw Meterials Name :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$rawmaterials->materialname}}</label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="qty">Quantity :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$rawmaterials->qty}}</label>
                </div>
                <br/>
                <div>
                    <center>
                        <input type="submit" value="Save"  class="btn btn-success" />
                        <a class="btn btn-warning" href="{{url('/manufacture/'.$rawmaterials->materialID.'/edit')}}">Edit</a>
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
                    <label class="control-label col-sm-5" for="chemicalName">Chemical Name :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$chemicalused->chemicalname}}</label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="brandName">Brand Name :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$chemicalused->trdename}}</label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="qty">Quantity :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$chemicalused->quantity}}</label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="purpose">Purpose :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$chemicalused->purpose}}</label>
                </div>
                <br/>
                <div>
                    <center>
                        <input type="submit" value="Save"  class="btn btn-success" />
                        <a class="btn btn-warning" href="{{url('/manufacture/'.$chemicalused->chemicalID.'/edit')}}">Edit</a>
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
        <fieldset>
            <legend style="color:green;text-align:left;">Details of Security</legend>
            <form class="form-horizontal" role="form">
                <div class="form-group">
                    <label class="control-label col-sm-5" for="Precautionarymeasures">Precautionary measures adopted in the transport and handling of any hazardous/toxic/flammable/explosive material :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$security->precautionarymeasures}}</label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="Storagefacilities">Storage facilities for hazardous/toxic/flammable/explosive meterials :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$security->storage_facilities}}</label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="firefighting" >Do you have adequate fire fighting equipment :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$security->firefightingequipment}}</label>
                </div>
                <br>
                <div class="form-group">
                    <label class="control-label col-sm-5" for="fireEquipments">If so, details of such equipment :</label>
                    <label class="col-sm-7 control-label" style="text-align: left">{{$security->detailsofequip}}</label>
                </div>
                <br/>
                <div>
                    <center>
                        <input type="submit" value="Save"  class="btn btn-success" />
                        <a class="btn btn-warning" href="{{url('/manufacture/'.$security->securityID.'/edit')}}">Edit</a>
                    </center>
                </div>
            </form>
        </fieldset>
        <br/>
    </div>

    <!-- forth tab end -->

</div>
<br/>
</div>
</body>
@endsection
