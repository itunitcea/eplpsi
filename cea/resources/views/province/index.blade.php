
@extends('master')

@section('content')

    <h2>List Of Provinces</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/province/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
        <thead>
            <tr>
                <th>Province Code</th>
                <th>Province Name</th>
                <th>Option</th>
            </tr>
        </thead>
        @foreach($province as $province)
            <tr>
                <td>{{$province->prcode}}</td>
                <td>{{$province->prname}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>

@endsection




