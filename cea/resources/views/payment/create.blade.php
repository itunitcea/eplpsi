@extends('master2')
@section('content')


<h2>Add New Payment Details </h2>

<form class="form-horizontal" action="{{url('/payment')}}" method="post" >

    <input type="hidden" name="_method" value="POST">
    <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">


    <div class="form-group">
        <label class="col-sm-4 control-label">File Number :</label>
        <label class="col-sm-8 control-label">EA/AP/PDA/MP/A53/4797/2010 </label>
    </div>
    <div class="form-group">
        <label class="col-sm-4 control-label">Industry Name :</label>
        <label class="col-sm-8 control-label">Metal Quarry</label>
    </div>
    <hr/>
    <div class="form-group">
        <label class="col-sm-2 control-label">Fee Type</label>
        <div class="col-sm-10">
            
            <select class="form-control" width="100" name="feeID">
                <option value="" selected="selected"></option>
                <option value="1" >EPL Application</option>
                <option value="2" >Renewal EPL Application</option>
            </select>

        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Calculated Payment</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="calAmount" placeholder="Enter Calculated Payment">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Payment Calculated Date</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="calDate">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Paid Amount</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="paidamount" placeholder="Enter Paid Payment">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Date of Payment</label>
        <div class="col-sm-10">
            <input type="date" class="form-control" name="dateofpayments">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Receipt No</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Recipt No" name="reciptNo">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Status</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" name="feestatus">
        </div>
    </div>
    <div>
        <center>
            <input type="submit" value="SAVE" class="glyphicon glyphicon-eye-open btn btn-success"/>
            <input type="submit" value="CANCEL" class="glyphicon glyphicon-eye-open btn btn-danger" />
        </center>
    </div>
</form>
<br/>
</div>

</body>
@endsection
