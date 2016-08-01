@extends('master2')

@section('content')

<h2>Edit Details of Water</h2>  

<form class="form-horizontal" action="{{url('/water')}}" method="post" >
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">

    <div class="form-group">
        <label class="col-sm-2 control-label">Processing (m3/day)</label>
        <div class="col-sm-10"> 
            <input type="text" class="form-control" placeholder="Enter Processing (m3/day)" value="{{$water->wr_processing}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">cooing (m3/day)</label>
        <div class="col-sm-10"> 
            <input type="text" class="form-control" placeholder="Enter Cooling (m3/day)" value="{{$water->wr_cooling}}">    
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">washing (m3/day)</label>
        <div class="col-sm-10"> 
            <input type="text" class="form-control" placeholder="Enter Washing (m3/day)" value="{{$water->wr_washing}}">    
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Domestic (m3/day)</label>
        <div class="col-sm-10"> 
            <input type="text" class="form-control" placeholder="Enter Domestic (m3/day)" value="{{$water->wr_domestic}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Public Supply</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Public Supply " value="{{$water->swater_publicsupply}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Ground Water (Wells, Springs)</label>
        <div class="col-sm-10"> 
            <input type="text" class="form-control" placeholder="Enter Ground Water (Wells, Springs)" value="{{$water->swater_groundwater}}">
        </div>
    </div>
    <div class="form-group"> 
        <label class="col-sm-2 control-label">Surface Water (Stream, River)</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Surface Water (Stream, River)" value="{{$water->swater_sufacewater}}">
        </div>
    </div>

    <h2>Total daily discharge (m3/day)</h2>
    <div class="form-group"> 
        <label class="col-sm-2 control-label">Total daily discharge</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Total daily discharge" value="{{$water->totaldailydischargewwater}}">
        </div>
    </div>
    <div class="form-group"> 
        <label class="col-sm-2 control-label">Total Domestic</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Total daily discharge of domestic" value="{{$water->totaldisDome}}">
        </div>
    </div>
    <div class="form-group"> 
        <label class="col-sm-2 control-label">Total Industrial</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Total daily discharge of Industrial" value="{{$water->totaldisIndu}}">					    
        </div>
    </div>
    <div class="form-group"> 
        <label class="col-sm-2 control-label">Method of Discharge water</label>
        <div class="col-sm-10">
            <select class="form-control" width="100" value="{{$water->discharge_method}}">
                <option value="" selected="selected"></option>
                <option value="1" >Open channel</option>
                <option value="2" >Pipeline</option>
                <option value="3" >Covered Drain</option>
                <option value="3" >Other</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Final point of discharge of waste water :</label>
        <div class="col-sm-10"> 
            <select class="form-control" width="100" value="{{$water->finalpointofDischarge_ww}}">
                <option value="" selected="selected"></option>
                <option value="1" >Agricultural Land</option>
                <option value="2" >Marshy Land</option>
                <option value="3" >Sewer</option>
                <option value="4" >Lake</option>
                <option value="5" >River</option>
                <option value="6" >Ela</option>
                <option value="5" >Sea</option>
                <option value="6" >Other</option>
            </select>

        </div>
    </div>

    <div>
        <center>
            <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
            <a class="glyphicon btn btn-danger" href="/water">Back </a>
        </center>
    </div>

</form>

@endsection
