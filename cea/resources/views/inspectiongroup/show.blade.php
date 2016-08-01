@extends('master2')
@section('content')
<h3>Inspection Group Details </h3>
<form class="form-horizontal" >
    <div class="form-group">
        <label class="col-sm-5 control-label">Inspection Group ID :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$inspectiongroup->insgroupID}}</label>
    </div>
    <div class="form-group">
        <label class="col-sm-5 control-label">Name of Inspection Group :</label>
        <label class="col-sm-7 control-label" style="text-align: left">{{$inspectiongroup->groupname}}</label>
    </div>
    
        <div>
            <center>
                <a class="glyphicon glyphicon-plus btn btn-warning" href="{{url('industry/'.$inspectiongroup->insgroupID.'/edit')}}">Edit</a> 
                <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                <a href="#" class="btn btn-danger" style="width:80px">Cancel</a>
            </center>
        </div>
</form>
<br/>

@endsection