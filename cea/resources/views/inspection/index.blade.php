
@extends('master')

@section('content')

    <h2>Inspection Details</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/inspection/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
        <thead>
            <tr>
                <th>Inspection Date</th>
                <th>Inspection Officers</th>
                <th>Inspection Status</th>
                <th>Reason for Inspection</th>
                <th>Options</th>
            </tr>
        </thead>
        @foreach($inspections as $inspection)
            <tr>
                <td>{{$inspection->nameOfInspectionOfficer}}</td>
                <td>{{$inspection->inspectiondate}}</td>
                <td>{{$inspection->inspectionSatus}}</td>
                <td>{{$inspection->reason}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>

@endsection




