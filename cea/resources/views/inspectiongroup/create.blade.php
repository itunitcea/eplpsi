@extends('master')

@section('content')

<h2>Add Inspection Group Details</h2>

<form class="form-horizontal" action="{{url('/inspectiongroup')}}" method="post" >

    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    
    <div class="form-group">
        <label class="col-sm-2 control-label">Name of Inspection Group</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter ame of Name of Inspection Group" name="groupname">
        </div>
    </div>
    
    <center>
        <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
        <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger" />
    </center>
    
    @endsection
