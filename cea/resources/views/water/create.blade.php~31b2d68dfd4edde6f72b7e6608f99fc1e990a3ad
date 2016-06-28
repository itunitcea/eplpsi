@extends('master')
@section('content')


    <body>
       <div class="jumbotron">
       		<form class="form-horizontal" action="water_action.php" method="post" enctype="multipart/form-data">
			<br/>
		    <fieldset>
			<legend style="color:green;text-align:left;">Details of Water</legend>
			<br/>
			<div class="form-group">
			    <label class="col-sm-2 control-label" >Processing (m3/day):</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Processing (m3/day)" name="processing">
				</div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Cooling (m3/day):</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Cooling (m3/day)" name="cooling">
				</div>
		    </div>
		 	<div class="form-group">
			    <label class="col-sm-2 control-label">Washing (m3/day):</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Washing (m3/day)" name="washing">
				</div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Domestic (m3/day):</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Domestic (m3/day)" name="domestic">
				</div>
		    </div>
		    <div class="form-group">
			    <label class="col-sm-2 control-label">Public Supply:</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Public Supply " name="publicsupply">
				</div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Ground Water (Wells, Springs):</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Ground Water (Wells, Springs)" name="groundwater">
				</div>
		    </div>
		 	<div class="form-group">
			    <label class="col-sm-2 control-label">Surface Water (Stream, River):</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Surface Water (Stream, River)" name="surfacewater">
				</div>
			</div>

			<div class="form-group">
	  			<fieldset>
					<legend style="color:green;text-align:left;"> Total daily discharge (m3/day): </legend>
					    <label class="col-sm-2 control-label">Domestic</label>
					    <div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter Total daily discharge of domestic" name="totaldomestic">
						</div>
						<br/><br/>
						<label class="col-sm-2 control-label">Industrial</label>
					    <div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter Total daily discharge of Industrial" name="totalIndustrial">
						</div>
				</fieldset>
		  	</div>

			<div class="form-group">
			    <label class="col-sm-2 control-label">Method of Discharge water :</label>
			    <div class="col-sm-10">
					<select class="form-control" width="100" name="dischargemethod">
						<option value="" selected="selected"></option>
						<option value="1" >Open channel</option>
						<option value="2" >Pipeline</option>
						<option value="3" >Covered Drain</option>
						<option value="3" >Other</option>
				    </select>
				</div>
		    </div>

		    <div class="form-group">
			    <label class="col-sm-2 control-label">Final point of discharge of waste water :</label>
			    <div class="col-sm-10">
					<select class="form-control" width="100" name="dischargepoint">
						<option value="" selected="selected"></option>
						<option value="1" >Agricultural Land</option>
						<option value="2" >Marshy Land</option>
						<option value="3" >Sewer</option>
						<option value="4" >Lake</option>
						<option value="5" >River</option>
						<option value="6" >Ela</option>
						<option value="5" >Sea</option>
						<option value="6" >Other</option>
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
		</form>

 			 </div>
        <br/>
      </div>
    </body>
@endsection
