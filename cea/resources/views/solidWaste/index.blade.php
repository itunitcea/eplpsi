@extends('master2')
@section('content')

<h2>Solid Waste Details</h2>
    <a style="float: right;" class="btn btn-success" href="{{url('/solidWaste/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE SOLID WASTE</a>
    <br>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Type and Nature of Soild Wastes</th>
                <th>Total quantity of soild waste - kg/day</th>
                <th>Method of Disposal of Soild Waste</th>
                <th>Options</th>
            </tr>
        </thead>
        @foreach($solidwaste as $solidwaste)
            <tr>
                <td>{{$solidwaste->natureOfSolidWaste}}</td>
                <td>{{$solidwaste->total_qty_sw}}</td>
                <td>{{$solidwaste->sw_disposal_method}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('/solidWaste/'.$solidwaste->sw_id).'/show'}}">Show</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning" href="{{url('/solidWaste/'.$solidwaste->sw_id).'/edit'}}">Edit</a></td>
            </tr>
        @endforeach
    </table>
    solidWaste
@endsection

