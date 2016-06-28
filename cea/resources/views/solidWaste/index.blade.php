
@extends('master')

@section('content')

    <h2>Solid Waste Details</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/solidWaste/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
        <thead>
            <tr>
                <th>Nature of Solid Wastee</th>
                <th>Total Quantity - Kg/Day</th>
                <th>Method Of Disposal</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Zinc Remaining</td>
                <td>20.0</td>
                <td>Land Fill</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" href="industry/show">Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        </tbody>
    </table>

@endsection




