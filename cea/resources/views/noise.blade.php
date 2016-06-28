@extends('master')
@section('content')


    <body>
       <div class="jumbotron">
       		<form class="form-horizontal" >
			<fieldset>
			<legend style="color:green;text-align:left;">Details if Noise</legend>
			<br/>
			<div class="form-group">
			    <label class="col-sm-2 control-label">Does your industry cause noise pollition:	</label>
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
					<input type="text" class="form-control" placeholder=" Enter Method of abatement">
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
    </body>
@endsection
