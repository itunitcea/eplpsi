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
        <label class="col-sm-2 control-label">Application Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" value="{{$epl_licence->appDate}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Application Type</label>
        <div class="col-sm-10">
            <select class="form-control" width="100" value="{{$epl_licence->applicationtype}}">
                <option value="" selected="selected"></option>
                <option value="1" >EPL Application</option>
                <option value="2" >Renewal EPL Application</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Name Of Applicant</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$epl_licence->ApplicantName}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Postal Address Line1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$epl_licence->Address}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Postal Address Line2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$epl_licence->AddLine1}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Postal Address City</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$epl_licence->AddLine2}}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Telephone No</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$epl_licence->ContactNo}}">
        </div>
    </div>

    <div>
        <center>
            <a href="#" class="btn btn-success"  style="width:80px">Save</a>
            <a class="btn btn-info" href="/application">Back </a></center>
    </div>
</form>
<br/>

@endsection
