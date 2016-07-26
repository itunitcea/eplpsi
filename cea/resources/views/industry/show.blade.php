@extends('master')
@section('content')
<h3>Industry Details </h3>
<form class="form-horizontal" >
    <div class="form-group">
        <label class="col-sm-5 control-label">Application Language :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->language}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Name of Industry :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->industryName}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Type of Industry :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->industrytype}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">BOI Registration :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->BOIregistration}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Category of Industry :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->eplcategoryid}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Sector of Industry :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->sector}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Nature of Industry :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->industrynature}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Industry Location :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->indadd1}}, {{$industry->indadd2}}, {{$industry->indadd3}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Province :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->provincecode}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">District :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->districtcode}}</label>
    </div>
    <div class="form-group">
        <a href="show.blade.php"></a>
        <label class="col-sm-5 control-label">Local Authority :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->laid}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Grama Niladari Division :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->gnd_id}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Divisional Secretariat Division :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->dsd_id}}</label>
    </div>
    
    <div class="form-group">
        <label class="col-sm-5 control-label">Is the site within an Approved Industrial Zone :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->isWithinIndustrialZone}}</label>
    </div>
    <div class="form-group">
        <fieldset>
            <legend style="color:green;text-align:left;"> Investment Details </legend>
            <label class="col-sm-5 control-label">Local :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$industry->localinvestment}}</label>
            <br/><br/>
            <label class="col-sm-5 control-label">Foreign :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$industry->foreigninvestment}}</label>
        </fieldset>
    </div>

    <fieldset>
        <legend style="color:green;text-align:left;">Other Details</legend>
        <div class="form-group">
            <label class="control-label col-sm-5" for="datOperation">Date of Commencement of operation :</label>
            <!--<label class="col-sm-7 control-label" style="text-align: left">{{$industry->industrytype}}</label>-->
        </div>
        <br/>
        <div class="form-group">
            <label class="col-sm-5 control-label">Number of Shifts/Day and Times :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$industry->noOfShift}}</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">No of Workers in Each Shift :</label>
           <label class="col-sm-7 control-label" style="text-align: left">{{$industry->noOfWorkersEachShift}}</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Land use of the area within five km radius :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$industry->landUseWithIn5Km}}</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Land available for treatment plant :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$industry->landAvailableForTreatmantPlant}}</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Inspection Group Name :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$industry->insGrpID}}</label>
        </div>
        <div>
            <center>
                <a class="glyphicon glyphicon-plus btn btn-warning" href="{{url('industry/'.$industry->industryID.'/edit')}}">Edit</a> 
                <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                <a href="#" class="btn btn-danger" style="width:80px">Cancel</a>
            </center>
        </div>
    </fieldset>
</form>
<br/>

@endsection