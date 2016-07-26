@extends('master')
@section('content')
<h3> Details of Geographical Location</h3>
<a href="{{url('geographicalLocation/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>E :</th>
            <th>N :</th>
            <th>OPTIONS</th>
        </tr>
    </thead>

    <tr>
        @foreach($industries as $industry)
    <tr>
        <td>{{$industry->industryID}}</td>
        <td>{{$industry->E}}</td>
        <td>{{$industry->N}}</td>
        <td>
            <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('/geographicalLocation/'.$industry->industryID.'/show')}}">Show</a>
            <a class="glyphicon glyphicon-info-sign btn btn-success">Edit</a> 
            <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
        </td>
    </tr>

    @endforeach     
</table>
@endsection
