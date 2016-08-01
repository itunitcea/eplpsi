@extends('master2')
@section('content')


<fieldset>
    <legend style="color:green;text-align:left;">Inspection Details</legend>
    <br/>
    <div class="form-group">
        <label class="col-sm-2 control-label" >Officer Name:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Officer Name " name="officerName">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Inspection Date:</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" placeholder="Enter Inspection Date" name="inspectionDate">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Remarks:</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Remarks" name="remarks">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Reason for Inspection :</label>
        <div class="col-sm-10">
            <select class="form-control" width="100" name="inspectionReason">
                <option value="" selected="selected"></option>
                <option value="1" >New EPL</option>
                <option value="2" >EPL Renewal</option>
                <option value="3" >Accident / Complaint</option>
                <option value="3" >Regular Monitoring</option>
                <option value="3" >Other</option>
            </select>
        </div>
    </div>
    <div>
        <center>
            <a href="#" class="btn btn-success"  style="width:80px">Save</a>
            <a href="epldashboard.php" class="btn btn-danger" style="width:80px">Cancel</a>
        </center>
    </div>
</fieldset>

@endsection
