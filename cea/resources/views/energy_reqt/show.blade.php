@extends('master2')
@section('content')
<h3>Industry Details </h3>
<form class="form-horizontal" >
    <h2>Energy Requirements Details</h2>
    <div class="form-group">
        <label class="col-sm-4 control-label">File Number :</label>
        <label class="col-sm-8 control-label" style="text-align: left">EA/AP/PDA/MP/A53/4797/2010 </label>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Industry Name :</label>
        <label class="col-sm-8 control-label" style="text-align: left">Metal Quarry</label>
    </div>
    <hr/>
    <fieldset>
        <div class="form-group">
            <label class="col-sm-5 control-label">In-plant generation(in kw/h) :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$energy_reqt->totalenergyconsumption_inplantgeneration}}</label>
        </div>
        <div class="form-group">
            <label class="col-sm-5 control-label">Public supply(in kw/h) :</label>
            <label class="col-sm-7 control-label" style="text-align: left">{{$energy_reqt->totalenergyconsumption_publicsupply}}</label>
        </div>

        <div>
            <center>
                <a class="glyphicon glyphicon-plus btn btn-warning" href="{{url('energy_reqt/'.$energy_reqt->er_id.'/edit')}}">Edit</a> 
                <a class="glyphicon btn btn-danger" href="/energy_reqt">Back </a>
            </center>
        </div>
    </fieldset>
</form>
<br/>

@endsection
