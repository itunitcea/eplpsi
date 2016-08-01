@extends('master2')
@section('content')
<h2>Edit Geographical Location Details </h2>

<form class="form-horizontal" action="{{url('/geographicalLocation')}}" method="post" >
    <fieldset>
        <legend style="color:green;text-align:left;"> Geographical Locations  :</legend>
        <label class="col-sm-2 control-label">E :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$industry->E}}">
        </div>
        <label class="col-sm-2 control-label">N :</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$industry->N}}">
        </div>
        <br/><br/>

        <div>
            <center>
                <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
                <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger"/>
            </center>
        </div>
    </fieldset>
</form>
@endsection
