@extends('master')
@section('content')


<fieldset>
    <legend style="color:green;text-align:right;">Details of Solid Waste</legend>
    <form class="form-horizontal" role="form">
        <div class="form-group">
            <label class="control-label col-sm-2" for="prdByprod">Type and Nature of Soild Wastes :</label>
            <div class="col-sm-10">          
                <input type="Text" class="form-control" id="prdByprod" placeholder="Enter Type and Nature of Soild Wastes">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="qty">Total quantity of soild waste - kg/day:</label>
            <div class="col-sm-10">          
                <input type="Text" class="form-control" id="qty" placeholder="Enter Total quantity">
            </div>
        </div>
        <div class="form-group">
            <label class="control-label col-sm-2" for="prdStatus">Method of Disposal of Soild Waste :</label>
            <div class="col-sm-10">          
                <input type="Text" class="form-control" id="prdStatus" placeholder="Enter Method of Disposal of Soild Waste">
            </div>
        </div>
        <br/>
        <div>
            <center>
                <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                <a href="epldashboard.php" class="btn btn-danger" style="width:80px">Cancel</a>
            </center>
        </div>
    </form>
</fieldset>


@endsection
