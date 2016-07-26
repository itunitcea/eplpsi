@extends('master')

@section('content')

<h2>Add Noise Pollution Details </h2>

<form class="form-horizontal" action="{{url('/noise')}}" method="post" >

    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
    <div class="form-group">
        <label class="col-sm-2 control-label">Does your industry cause noise pollution:	</label>
        <div class="col-sm-10">
            <div class="radio">
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                    Yes
                </label>
                <label>
                    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
                    No
                </label>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Source </label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Source " name="noise_pollution_source">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Method of abatement</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Method of abatement" name="noise_pollution_method">
        </div>
    </div>

    <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
    <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger"/>

</form>
@endsection