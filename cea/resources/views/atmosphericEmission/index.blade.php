@extends('master')
@section('content')
<h3> List of Atmospheric Emission</h3>
<a class="glyphicon glyphicon-plus btn btn-success"></a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Oxides of Nitrogen</th>
            <th>Oxides of Sulphur</th>
            <th>Dust and Soot</th>
            <th>Odor - Source</th>
            <th>Method of abatement</th>
            <th>OPTIONS</th>
        </tr>
    </thead>

    <tr>
        @foreach($atmospheric_emission as $emission)
    <tr>
        <td>{{$emission->ai_id}}</td>
        <td>{{$emission->nitrogenOxide}}</td>
        <td>{{$emission->sulfurOxide}}</td>
        <td>{{$emission->dustAndSoot}}</td>
        <td>{{$emission->source}}</td>
        <td>{{$emission->modeofabatement}}</td>
        <td>
            <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('/atmosphericEmission/'.$emission->ai_id.'/show')}}" >Show</a>
            <a class="glyphicon glyphicon-info-sign btn btn-success">Edit</a> 
            <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
        </td>
    </tr>

    @endforeach       
</table>
@endsection
