@extends('master')
@section('content')
<h2>Atmospheric Emission</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/atmospheric/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
        <thead>
            <tr>
                <th>Oxides of Nitrogen</th>
                <th>Oxides of Sulphur</th>
                <th>Dust and Soot</th>
                <th>odour problems</th>
                <th>Source</th>
                <th>Method of abatement</th>
                <th>Options</th>
            </tr>
        </thead>
        @foreach($inspections as $inspection)
            <tr>
                <td>{{$atmospheric->nitrogenOxide}}</td>
                <td>{{$atmospheric->sulfurOxide}}</td>
                <td>{{$atmospheric->dustAndSoot}}</td>
                <td>{{$atmospheric->causedOdorProblems}}</td>
                <td>{{$atmospheric->source}}</td>
                <td>{{$atmospheric->modeofabatement}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>
@endsection

