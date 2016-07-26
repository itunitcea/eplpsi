@extends('master')
@section('content')
<form class="form-horizontal" >
    <h2>Geographical Location Details</h2>
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
        <legend style="color:green;text-align:left;"> Geographical Locations  : </legend>
        <div class="form-group">
            <label class="col-sm-5 control-label">E :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$industry->E}}</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">N :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$industry->N}}</label>
        </div>
        
        <div>
            <center>
                <a class="glyphicon glyphicon-plus btn btn-warning" href="{{url('/geographicalLocation/'.$industry->industryID.'/edit')}}">Edit</a> 
                <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                <a href="#" class="btn btn-danger" style="width:80px">Cancel</a>
            </center>
        </div>
    </fieldset>
</form>
<br/>

@endsection
