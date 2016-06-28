
@extends('master')

@section('content')

    <h2>Inspection Details</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/industry/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
        <thead>
            <tr>
                <th>Inspection Date</th>
                <th>Inspection Officers</th>
                <th>Reason for Inspection</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>03/22/2012</td>
                <td>S.P. Guruge / L.K. Himakanthi</td>
                <td>EPL Issued</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" href="industry/show">Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        </tbody>
    </table>

@endsection




