
@extends('master')

@section('content')

    <h2>List Of Sectors</h2>
    <hr/>
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
        @foreach($sector as $sector)
            <tr>
                <td>{{$sector->scode}}</td>
                <td>{{$sector->sdescription}}</td>
                <td>{{$sector->Alistnorange}}</td>
                <td>{{$sector->Blistnorange}}</td>
                <td>{{$sector->Clistnorange}}</td>
                <td><a class="glyphicon glyphicon-eye-open btn btn-info"  href="{{url('/sector/'.$sector->scode.'/show')}}" >Show</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning" href="{{url('/sector/'.$sector->scode.'/edit')}}" >Edit</a></td>
            </tr>
        @endforeach
    </table>

@endsection




