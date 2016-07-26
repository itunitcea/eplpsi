@extends('master')
@section('content')
    <h3> List of Applications</h3>
    <a href="{{url('application/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <form class="form-horizontal" >
            <div class="form-group">
                    <label class="col-sm-4 control-label">File Number :</label>
                    <label class="col-sm-8 control-label">EA/AP/PDA/MP/A53/4797/2010 </label>
            </div>
            <div class="form-group">
                    <label class="col-sm-4 control-label">Industry Name :</label>
                    <label class="col-sm-8 control-label">Metal Quarry</label>
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
                <th>Industry ID</th>
                <th>OPTIONS</th>
                </tr>
            </thead>

            <tr>
                <th>13725</th>
                <th>2010/01/25</th>
                <th>Mr.W.L.Wickramasinghe</th>
                <th>Donthapitiya,3rd Bridge,Moragahapallama</th>
                <th></th>
                <th>EPL Application</th>
                <th>13738</th>
                <td>
                 
                    <a class="glyphicon glyphicon-info-sign btn btn-success">Edit</a> 
                    <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
                </td>
            </tr>


        </table>
    </form>
@endsection
