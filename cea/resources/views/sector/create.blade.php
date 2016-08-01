@extends('master')

@section('content')

<h2>Add New Sector </h2>

<form class="form-horizontal" action="{{url('/sector')}}" method="post" >
    
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    
        <div class="form-group">
        <label class="col-sm-2 control-label">Name of Sector Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Name of Sector Code" name="scode">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Sector Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Sector Description" name="sdescription">
        </div>
    </div>
     <div class="form-group">
        <label class="col-sm-2 control-label">A Category List Number Range</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="A Category List Number Range" name="Alistnorange">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">B Category List Number Range</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="B Category List Number Range" name="Blistnorange">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">C Category List Number Range</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="C Category List Number Range" name="Clistnorange">
        </div>
    </div>
    
    <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
    <a class="glyphicon btn btn-danger" href="/sector">Back </a>
    
</form>
@endsection