@extends('master')

@section('content')

<h2>Add New Category </h2>

<form class="form-horizontal" action="{{url('/province')}}" method="post" >

    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <div class="form-group">
        <label class="col-sm-2 control-label">Province Code</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Province Code" name="prcode">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Name of Province</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Name of Province" name="prname">
        </div>
    </div>
    
    <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
    <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger" />

</form>
@endsection