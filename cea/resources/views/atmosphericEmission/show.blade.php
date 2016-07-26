@extends('master')
@section('content')
<form class="form-horizontal" >
    <h2>Emission to the Atmosphere</h2>
            <div class="form-group">
                    <label class="col-sm-4 control-label">File Number :</label>
                    <label class="col-sm-8 control-label" style="text-align: left">EA/AP/PDA/MP/A53/4797/2010 </label>
            </div>
            <div class="form-group">
                    <label class="col-sm-4 control-label">Industry Name :</label>
                    <label class="col-sm-8 control-label" style="text-align: left">Metal Quarry</label>
            </div>
            <hr/>
            <fieldset>
                <legend>Possible emissions :</legend>
                <div class="form-group">
                <label class="col-sm-4 control-label">Oxides of Nitrogen :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$atmospheric_emission->nitrogenOxide}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Oxides of Sulphur :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$atmospheric_emission->sulfurOxide}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Dust and Soot :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$atmospheric_emission->dustAndSoot}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Any Other :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$atmospheric_emission->other}}</label>
            </div>    
            </fieldset>
            <hr/>
            <fieldset>
                <legend>Details of Stacks/Chimneys</legend>
                
            <div class="form-group">
                <label class="col-sm-4 control-label">Number of Stacks/Chimneys :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$atmospheric_emission->noOfStacks}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Height :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$atmospheric_emission->height}}</label>
            </div>
            </fieldset>
            <hr/>
            <fieldset>
                <legend>Details of odour problems</legend>
                <div class="form-group">
                <label class="col-sm-4 control-label">Source :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$atmospheric_emission->source}}</label>
            </div>
                <div class="form-group">
                <label class="col-sm-4 control-label">Method of abatement:</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$atmospheric_emission->modeofabatement}}</label>
            </div>
            </fieldset>
                           
            <div>
                <div>
                <center>
                        <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                        <a href="epldashboard.php" class="btn btn-danger" style="width:80px">Cancel</a>
                </center>
            </div>
            </div>
	</form>
@endsection

