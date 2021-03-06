@extends('master')
@section('content')


    <body>
       <div class="jumbotron">
                
            
     	<form class="form-horizontal" >
		    <div class="form-group">
			    <label class="col-sm-2 control-label">Application Language</label>
			    <div class="col-sm-10">
					<select class="form-control" width="100">
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
					<input type="text" class="form-control" placeholder="Enter Name of Industry">
				</div>
			</div>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Type of Industry</label>
			    <div class="col-sm-10">
					<select class="form-control" width="100">
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
					<select class="form-control" width="100">
						<option value="" selected="selected"></option>
						<option value="1" >Yes</option>
						<option value="2" >No</option>
					</select>
				</div>
			</div>
		  	<div class="form-group">
			    <label class="col-sm-2 control-label">Category of Industry</label>
			    <div class="col-sm-10">
					<select class="form-control" width="100">
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
					<select class="form-control" width="100">
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
					<textarea class="form-control" rows="2"></textarea>
				</div>
			</div>
		   	<div class="form-group">
			    <label class="col-sm-2 control-label">Industry Location Address Line 1</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Industry Location Address Line 1">
				</div>
			</div>
		  	<div class="form-group">
			    <label class="col-sm-2 control-label">Industry Location Address Line 2</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Industry Location Address Line 2">
				</div>
			</div>
		  	<div class="form-group">
			    <label class="col-sm-2 control-label">City</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter City">
				</div>
			</div>
		  	<div class="form-group">
			    <label class="col-sm-2 control-label">Province</label>
			    <div class="col-sm-10">
					<select class="form-control" width="100">
						<option value="" selected="selected"></option>
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
						<option value="" selected="selected"></option>
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
						<option value="" selected="selected"></option>
						<option value="1" >Kalutara U. C.</option>
						<option value="2" >...</option>
						<option value="3" >....</option>
			    	</select>
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
							<input type="text" class="form-control" placeholder="Enter Local Investment">
						</div>
						<br/><br/>
						<label class="col-sm-2 control-label">Foreign</label>
					    <div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter Foreign Investment">
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
			</br/>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Number of Shifts/Day and Times</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Number of Shifts/Day and Times">
				</div>
		  </div>
		  <div class="form-group">
			    <label class="col-sm-2 control-label">No of Workers in Each Shift</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter No of Workers in Each Shift">
				</div>
		  </div>
		  <div class="form-group">
			    <label class="col-sm-2 control-label">Land use of the area within five km radius</label>
			    <div class="col-sm-10">
					<select class="form-control" width="100">
						<option value="" selected="selected"></option>
						<option value="1" >Residential</option>
						<option value="2" >......</option>
						<option value="3" >......</option>
				    </select>
				</div>
		  </div>
		  <div class="form-group">
			    <label class="col-sm-2 control-label">Land available for treatment plant</label>
			    <div class="col-sm-10">
					<input type="text" class="form-control" placeholder="Enter Land available for treatment plant">
				</div>
		  </div>
 		  <div class="form-group">
			    <label class="col-sm-2 control-label">Inspection Group Name</label>
			    <div class="col-sm-10">
					<select class="form-control" width="100">
						<option value="" selected="selected"></option>
						<option value="1" >grp 1</option>
						<option value="2" >......</option>
						<option value="3" >......</option>
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
        <br/>

                </div>
            </div>
    </body>
@endsection
