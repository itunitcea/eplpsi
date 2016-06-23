
@extends('master')

@section('content')

<h2>Add New Category </h2>

<form class="form-horizontal" >
    
    <div class="form-group">
        <label class="col-sm-2 control-label">Category ID</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Caregory ID">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Name of Category</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Name of Caregory">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Details</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Details">
        </div>
    </div>
</form>
@endsection




