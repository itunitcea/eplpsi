
@extends('master')

@section('content')

    <h2>List Of Categories</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/category/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
        <thead>
            <tr>
                <th>Category ID</th>
                <th>Category Name</th>
                <th>Details</th>
                <th>Option</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>A1</td>
                <td>Service Station</td>
                <td>This is regarding the service station</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('/category/show')}}">Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
            <tr>
                <td>A2</td>
                <td>Food</td>
                <td>This is regarding the Food related industries</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
            <tr>
                <td>A3</td>
                <td>Hotels</td>
                <td>This is regarding the Hotels</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        </tbody>
    </table>

@endsection




