@extends('master')

@section('content')

<h2>List of Solid Waste </h2>

<form action="solidwaste" action="{{url('/solidwaste')}}" method="post" >
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    
    <label class="control-label col-sm-2" >Type and Nature of Soild Wastes :</label>
    <input type="Text" class="form-control" placeholder="Enter Type and Nature of Soild Wastes" name="swType">
    <label class="control-label col-sm-2" >Total quantity of soild waste - kg/day:</label>
    <input type="Text" class="form-control" placeholder="Enter Total quantity" name="swqty">
    <label class="control-label col-sm-2" >Method of Disposal of Soild Waste :</label>
    <input type="Text" class="form-control" id="prdStatus" placeholder="Enter Method of Disposal of Soild Waste" name="swdisposal">


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