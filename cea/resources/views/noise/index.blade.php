
@extends('master2')

@section('content')

    <h2>List Of Noise Pollution</h2>
    <a style="float: right;" class="btn btn-success" href="{{url('/noise/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE NOISE DETAILS</a>
    <br>
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
                    <a class="glyphicon glyphicon-edit btn btn-warning"  href="{{url('noise/'.$noise->noise_id.'/edit')}}">Edit</a></td>
            </tr>
        @endforeach
    </table>

@endsection




