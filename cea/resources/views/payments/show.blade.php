@extends('master')
@section('content')


    <body>
       <div class="jumbotron">
                
            
     	<form class="form-horizontal" >
            <div class="form-group">
                    <label class="col-sm-4 control-label">File Number :</label>
                    <label class="col-sm-8 control-label">EA/AP/PDA/MP/A53/4797/2010 </label>
            </div>
            <div class="form-group">
                    <label class="col-sm-4 control-label">Industry Name :</label>
                    <label class="col-sm-8 control-label">Metal Quarry</label>
            </div>
            <hr/>
            <div class="form-group">
                <label class="col-sm-4 control-label">Fee Type</label>
                <label class="col-sm-8 control-label">EPL Application</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Calculated Payment</label>
                <label class="col-sm-8 control-label"></label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Payment Calculated Date</label>
                <label class="col-sm-8 control-label"></label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Date of Payment</label>
                <label class="col-sm-8 control-label"></label>
            </div>
            
            <div class="form-group">
                <label class="col-sm-4 control-label">Recipt No</label>
                <label class="col-sm-8 control-label"></label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label">Status</label>
                <label class="col-sm-8 control-label"></label>
            </div>
            <div>
                <center>
                        <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                        <a href="epldashboard.php" class="btn btn-danger" style="width:80px">Cancel</a>
                </center>
            </div>
	</form>
        <br/>
    </div>

</body>
@endsection
