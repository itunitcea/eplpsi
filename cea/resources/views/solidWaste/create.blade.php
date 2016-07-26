@extends('master')

@section('content')

<h2>List of Solid Waste </h2>

<form class="form-horizontal" action="{{url('/solidWaste')}}" method="post" >
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
    <label class="control-label col-sm-3" >Type and Nature of Soild Wastes :</label>
    <div class="col-sm-9"> 
        <input type="Text" class="form-control" placeholder="Enter Type and Nature of Soild Wastes" name="swType">
    </div>
    </div>
    <div class="form-group">
    <label class="control-label col-sm-3" >Total quantity of soild waste - kg/day:</label>
    <div class="col-sm-9"> 
        <input type="Text" class="form-control" placeholder="Enter Total quantity" name="swqty">
    </div>
    </div>
    <div class="form-group"> 
        <label class="control-label col-sm-3" >Method of Disposal of Soild Waste :</label>
    <div class="col-sm-9"> 
        <input type="Text" class="form-control" id="prdStatus" placeholder="Enter Method of Disposal of Soild Waste" name="swdisposal">
    </div>
    </div>

    <center>
        <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
        <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger" />

        <!--
        <button type="button" class="btn btn-success" onclick="alert('Add New Solid Waste!')">New Solid Waste</button>
        <button type="button" class="btn btn-danger" style="width:80px;" onclick="alert('Cancel!')">Cancel</button>
        -->
    </center>

</form>

@endsection