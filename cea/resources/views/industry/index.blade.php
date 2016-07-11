
@extends('master')

@section('content')

    <h2>List Of Industries</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/industry/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
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
                <td>{{$industry->eplcategoryid}}</td>
                <td>{{$industry->sector}}</td>
                <td>{{$industry->provincecode}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>

@endsection