@extends('master')

@section('content')

    <h2>List Of Industries</h2>
    <a style="float: right;" class="btn btn-success" href="{{url('/industry/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE INDUSTRY</a>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Industry ID</th>
                <th>Industry Name</th>
                <th>Industry Type</th>
                <th>Industry Category</th>
                <th>Sector</th>
                <th>Province</th>
                <th>Option</th>
            </tr>
        </thead>
        @foreach($industries as $industry)
            <tr>
                <td>{{$industry->industryID}}</td>
                <td>{{$industry->industryName}}</td>
                <td>{{$industry->industrytype}}</td>
                <td>{{$industry->category()["attributes"]["categoryID"]}}</td></td>
                <td>{{$industry->sector}}</td>
                <td>{{$industry->provincecode}}</td>
                <td><a class=" btn btn-info" href="{{url('/industry/'.$industry->industryID.'/show')}}" ><span class="glyphicon glyphicon-eye-open"></span> Show</a>
                    <a class=" btn btn-warning" href="{{url('/industry/'.$industry->industryID.'/edit')}}"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
            </tr>
        @endforeach

    </table>
    <div>{!! $industries->render() !!}</div>
@endsection