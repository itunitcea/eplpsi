@extends('master2')
@section('content')

<h2>Edit Details of Atmospheric Emission</h2>

<form class="form-horizontal" action="{{url('/atmosphericEmission')}}" method="post">
    <br/>
    <div class="form-group">
        <label class="col-sm-2 control-label">Is there emission to the Atmosphere :</label>
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
        <fieldset>
            <legend style="color:green;text-align:left;"> Possible emissions : </legend>
            <div class="form-group">
                <label class="col-sm-2 control-label">Oxides of Nitrogen - </label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="nitrogenOxide" id="optionsRadios1" value="option1" checked>
                            Yes
                        </label>
                        <label>
                            <input type="radio" name="nitrogenOxide" id="optionsRadios2" value="option2">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Oxides of Sulphur - </label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="sulfurOxide" id="optionsRadios1" value="option1" checked>
                            Yes
                        </label>
                        <label>
                            <input type="radio" name="sulfurOxide" id="optionsRadios2" value="option2">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Dust and Soot - </label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="dustAndSoot" id="optionsRadios1" value="option1" checked>
                            Yes
                        </label>
                        <label>
                            <input type="radio" name="dustAndSoot" id="optionsRadios2" value="option2">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Any Other</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$atmospheric_emission->other}}">
                </div>
            </div>
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
            <legend style="color:green;text-align:left;"> Details of Stacks/Chimneys </legend>

            <div class="form-group">
                <label class="col-sm-2 control-label">Number of Stacks/Chimneys :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$atmospheric_emission->noOfStacks}}">
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Height :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$atmospheric_emission->height}}">
                </div>
            </div>
        </fieldset>
    </div>

    <div class="form-group">
        <fieldset>
            <legend style="color:green;text-align:left;"> Details of odour problems </legend>

            <div class="form-group">
                <label class="col-sm-2 control-label">Does your industry cause odour problems : </label>
                <div class="col-sm-10">
                    <div class="radio">
                        <label>
                            <input type="radio" name="causedOdorProblems" id="optionsRadios1" value="option1" checked>
                            Yes
                        </label>
                        <label>
                            <input type="radio" name="causedOdorProblems" id="optionsRadios2" value="option2">
                            No
                        </label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Source :</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$atmospheric_emission->source}}" >
                </div>
            </div>

            <div class="form-group">
                <label class="col-sm-2 control-label">Method of abatement :	</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$atmospheric_emission->modeofabatement}}">
                </div>
            </div>

            <div>
                <center>
                    <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                    <a class="glyphicon btn btn-danger" href="/atmosphericEmission">Back </a>
                </center>
            </div>
        </fieldset>
    </div>
@endsection

