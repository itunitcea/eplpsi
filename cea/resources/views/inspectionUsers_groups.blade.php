@extends('master')
@section('content')
<h3>Inspection Users / Groups</h3>
<div class="row">
    <div class="col-md-6">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/inspectiongroup')}}">
                    <h4 style="text-align: center">Inspection Groups</h4>
                </a>
            </div>
        </div>
    </div>
    <div class="col-md-6">
        <div class = "panel panel-success">
            <div class = "panel-heading">
                <a href="{{url('/inspectionuser')}}">
                    <h4 style="text-align: center">Inspection Users</h4>
                </a>
            </div>
        </div>
    </div>
</div>

@endsection