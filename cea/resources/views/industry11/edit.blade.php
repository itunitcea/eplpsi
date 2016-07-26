@extends('master')
@section('content')
<h2>Add New Category </h2>

<form class="form-horizontal" action="{{url('/industry')}}" method="post" >
    <div class="form-group">
        <label class="col-sm-2 control-label">Application Language</label>
        <div class="col-sm-10">
            <select class="form-control" width="100"> {{ industry->industryID }} 
                <option value="" selected="selected"></option>
                <option value="1" >English</option>
                <option value="2" >Sinhala</option>
                <option value="3" >Tamil</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Name of Industry</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Name of Industry">{{ industry->industryName }}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Type of Industry</label>
        <div class="col-sm-10">
            <select class="form-control" width="100">{{ industry->industrytype }}
                <option value="" selected="selected"></option>
                <option value="1" >Manufacture</option>
                <option value="2" >........</option>
                <option value="3" >.....</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">BOI Registration</label>
        <div class="col-sm-10">
            <select class="form-control" width="100">{{ industry->BOIregistration }}
                <option value="" selected="selected"></option>
                <option value="1" >Yes</option>
                <option value="2" >No</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Category of Industry</label>
        <div class="col-sm-10">
            <select class="form-control" width="100">{{ industry->eplcategoryid }}
                <option value="" selected="selected"></option>
                <option value="1" >A68</option>
                <option value="2" >.....</option>
                <option value="3" >...</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Sector of Industry</label>
        <div class="col-sm-10">
            <select class="form-control" width="100">{{ industry->sector }}
                <option value="" selected="selected"></option>
                <option value="1" >SL</option>
                <option value="2" >...</option>
                <option value="3" >...</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Nature of Industry</label>
        <div class="col-sm-10">
            <textarea class="form-control" rows="2">{{ industry->industrynature }}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Industry Location Address Line 1</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Industry Location Address Line 1">{{ industry->indadd1 }}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Industry Location Address Line 2</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Industry Location Address Line 2">{{ industry->indadd2 }}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">City</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter City">{{ industry->indadd3 }}
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Province</label>
        <div class="col-sm-10">
            <select class="form-control" width="100">
                <option value="" selected="selected">{{ industry->provincecode }}</option>
                <option value="1" >Western Province</option>
                <option value="2" >....</option>
                <option value="3" >.....</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">District</label>
        <div class="col-sm-10">
            <select class="form-control" width="100">
                <option value="" selected="selected">{{ industry->districtcode }}</option>
                <option value="1" >Kalutara</option>
                <option value="2" >...</option>
                <option value="3" >....</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Local Authority</label>
        <div class="col-sm-10">
            <select class="form-control" width="100">
                <option value="" selected="selected">{{ industry->laid }}</option>
                <option value="1" >Kalutara U. C.</option>
                <option value="2" >...</option>
                <option value="3" >....</option>
            </select>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Grama Niladari Division</label>
            <div class="col-sm-10">
                <select class="form-control" width="100" >{{ industry->gnd_id }}
                    <option value="" selected="selected"></option>
                    <option value="1" >.....</option>
                    <option value="2" >...</option>
                    <option value="3" >....</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Divisional Secretariat Division</label>
            <div class="col-sm-10">
                <select class="form-control" width="100" >{{ industry->dsd_id }}
                    <option value="" selected="selected"></option>
                    <option value="1" >.....</option>
                    <option value="2" >...</option>
                    <option value="3" >....</option>
                </select>
            </div>
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Is the site within an Approved Industrial Zone</label>
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
            <legend style="color:green;text-align:left;"> Investment Details </legend>
            <label class="col-sm-2 control-label">Local</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Local Investment">{{ industry->localinvestment }}
            </div>
            <br/><br/>
            <label class="col-sm-2 control-label">Foreign</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Foreign Investment">{{ industry->foreigninvestment }}
            </div>
        </fieldset>
    </div>

    <fieldset>
        <legend style="color:green;text-align:left;">Other Details</legend>
        <div class="form-group">
            <label class="control-label col-sm-2" for="datOperation">Date of Commencement of operation :</label>
            <div class="col-sm-10">          
                <input type="date" class="form-control" id="datOperation">
            </div>
        </div>
        <br/>
        <div class="form-group">
            <label class="col-sm-2 control-label">Number of Shifts/Day and Times</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Number of Shifts/Day and Times">{{ industry->noOfShift }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">No of Workers in Each Shift</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter No of Workers in Each Shift">{{ industry->noOfWorkersEachShift }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Land use of the area within five km radius</label>
            <div class="col-sm-10">
                <select class="form-control" width="100">
                    <option value="" selected="selected">{{ industry->landUseWithIn5Km }}</option>
                    <option value="1" >Residential</option>
                    <option value="2" >......</option>
                    <option value="3" >......</option>
                </select>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Land available for treatment plant</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" placeholder="Enter Land available for treatment plant">{{ industry->landAvailableForTreatmantPlant }}
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-2 control-label">Inspection Group Name</label>
            <div class="col-sm-10">
                <select class="form-control" width="100">
                    <option value="" selected="selected">{{ industry->insGrpID }}</option>
                    <option value="1" >grp 1</option>
                    <option value="2" >......</option>
                    <option value="3" >......</option>
                </select>
            </div>
        </div>
        <div>
            <center>
                 <input type="submit" value="SAVE"/>
            </center>
        </div>
    </fieldset>
</form>
<br/>

</div>
</div>
</body>
@endsection
