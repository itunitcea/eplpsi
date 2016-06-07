@extends('master')
@section('content')


    <body>
       <div class="jumbotron">
       		<form class="form-horizontal" action="recycle_action.php" method="post" enctype="multipart/form-data">
			<br/>
		    <div class="form-group">
	  			<fieldset>
					<legend style="color:green;text-align:left;"> Possible salvage of any waste material for reuse : </legend>
					    <label class="col-sm-2 control-label">Specify:</label>
					    <div class="col-sm-10">
							<input type="text" class="form-control" name="reuse">
						</div>
						<br/><br/>
                      <div>
                        <center>
                            <a href="#" class="btn btn-success"  style="width:80px">Save</a>
							<a href="epldashboard.php" class="btn btn-danger" style="width:80px">Cancel</a>
                        </center>
                    </div>
                </fieldset>
              </div>
            </form>
        <br/>
      </div>
    </body>
@endsection
