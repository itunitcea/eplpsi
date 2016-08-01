@extends('master2')
@section('content')


<form class="form-horizontal" action="{{url('/emergency')}}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
        <fieldset>
            <legend style="color:green;text-align:left;">Emergency Contact : </legend>
            <div class="form-group"> 
                <label class="col-sm-2 control-label">Name:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$industry->EmeCntname}}">
                </div>
            </div>
            <div class="form-group"> 
                <label class="col-sm-2 control-label">Contact No:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$industry->EmeCntactTel}}">
                </div>
            </div>
            <div class="form-group"> 
                <label class="col-sm-2 control-label">Mobile No:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$industry->EmeCntactMob}}">
                </div>
            </div>
            <div>
                <center>
                    <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
                    <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger"/>
                </center>
            </div>
        </fieldset>
    </div>
</form>
@endsection
