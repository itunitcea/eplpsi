
@extends('master2')

@section('content')

<h2>Emergency Contact Details</h2>
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
    <legend style="color:green;text-align:left;">Emergency Contact : </legend>
    <div class="form-group">
        <label class="col-sm-5 control-label">Name :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->EmeCntname}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Contact No :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->EmeCntactTel}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Mobile No :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$industry->EmeCntactMob}}</label>
    </div>
    <div>
        <center>
            <a class="glyphicon glyphicon-plus btn btn-warning" href="{{url('/geographicalLocation/'.$industry->industryID.'/edit')}}">Edit</a> 
            <a href="#" class="btn btn-success"  style="width:80px">Save</a>
            <a href="#" class="btn btn-danger" style="width:80px">Cancel</a>
        </center>
    </div>
</fieldset>


@endsection




