@extends('master')
@section('content')

<h2>Solid Waste Details</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/solidwaste/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Type and Nature of Soild Wastes</th>
                <th>Total quantity of soild waste - kg/day</th>
                <th>Method of Disposal of Soild Waste</th>
                <th>Options</th>
            </tr>
        </thead>
        @foreach($inspections as $inspection)
            <tr>
                <td>{{$sw->natureOfSolidWaste}}</td>
                <td>{{$sw->total_qty_sw}}</td>
                <td>{{$sw->sw_disposal_method}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>
    
@endsection

