@extends('master')
@section('content')

<h3> List of Energy Requirement Details</h3>

<a href="{{url('energy_reqt/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>In-plant generation(in kw/h)</th>
            <th>Public supply(in kw/h)</th>
            <th>OPTIONS</th>
        </tr>
    </thead>
    <tr>
        @foreach($energy_reqt as $energy)
    <tr>
        <td>{{$energy->er_id}}</td>
        <td>{{$energy->totalenergyconsumption_inplantgeneration}}</td>
        <td>{{$energy->totalenergyconsumption_publicsupply}}</td>
        <td>
            <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('/energy_reqt/'.$energy->er_id.'/show')}}">Show</a>
            <a class="glyphicon glyphicon-info-sign btn btn-success">Edit</a>
            <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
        </td>
    </tr>

    @endforeach       
</table>
@endsection
