@extends('master')
@section('content')


    <body>
       <div class="jumbotron">
       		<form class="form-horizontal" action="energy_action.php" method="post" enctype="multipart/form-data">
			<br/>
		    <div class="form-group">
	  			<fieldset>
					<legend style="color:green;text-align:left;"> Total daily discharge (m3/day): </legend>
					    <label class="col-sm-2 control-label">a. In-plant generation(in kw/h):</label>
					    <div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter In-plant generation(in kw/h):" name="inplantenergy">
						</div>
						<div>
							<br/><br/>
							<br/><br/>
						</div>
						
						<label class="col-sm-2 control-label">b. Public supply(in kw/h):</label>
					    <div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter Public supply(in kw/h):" name="publicenergy">
						</div>
						<br/>

		  		</div>
		  	
              <div>
                <center>
                    <a href="#" class="btn btn-success"  style="width:80px">Save</a>
					<a href="epldashboard.php" class="btn btn-danger" style="width:80px">Cancel</a>
                </center>
            </div>
            <br/><br/>
		</fieldset>
		</form>

        <br/>
      </div>
    </body>
@endsection
