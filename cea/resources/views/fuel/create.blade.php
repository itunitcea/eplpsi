@extends('master')
@section('content')
<h2>Add New Fuel Details </h2>

<form class="form-horizontal" action="{{url('/energy_reqt')}}" method="post" >
    <fieldset>
        <legend style="color:green;text-align:left;"> Fuel Details: </legend>
        <div class="form-group">
            <label class="col-sm-2 control-label">Types of Fuel Used</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Types of Fuel Used" name="fueltype">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">a. Purpose :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Purpose" name="purpose">
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">b. Daily Consumption :</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Daily Consumption" name="fuelconsumption">
            </div>
        </div>


        <div>
            <center>
                <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
                <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger"/>
            </center>
        </div>
    </fieldset>
</form>
@endsection
