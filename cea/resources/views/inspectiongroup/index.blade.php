@extends('master')

@section('content')

    <h2>List Of Inspection Groups</h2>
    <a style="float: right;" class="btn btn-success" href="{{url('/inspectiongroup/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE Inspection Groups</a>
    <br>
    <br>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Inspection Group ID</th>
                <th>Inspection Group Name</th>
                <th>Office</th>
                <th>Option</th>
            </tr>
        </thead>
        @foreach($inspectiongroups as $inspectiongroup)
            <tr>
                <td>{{$inspectiongroup->insgroupID}}</td>
                <td>{{$inspectiongroup->groupname}}</td>
                <td>{{$inspectiongroup->officeID}}</td>
                <td><a class=" btn btn-info" href="{{url('/inspectiongroup/'.$inspectiongroup->insgroupID.'/show')}}" ><span class="glyphicon glyphicon-eye-open"></span> Show</a>
                    <a class=" btn btn-warning" href="{{url('/inspectiongroup/'.$inspectiongroup->insgroupID.'/edit')}}"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
            </tr>
        @endforeach

    </table>
    <div>{!! $inspectiongroups->render() !!}</div>
@endsection