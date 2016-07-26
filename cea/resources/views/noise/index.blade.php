
@extends('master')

@section('content')

    <h2>List Of Noise Pollution</h2>
    <a href="{{url('noise/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Source </th>
                <th>Method of abatement</th>
                <th>Option</th>
            </tr>
        </thead>
        @foreach($noise as $noise)
            <tr>
                <td>{{$noise->noise_id}}</td>
                <td>{{$noise->noise_pollution_source}}</td>
                <td>{{$noise->noise_pollution_method}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('noise/'.$noise->noise_id.'/show')}}" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>

@endsection




