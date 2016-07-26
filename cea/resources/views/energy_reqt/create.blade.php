@extends('master')
@section('content')
<h2>Add New Energy Requirement Details </h2>

<form class="form-horizontal" action="{{url('/energy_reqt')}}" method="post" >
    <fieldset>
        <div class="form-group">

            <legend style="color:green;text-align:left;"> Total daily discharge (m3/day): </legend>
            <label class="col-sm-2 control-label">a. In-plant generation(in kw/h):</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter In-plant generation(in kw/h):" name="totalenergyconsumption_inplantgeneration">
            </div>
            <div>
                <br/><br/>
                <br/><br/>
            </div>

            <label class="col-sm-2 control-label">b. Public supply(in kw/h):</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Public supply(in kw/h):" name="totalenergyconsumption_publicsupply">
            </div>
            <br/>

        </div>

        <div>
            <center>
                <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
                <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger"/>
            </center>
        </div>
    </fieldset>
</form>
@endsection
