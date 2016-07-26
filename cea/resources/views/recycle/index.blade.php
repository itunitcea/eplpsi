@extends('master')
@section('content')
<h3> Recycle / Reuse Details</h3>
<a href="{{url('recycle/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
<table class="table table-striped">
    <thead>
        <tr>
            <th>No</th>
            <th>Possible salvage of any waste material for reuse :</th>
            <th>OPTIONS</th>
        </tr>
    </thead>

    <tr>
        @foreach($industry as $industry)
    <tr>
        <td>{{$industry->industryID}}</td>
        <td>{{$industry->recycle}}</td>
        <td>
            <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('/recycle/'.$industry->industryID.'/show')}}">Show</a>
            <a class="glyphicon glyphicon-info-sign btn btn-success">Edit</a> 
            <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
        </td>
    </tr>
    @endforeach      
</table>
@endsection
