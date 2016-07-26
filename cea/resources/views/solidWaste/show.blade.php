@extends('master')

@section('content')

<h2>List of Solid Waste </h2>

<form class="form-horizontal" >
    <div class="form-group">
        <label class='col-sm-5 control-label' >Type and Nature of Soild Wastes :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$solidwaste->natureOfSolidWaste}}</label>
    </div>
    <div class="form-group">
        <label class='col-sm-5 control-label' >Total quantity of soild waste - kg/day :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$solidwaste->total_qty_sw}}</label>
    </div>
    <div class="form-group">
        <label class='col-sm-5 control-label' >Method of Disposal of Soild Waste :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$solidwaste->sw_disposal_method}}</label>
    </div>
    <div>
        <center>
            <a class="glyphicon glyphicon-plus btn btn-warning" href="{{url('solidWaste/'.$solidwaste->sw_id.'/edit')}}">Edit</a> 
            <a href="#" class="btn btn-success"  style="width:80px">Save</a>
            <a href="#" class="btn btn-danger" style="width:80px">Cancel</a>
        </center>
    </div>
</form>







@endsection

