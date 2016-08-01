@extends('master2')

@section('content')

<h2>Edit Solid Waste Details</h2>

<form class="form-horizontal" action="{{url('/solidWaste')}}" method="post" >
    <div class="form-group">
        <label class="control-label col-sm-4" for="prdByprod">Type and Nature of Soild Wastes :</label>
        <div class="col-sm-8"> 
            <input type="Text" class="form-control" id="prdByprod" value="{{$solidwaste->natureOfSolidWaste}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="qty">Total quantity of soild waste - kg/day:</label>
        <div class="col-sm-8"> 
            <input type="Text" class="form-control" id="qty" value="{{$solidwaste->total_qty_sw}}">
        </div>
    </div>
    <div class="form-group">
        <label class="control-label col-sm-4" for="prdStatus">Method of Disposal of Soild Waste :</label>
        <div class="col-sm-8"> 
            <input type="Text" class="form-control" id="prdStatus" value="{{$solidwaste->sw_disposal_method}}">
        </div>
    </div>

    <div>
        <center>
            <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
            <a class="glyphicon btn btn-danger" href="/solidWaste">Back </a>
        </center>
    </div>

</form>







@endsection
