@extends('master')
@section('content')


    <body>
       <div class="jumbotron">
       			<form class="form-horizontal" action="emergency_action.php" method="post" enctype="multipart/form-data">
			<br/>
		    <div class="form-group">
			    <label class="col-sm-2 control-label">Is there emission to the Atmosphere:	</label>
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
						    <label class="col-sm-2 control-label">Oxides of Sulphur - </label>
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
						    <label class="col-sm-2 control-label">Dust and Soot - </label>
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
						    <label class="col-sm-2 control-label">Any Other</label>
						    <div class="col-sm-10">
								<input type="text" class="form-control" placeholder=" ">
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
							<input type="text" class="form-control" placeholder="Enter Number of Stacks/Chimneys">
						</div>
					</div>

					<div class="form-group">
					    <label class="col-sm-2 control-label">Height :</label>
					    <div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter Height">
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
						<label class="col-sm-2 control-label">Source :</label>
						<div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter Source">
						</div>
					</div>

					<div class="form-group">
					    <label class="col-sm-2 control-label">Method of abatement :	</label>
					    <div class="col-sm-10">
							<input type="text" class="form-control" placeholder="Enter Method of abatement">
						</div>
				    </div>
                    
                    <div>
                        <center>
                            <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                            <a href="epldashboard.php" class="btn btn-danger" style="width:80px">Cancel</a>
                        </center>
                    </div>
                    </fieldset>
                </div>
    <!-- Content Changing end -->
      </div>
    </body>
@endsection
