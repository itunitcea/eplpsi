

@extends('master')

@section('content')

<h3> List of Industries</h3>
<a href="{{url('industry/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Type</th>
            <th>Province</th>
            <th>District</th>
            <th>OPTIONS</th>
        </tr>
    </thead>

   
        @foreach($industries as $industry)
    <tr>
        <td>{{$industry->industryID}}</td>
        <td>{{$industry->industryName}}</td>
        <td>{{$industry->industrytype}}</td>
        <td>{{$industry->provincecode}}</td>
        <td>{{$industry->districtcode}}</td>
        <td>
            <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('/industry/'.$industry->industryID.'/show')}}">Show</a>
            <a class="glyphicon glyphicon-info-sign btn btn-success">Edit</a>
            <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
        </td>
    </tr>

    @endforeach       
</table>
@endsection
