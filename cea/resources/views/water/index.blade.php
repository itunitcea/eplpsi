
@extends('master')

@section('content')

    <h2>Waste Water Details</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/industry/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
        <thead>
            <tr>
                <th>Method of Discharge Water</th>
                <th>Total Daily Discharge - Domestic (m3/day)</th>
                <th>Total Daily Discharge - Industrial (m3/day)</th>
                <th>Final Point of Discharge of Waste Water</th>
                <th>Options</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Open Channel</td>
                <td>20.0</td>
                <td>20.0</td>
                <td>Ela</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" href="industry/show">Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        </tbody>
    </table>

@endsection




