
@extends('master')

@section('content')

<form class="form-horizontal" action="{{url('/inspection')}}" method="post" >
    <fieldset>
        <legend style="color:green;text-align:left;">Inspection Details</legend>
        <br/>
        <div class="form-group">
            <label class="col-sm-2 control-label" >Officer Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Officer Name " name="officerName" value="{{$inspection->nameOfInspectionOfficer}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Inspection Date:</label>
            <div class="col-sm-10">
                <input type="date" class="form-control" placeholder="Enter Inspection Date" name="inspectionDate" value="{{$inspection->inspectiondate}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Inspection Status:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Remarks" name="inspectionSatus" value="{{$inspection->inspectionSatus}}">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Reason for Inspection :</label>
            <div class="col-sm-10">
                <select class="form-control" width="100" name="inspectionReason" value="{{$inspection->reason}}">
                    <option value="" selected="selected"></option>
                    <option value="1" >New EPL</option>
                    <option value="2" >EPL Renewal</option>
                    <option value="3" >Accident / Complaint</option>
                    <option value="3" >Regular Monitoring</option>
                    <option value="3" >Other</option>
                </select>
            </div>
        </div>
   
    <input type="submit" value="SAVE"/>

</form>
@endsection




