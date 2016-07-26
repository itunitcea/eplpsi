
@extends('master')

@section('content')

<h2>Emergency Contact Details</h2>
<a href="{{url('/emergency/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
<table class="table">
    <thead>
        <tr>
            <th>No</th>
            <th>Emergency Contact Name</th>
            <th>Emergency Contact Telephone</th>
            <th>Emergency Contact Mobile</th>

            <th>Option</th>
        </tr>
    </thead>
    @foreach($industries as $industry)
    <tr>
        <td>{{$industry->industryID}}</td>
        <td>{{$industry->EmeCntname}}</td>
        <td>{{$industry->EmeCntactTel}}</td>
        <td>{{$industry->EmeCntactMob}}</td>
        <td><a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('emergency/'.$industry->industryID.'/show')}}" >Show</a>
            <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
            <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
    </tr>
    @endforeach
</table>

@endsection




