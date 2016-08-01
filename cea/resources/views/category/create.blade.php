@extends('master')

@section('content')

<h2>Add New Category </h2>

<form class="form-horizontal" action="{{url('/category')}}" method="post" >
    
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    
        <div class="form-group">
        <label class="col-sm-2 control-label">Name of Category</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Name of Caregory" name="catname">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Category Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Category Description" name="catdescription">
        </div>
    </div>
    
    <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
    <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger" action="{{url('/category/index')}}"  />
    
</form>
@endsection