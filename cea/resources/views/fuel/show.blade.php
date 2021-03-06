@extends('master2')
@section('content')
<form class="form-horizontal" >
    <h2>Fuel Details</h2>
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
        <div class="form-group">
            <label class="col-sm-5 control-label">Fuel Type :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$fuel->fueltype}}</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">a. Purpose :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$fuel->purpose}}</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">a. Daily Consumption :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$fuel->fuelconsumption}}</label>
        </div>
        <div>
            <center>
                <a class="glyphicon glyphicon-plus btn btn-warning" href="{{url('fuel/'.$fuel->fid.'/edit')}}">Edit</a> 
                <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                <a href="#" class="btn btn-danger" style="width:80px">Cancel</a>
            </center>
        </div>
    </fieldset>
</form>
<br/>

@endsection
