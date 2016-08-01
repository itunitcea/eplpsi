@extends('master')

@section('content')

<h2>Add New Industry</h2>

<form class="form-horizontal" action="{{url('/industry')}}" method="post" >

    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
        <label class="col-sm-2 control-label">Application Language</label>
        <div class="col-sm-10">
            <select class="form-control" width="100" name="language">
                <option value="" selected="selected" ></option>
                <option value="1" >English</option>
                <option value="2" >Sinhala</option>
                <option value="3" >Tamil</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Name of Industry</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Name of Industry" name="industryName">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Type of Industry</label>
        <div class="col-sm-10">
            <select class="form-control" width="100" name="industrytype">
                <option value="" selected="selected"></option>
                <option value="Assembly" >Assembly</option>
                <option value="Formulation" >Formulation</option>
                <option value="Manufacture" >Manufacture</option>
                <option value="Processing" >Processing</option>
                <option value="Repacking" >Repacking</option>
                <option value="Other" >Other</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">BOI Registration</label>
        <div class="col-sm-10">
            <select class="form-control" width="100" name="BOIregistration">
                <option value="" selected="selected"></option>
                <option value="1" >Yes</option>
                <option value="0" >No</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Category of Industry</label>
        <div class="col-sm-10">
            {!! Form::select('eplcategoryid', $epl_categories, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Sector of Industry</label>
        <div class="col-sm-10">
            {!! Form::select('sector', $sector, null, ['class' => 'form-control']) !!}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nature of Industry</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="2" name="industrynature"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Industry Location Address Line 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Industry Location Address Line 1" name="indadd1">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label"></label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Industry Location Address Line 2" name="indadd2">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">City</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter City" name="indadd3">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Province</label>
        <div class="col-sm-10">
            <select name="province" id="provinceDropDown" class="form-control">
                @foreach($province as $p)
                <option value="{{$p->prcode}}">{{$p->prname}}</option>
                @endforeach
            </select>       
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">District</label>
        <div class="col-sm-10">
            <select name="district" id="districtDropdown" class="form-control district"></select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Local Authority</label>
        <div class="col-sm-10">
            <select name="localauthority" id="localauthorityDropdown" class="form-control district"></select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">DS Division</label>
        <div class="col-sm-10">
            <select name="localauthority" id="localauthorityDropdown" class="form-control district"></select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Grama Niladari Division</label>
        <div class="col-sm-10">
            <select name="localauthority" id="localauthorityDropdown" class="form-control district"></select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Is the site within an Approved Industrial Zone</label>
        <div class="col-sm-10">
            <select class="form-control" width="100" name="isWithinIndustrialZone">
                <option value="" selected="selected"></option>
                <option value="1" >Yes</option>
                <option value="0" >No</option>
            </select>
        </div>
    </div>
    <div class = jumbotron>Investment Details
        <div class="form-group">
            <label class="col-sm-2 control-label">Local:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="localinvestment">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Foreign</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" name="foreigninvestment">
            </div>
        </div>
    </div>
    <div class="form-group">
        <!-- DATE PICKER -->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">  
        <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">  
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>  
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>  
        <label class="col-sm-2 control-label">Date of Commencement of Operation</label>  
        <div class="col-sm-10">
            <input class="date form-control" type="text">  
        </div>

        <script type="text/javascript">
        $('.date').datepicker({
format: 'MM-dd-yyyy'
        });</script> 
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Number of Shifts/Day and Times :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="noOfWorkersEachShift">
        </div>
    </div >
    <div class="form-group">
        <label class="col-sm-2 control-label">No of Workers in Each Shift :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="foreigninvestment">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Land use of the area within five km radius :</label>
        <div class="col-sm-10">
            <select class="form-control" width="100" name="landUseWithIn5Km">
                <option value="" selected="selected"></option>
                <option value="Residential" >Residential</option>
                <option value="Commercial" >Commercial</option>
                <option value="Agricultural" >Agricultural</option>
                <option value="Open Space" >Open Space</option>
                <option value="Public Area" >Public Area</option>
                <option value="Marshy Land" >Marshy Land</option>
                <option value="Salty Marshy Land" >Salty Marshy Land</option>
                <option value="Mangrove" >Mangrove</option>
                <option value="Natural Reserve" >Natural Reserve</option>
                <option value="Other" >Other</option>

            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Land available for treatment plant :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="landAvailableForTreatmantPlant">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Inspection Group Name :</label>
        <div class="col-sm-10">

            <select name="insGrpID" class="form-control">
                <option value = ""></option>
                @foreach($groupname as $g)
                <option value = "{{$g->insgroupID}}">{{$g->groupname}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <center>
        <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
        <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger" />
    </center>
    <script>
        $(document).ready(function () {
        var prcode = $('#provinceDropDown').val();
            console.log(prcode);
            $.ajax({
                url: '{{route('district')}}',
                        data: {prcode: prcode},
                        type: 'get',
                        success: function (result) {
                        $('#districtDropdown').html(result);
                        }
                });
        });
        jQuery('#provinceDropDown').on('change', function (event) {
        var prcode = $('#provinceDropDown').val();
                console.log(prcode);
                $.ajax({
                url: '{{route('district')}}',
                        data: {prcode: prcode},
                        type: 'get',
                        success: function (result) {
                        $('#districtDropdown').html(result);
                        }
                });
        });
                $(document).ready(function () {
        var dicode = $('#districtDropdown').val();
                console.log(dicode);
                $.ajax({
                url: '{{route('localauthority')}}',
                        data: {dicode: dicode},
                        type: 'get',
                        success: function (result) {
                        $('#localauthorityDropdown').html(result);
                        }
                });
        });
                jQuery('#districtDropdown').on('change', function (event) {
        var dicode = $('#districtDropdown').val();
                console.log(dicode);
                $.ajax({
                url: '{{route('localauthority')}}',
                        data: {dicode: dicode},
                        type: 'get',
                        success: function (result) {
                        $('#localauthorityDropdown').html(result);
                        }
                });
        });
    </script>
    @endsection
