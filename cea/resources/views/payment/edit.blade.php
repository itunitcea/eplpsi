@extends('masterApplication')
@section('content')
<h2>Edit Payment Details </h2>
	<form class="form-horizontal" >
            <div class="form-group">
                    <label class="col-sm-4 control-label">File Number :</label>
                    <label class="col-sm-8 control-label" style="text-align: left">EA/AP/PDA/MP/A53/4797/2010 </label>
            </div>
            <div class="form-group">
                    <label class="col-sm-4 control-label">Industry Name :</label>
                    <label class="col-sm-8 control-label" style="text-align: left">Metal Quarry</label>
            </div>
            <hr/>
            <div class="form-group">
                <label class="col-sm-2 control-label">Fee Type</label>
                <div class="col-sm-10">
                    <select class="form-control" width="100" value="{{$payment->feeID}}">
                            <option value="" selected="selected"></option>
                            <option value="1" >EPL Application</option>
                            <option value="2" >Renewal EPL Application</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Calculated Payment</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$payment->calAmount}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Payment Calculated Date</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" value="{{$payment->calDate}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Date of Payment</label>
                <div class="col-sm-10">
                    <input type="date" class="form-control" value="{{$payment->dateofpayments}}">
                </div>
            </div>
            
            <div class="form-group">
                <label class="col-sm-2 control-label">Recipt No</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$payment->reciptNo}}">
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label">Status</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" value="{{$payment->feestatus}}">
                </div>
            </div>
            <div>
                <center>
                        <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                        <a class="btn btn-info" href="/payment">Back </a>
                </center>
            </div>
	</form>
        <br/>

@endsection
