
@extends('master2')

@section('content')

    <h2>Water Details</h2>
    <a style="float: right;" class="btn btn-success" href="{{url('/water/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE WATER DETAILS</a>
    <br>
    
    <table class="table">
        <thead>
            <tr>
                <td>No</td>
                <th>Total Daily Discharge Of Water</th>
                <th>Discharge Method</th>
                <th>Total Domestic Discharge</th>
                <th>Total Industrial Discharge</th>
                <th>Final Point of Discharge Water</th>
                <th>Options</th>
            </tr>
        </thead>
        @foreach($water as $water)
            <tr>
                <td>{{$water->w_id}}</td>
                <td>{{$water->totaldailydischargewwater}}</td>
                <td>{{$water->discharge_method}}</td>
                <td>{{$water->totaldisDome}}</td>
                <td>{{$water->totaldisIndu}}</td>
                <td>{{$water->finalpointofDischarge_ww}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('/water/'. $water->w_id. '/show')}}" >Show</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning" href="{{url('/water/'. $water->w_id. '/edit')}}">Edit</a></td>
            </tr>
        @endforeach
    </table>

@endsection
