
@extends('master')

@section('content')

    <h2>List Of Categories</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/sector/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <table class="table">
        <thead>
            <tr>
                <th>Sector Code</th>
                <th>Sector Description</th>
                <th>A Category List NO Range</th>
                <th>B Category List NO Range</th>
                <th>C Category List NO Range</th>
                <th>Option</th>
            </tr>
        </thead>
        @foreach($sectors as $sector)
            <tr>
                <td>{{$sector->scode}}</td>
                <td>{{$sector->sdescription}}</td>
                <td>{{$sector->Alistnorange}}</td>
                <td>{{$sector->Blistnorange}}</td>
                <td>{{$sector->Clistnorange}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        @endforeach
    </table>

@endsection




