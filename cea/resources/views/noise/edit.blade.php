
@extends('master2')

@section('content')

    <h2>Noise Pollution Details</h2>
    
    <div class="form-group">
        <label class="col-sm-3 control-label">Source</label>
        <div class="col-sm-9">
            <label type="text" class="form-control" > {{$noise->noise_pollution_source}} </label>
        </div>
        <label class="col-sm-3 control-label">Method of abatement</label>
        <div class="col-sm-9">
            <label type="text" class="form-control" >{{$noise->noise_pollution_method}}</label>
        </div>
        <div>
            <center>
                <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                <a class="glyphicon btn btn-danger" href="/noise">Back </a>
            </center>
        </div>
    </div>
    
   

@endsection




