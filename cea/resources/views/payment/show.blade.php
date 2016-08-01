@extends('masterApplication')
@section('content')
<h2> Payment Details </h2>
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
                <label class="col-sm-4 control-label" style="text-align: right">Fee Type :</label>
                <label class="col-sm-8 control-label" style="text-align: left">EPL Application</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: right">Calculated Payment :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$payment->calAmount}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: right">Payment Calculated Date :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$payment->calDate}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: right">Paid Amount :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$payment->paidamount}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: right">Date of Payment :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$payment->dateofpayments}}</label>
            </div>
            
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: right">Recipt No :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$payment->reciptNo}}</label>
            </div>
            <div class="form-group">
                <label class="col-sm-4 control-label" style="text-align: right">Status :</label>
                <label class="col-sm-8 control-label" style="text-align: left">{{$payment->feestatus}}</label>
            </div>
            <div>
                <center>
                <a class="btn btn-warning" href="{{url('payment/'.$payment->fno.'/edit')}}" style="width:80px">Edit</a> 
                <a href="/payment" class="btn btn-info" style="width:80px">Back</a>
            </center>
            </div>
	</form>
        <br/>
    </div>

</body>
@endsection
