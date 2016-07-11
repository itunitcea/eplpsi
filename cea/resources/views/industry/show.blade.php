@extends('master')
@section('content')
<h3>Industry Details </h3>
<form class="form-horizontal" >
    <div class="form-group">
        <label class="col-sm-5 control-label">Application Language</label>
        <label class="col-sm-7 control-label" style="text-align: left">English</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Name of Industry</label>
        <label class="col-sm-7 control-label" style="text-align: left">D.S. Perera Filling and Service Station</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Type of Industry</label>
        <label class="col-sm-7 control-label" style="text-align: left">Processing</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">BOI Registration</label>
        <label class="col-sm-7 control-label" style="text-align: left">No</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Category of Industry</label>
        <label class="col-sm-7 control-label" style="text-align: left">A68</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Sector of Industry</label>
        <label class="col-sm-7 control-label" style="text-align: left">TR</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Nature of Industry</label>
        <label class="col-sm-7 control-label" style="text-align: left">Filling and Service Station located in Malabe</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Industry Location</label>
        <label class="col-sm-7 control-label" style="text-align: left">No.536, Athurugiriya Road, Malabe</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Province</label>
        <label class="col-sm-7 control-label" style="text-align: left">WE</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">District</label>
        <label class="col-sm-7 control-label" style="text-align: left">CM</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Local Authority</label>
        <label class="col-sm-7 control-label" style="text-align: left">Malabe</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Is the site within an Approved Industrial Zone</label>
        <label class="col-sm-7 control-label" style="text-align: left">Yes</label>
    </div>
    <div class="form-group">
        <fieldset>
            <legend style="color:green;text-align:left;"> Investment Details </legend>
            <label class="col-sm-5 control-label">Local</label>
            <label class="col-sm-7 control-label" style="text-align: left">5500000</label>
            <br/><br/>
            <label class="col-sm-5 control-label">Foreign</label>
            <label class="col-sm-7 control-label" style="text-align: left">-</label>
        </fieldset>
    </div>

    <fieldset>
        <legend style="color:green;text-align:left;">Other Details</legend>
        <div class="form-group">
            <label class="control-label col-sm-5" for="datOperation">Date of Commencement of operation :</label>
            <label class="col-sm-7 control-label" style="text-align: left">-</label>
        </div>
        <br/>
        <div class="form-group">
            <label class="col-sm-5 control-label">Number of Shifts/Day and Times</label>
            <label class="col-sm-7 control-label" style="text-align: left">-</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">No of Workers in Each Shift</label>
           <label class="col-sm-7 control-label" style="text-align: left">-</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Land use of the area within five km radius</label>
            <label class="col-sm-7 control-label" style="text-align: left">-</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Land available for treatment plant</label>
            <label class="col-sm-7 control-label" style="text-align: left">-</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Inspection Group Name</label>
            <label class="col-sm-7 control-label" style="text-align: left">-</label>
        </div>
        <div>
            <center>
                
                <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                <a href="#" class="btn btn-danger" style="width:80px">Cancel</a>
            </center>
        </div>
    </fieldset>
</form>
<br/>

@endsection
