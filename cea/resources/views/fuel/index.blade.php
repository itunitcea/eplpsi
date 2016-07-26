@extends('master')
@section('content')
<h3> List of Fuel Details</h3>
<a href="{{url('fuel/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Fuel Type</th>
            <th>Purpose</th>
            <th>Daily Consumption</th>
            <th>OPTIONS</th>
        </tr>
    </thead>

   
        @foreach($fuel as $fuel)
    <tr>
        <td>{{$fuel->fid}}</td>
        <td>{{$fuel->fueltype}}</td>
        <td>{{$fuel->purpose}}</td>
        <td>{{$fuel->fuelconsumption}}</td>
        <td>
            <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('/fuel/'.$fuel->fid.'/show')}}">Show</a>
            <a class="glyphicon glyphicon-info-sign btn btn-success">Edit</a>
            <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
        </td>
    </tr>

    @endforeach       
</table>
@endsection
