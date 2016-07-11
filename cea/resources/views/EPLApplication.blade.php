@extends('master')
@section('content')

<h3>Welcome to the EPL - PSI System</h3>
<div class="row">
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/industry')}}">
                    <h4 style="text-align: center">Industry Details</h4>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/manufact')}}">
                    <h4 style="text-align: center">Manufacturing Process</h4>
                </a>    
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/water')}}">
                    <h4 style="text-align: center">Water</h4>
                </a>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/solidWaste')}}">
                    <h4 style="text-align: center">Solid Waste</h4>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/emission')}}">
                    <h4 style="text-align: center">Atmospheric Emission</h4>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/noise')}}">
                    <h4 style="text-align: center">Noise Pollution</h4>
                </a>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/energy')}}">
                    <h4 style="text-align: center">Energy Requirement</h4>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/fuel')}}">
                    <h4 style="text-align: center">Fuel Used</h4>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/recyle')}}">
                    <h4 style="text-align: center">Recycling / Reuse</h4>
                </a>
            </div>
        </div>
    </div>
</div>
<hr/>
<div class="row">
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/geoLocation')}}">
                    <h4 style="text-align: center">Geographical Location</h4>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/emergency')}}">
                    <h4 style="text-align: center">Emergency Contact</h4>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('//noise')}}">
                    <h4 style="text-align: center">Application</h4>
                </a>
            </div>
        </div>
    </div>
    
</div>

@endsection
