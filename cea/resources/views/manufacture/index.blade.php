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

            <h2 style="color:green;">List of Products and Byproduct </h2>
            <a style="float: right;" class="btn btn-success" href="{{url('/manufacture/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE PRODUCTS BYPRODUCTS</a>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Products Byproducts Name</th>
                        <th>Quantity</th>
                        <th>Product Status</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($products_byproducts as $products_byproducts)
                    <tr>
                        <td>{{$products_byproducts->productID}}</td>
                        <td>{{$products_byproducts->product_byproducts_name}}</td>
                        <td>{{$products_byproducts->qty}}</td>
                        <td>{{$products_byproducts->productstatus}}</td>
                        <td>
                            <a class="btn btn-info" href="{{url('/manufacture/'.$products_byproducts->productID.'/showProducts')}}">Show</a>
                            <a class="btn btn-warning" href="{{url('/manufacture/'.$products_byproducts->productID.'/editProducts')}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- first tab end -->

        <!--  second tab start -->
        <div id="rawMeterials" class="tab-pane fade">
            <!-- Raw Meterials -->
            <h2 style="color:green;">List of Raw Meterials </h2>
            <a style="float: right;" class="btn btn-success" href="{{url('/manufacture/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE RAW MATERIALS</a>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Raw Meterials Name</th>
                        <th>Quantity</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($rawmaterials as $rawmaterials)
                        <td>{{$rawmaterials->materialID}}</td>
                        <td>{{$rawmaterials->materialname}}</td>
                        <td>{{$rawmaterials->qty}}</td>
                        <td>
                            <a class="btn btn-info" href="{{url('/manufacture/'.$rawmaterials->materialID.'/showRawMeterials')}}">Show</a>
                            <a class="btn btn-warning" href="{{url('/manufacture/'.$rawmaterials->materialID.'/editRawMeterials')}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>
        <!-- Second tab end -->

        <!-- Third tab start -->

        <div id="chemicals" class="tab-pane fade">
            <!--Chemicals -->
            <h2 style="color:green;">List of Chemicals</h2>
            <a style="float: right;" class="btn btn-success" href="{{url('/manufacture/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE CHEMICAL USED</a>
            <br>
            
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Chemical Name</th>
                        <th>Trade Name</th>
                        <th>Quantity</th>
                        <th>Purpose</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($chemicalused as $chemicalused)
                        <td>{{$chemicalused->chemicalID}}</td>
                        <td>{{$chemicalused->chemicalname}}</td>
                        <td>{{$chemicalused->trdename}}</td>
                        <td>{{$chemicalused->quantity}}</td>
                        <td>{{$chemicalused->purpose}}</td>
                        <td>
                            <a class="btn btn-info" href="{{url('/manufacture/'.$chemicalused->chemicalID.'/showChemicals')}}">Show</a>
                            <a class="btn btn-warning" href="{{url('/manufacture/'.$chemicalused->chemicalID.'/editChemicals')}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Third tab end -->

        <!-- forth tab start -->
        <div id="security" class="tab-pane fade">
            <!-- Security -->
            <!--Chemicals -->
            <h2 style="color:green;">List of Security Details</h2>
            <a style="float: right;" class="btn btn-success" href="{{url('/manufacture/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE CHEMICAL USED</a>
            <br>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Precautionary measures</th>
                        <th>Storage facilities</th>
                        <th>Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        @foreach($security as $security)
                        <td>{{$security->securityID}}</td>
                        <td>{{$security->precautionarymeasures}}</td>
                        <td>{{$security->storage_facilities}}</td>
                        <td>
                            <a class="btn btn-info" href="{{url('/manufacture/'.$security->securityID.'/showSecurity')}}">Show</a>
                            <a class="btn btn-warning" href="{{url('/manufacture/'.$security->securityID.'/editSecurity')}}">Edit</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            
        </div>

        <!-- forth tab end -->

    </div>
</form>
    <br/>

    @endsection
