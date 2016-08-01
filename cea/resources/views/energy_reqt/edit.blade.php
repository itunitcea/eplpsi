@extends('master2')
@section('content')
<h2>Add New Energy Requirement Details </h2>

<form class="form-horizontal" action="{{url('/energy_reqt')}}" method="post" >
    <fieldset>
        <div class="form-group">

            <legend style="color:green;text-align:left;"> Total daily discharge (m3/day): </legend>
            <label class="col-sm-2 control-label">a. In-plant generation(in kw/h):</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$energy_reqt->totalenergyconsumption_inplantgeneration}}">
            </div>
            <div>
                <br/><br/>
                <br/><br/>
            </div>

            <label class="col-sm-2 control-label">b. Public supply(in kw/h):</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" value="{{$energy_reqt->totalenergyconsumption_publicsupply}}">
            </div>
            <br/>

        </div>

        <div>
            <center>
                <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
                <a class="glyphicon btn btn-danger" href="/energy_reqt">Back </a>
            </center>
        </div>
    </fieldset>
</form>
@endsection
