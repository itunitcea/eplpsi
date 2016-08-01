
@extends('master2')

@section('content')
<form class="form-horizontal" >
    <h2>Noise Pollution Details</h2>
    <div class="form-group">
        <label class="col-sm-4 control-label">File Number :</label>
        <label class="col-sm-8 control-label" style="text-align: left">EA/AP/PDA/MP/A53/4797/2010 </label>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Industry Name :</label>
        <label class="col-sm-8 control-label" style="text-align: left">Metal Quarry</label>
    </div>
    <hr/>
    <fieldset>
        <legend>Noise Details :</legend>

        <div class="form-group">
            <label class="col-sm-3 control-label">Source :</label>
            <label class="col-sm-8 control-label" style="text-align: left">{{$noise->noise_pollution_source}} </label>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Method of abatement :</label>
            <label class="col-sm-8 control-label" style="text-align: left">{{$noise->noise_pollution_method}}</label>
        </div>
        <div>
            <center>
                <a class="glyphicon glyphicon-plus btn btn-warning" href="{{url('noise/'.$noise->noise_id.'/edit')}}">Edit</a> 
                <a class="glyphicon btn btn-danger" href="/noise">Back </a>
            </center>
        </div>
        </div>



        @endsection




