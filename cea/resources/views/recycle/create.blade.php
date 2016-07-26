@extends('master')
@section('content')
<h2>Add New Recycle Details </h2>

<form class="form-horizontal" action="{{url('/recycle')}}" method="post" >
    <fieldset>
        <legend style="color:green;text-align:left;"> Possible salvage of any waste material for reuse : </legend>
        <label class="col-sm-2 control-label">Specify:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="recycle">
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
