@extends('masterApplication')
@section('content')


     	<form class="form-horizontal" >
            <div class="form-group">
                    <label class="col-sm-4 control-label" >File Number :</label>
                    <label class="col-sm-8 control-label" style="text-align: left">EA/AP/PDA/MP/A53/4797/2010 </label>
            </div>
            <div class="form-group">
                    <label class="col-sm-4 control-label">Industry Name :</label>
                    <label class="col-sm-8 control-label" style="text-align: left">Metal Quarry</label>
            </div>
            <hr/>
            <div class="form-group">
                <label class="col-sm-4 control-label">Application Date</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$epl_licence->appDate}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Application Type</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$epl_licence->applicationtype}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Name Of Applicant</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$epl_licence->ApplicantName}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Postal Address Line1</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$epl_licence->Address}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Postal Address Line2</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$epl_licence->AddLine1}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Postal Address City</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$epl_licence->AddLine2}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Telephone No</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$epl_licence->ContactNo}}</label>
            </div>
            
            <div>
            <center>
                <a class="btn btn-warning" href="{{url('application/'.$epl_licence->applicationID.'/edit')}}">Edit</a> 
                <a class="btn btn-info" href="/application">Back </a>
            </center>
        </div>
	</form>
        <br/>
   
@endsection
