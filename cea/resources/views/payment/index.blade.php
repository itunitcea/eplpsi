@extends('masterApplication')
@section('content')
    <h3> List of Payments</h3>
    <a style="float: right;" class="btn btn-success" href="{{url('/payment/create')}}"  role="button"><span class="glyphicon glyphicon-plus"></span> CREATE PAYMENT DETAILS</a>
    <br>
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
            <table class="table table-striped">
            <thead>
                <tr>
                <th>No</th>
                <th>Fee Type</th>
                <th>Calculated Payment (Rs.)</th>
                <th>Payment Calculated Date</th>
                <th>Paid Amount (Rs.)</th>
                <th>Date of Payment</th>
                <th>Status</th>
                <th>OPTIONS</th>
                </tr>
            </thead>
            @foreach($payments as $payment)
            <tr>
                <td>{{$payment->fno}}</td>
                <td>{{$payment->feeID}}</td>
                <td>{{$payment->calAmount}}</td>
                <td>{{$payment->calDate}}</td>
                <td>{{$payment->paidamount}}</td>
                <td>{{$payment->dateofpayments}}</td>
                <td>{{$payment->feestatus}}</td>
                <td><a class="btn btn-info" href="{{url('payment/'.$payment->fno.'/show')}}" >Show</a>
                    <a class="btn btn-warning" href="{{url('payment/'.$payment->fno.'/edit')}}">Edit</a></td>
            </tr>
        @endforeach


        </table>
    </form>
@endsection
