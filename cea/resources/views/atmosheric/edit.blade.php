@extends('master')
@section('content')

<h2>Emission to the Atmosphere</h2>

<label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Yes
</label>
<label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    No
</label>

<legend style="color:green;text-align:left;"> Possible emissions : </legend>
<label class="col-sm-2 control-label">Oxides of Nitrogen - </label>

<label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Yes
</label>
<label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    No
</label>



<label class="col-sm-2 control-label">Oxides of Sulphur - </label>

<label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Yes
</label>
<label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    No
</label>



<label class="col-sm-2 control-label">Dust and Soot - </label>

<label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Yes
</label>
<label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    No
</label>



<label class="col-sm-2 control-label">Any Other</label>
<input type="text" class="form-control" placeholder=" ">



<h2> Details of Stacks/Chimneys </h2>


<label class="col-sm-2 control-label">Number of Stacks/Chimneys :</label>
<input type="text" class="form-control" placeholder="Enter Number of Stacks/Chimneys">



<label class="col-sm-2 control-label">Height :</label>
<input type="text" class="form-control" placeholder="Enter Height">


<h2>Details of odour problems</h2>  

<label class="col-sm-2 control-label">Does your industry cause odour problems : </label>

<label>
    <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
    Yes
</label>
<label>
    <input type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
    No
</label>



<label class="col-sm-2 control-label">Source :</label>
<input type="text" class="form-control" placeholder="Enter Source">



<label class="col-sm-2 control-label">Method of abatement :	</label>
<input type="text" class="form-control" placeholder="Enter Method of abatement">


<center>
    <a href="#" class="btn btn-success"  style="width:80px">Save</a>
    
</center>

    <input type="submit" value="EDIT"/>

@endsection

