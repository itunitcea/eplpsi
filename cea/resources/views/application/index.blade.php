@extends('masterApplication')
@section('content')
<h3> List of Applications</h3>
<a style="float: right;" class="btn btn-success" href="{{url('/application/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE APPLICATION</a>
    <br>
    <br>
    <form class="form-horizontal" >
    <div class="form-group">
        <label class="col-sm-4 control-label" style="text-align: right">File Number :</label>
        <label class="col-sm-8 control-label" style="text-align: left">EA/AP/PDA/MP/A53/4797/2010 </label>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label" style="text-align: right">Industry Name :</label>
        <label class="col-sm-8 control-label" style="text-align: left">Metal Quarry</label>
    </div>
    <hr/>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>Date</th>
                <th>Applicant Name</th>
                <th>Address</th>
                <th>Contact No</th>
                <th>Application Type</th>
                <th>OPTIONS</th>
            </tr>
        </thead>
        @foreach($epl_licence as $epl_licence)
        <tr>
            <th>{{$epl_licence->applicationID}}</th>
            <th>{{$epl_licence->appDate}}</th>
            <th>{{$epl_licence->ApplicantName}}</th>
            <th>{{$epl_licence->Address}},{{$epl_licence->AddLine1}},{{$epl_licence->AddLine2}} </th>
            <th>{{$epl_licence->ContactNo}}</th>
            <th>{{$epl_licence->applicationtype}}</th>
            <td><a class=" btn btn-info" href="{{url('/application/'.$epl_licence->applicationID.'/show')}}" >Show</a>
                <a class=" btn btn-warning" href="{{url('/application/'.$epl_licence->applicationID.'/edit')}}">Edit</a></td>
        </tr>
        @endforeach

    </table>
   
</form>
@endsection
