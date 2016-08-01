@extends('master2')
@section('content')
    <h3> List of Payments</h3>
    <a href="{{url('payment/create')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    <form class="form-horizontal" >
            <div class="form-group">
                    <label class="col-sm-4 control-label">File Number :</label>
                    <label class="col-sm-8 control-label">EA/AP/PDA/MP/A53/4797/2010 </label>
            </div>
            <div class="form-group">
                    <label class="col-sm-4 control-label">Industry Name :</label>
                    <label class="col-sm-8 control-label">Metal Quarry</label>
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
                <td><a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('payment/'.$payment->fno.'/show')}}" >Show</a>
                    <a class="glyphicon glyphicon-eye-close btn btn-danger" >Delete</a>
                    <a class="glyphicon glyphicon-edit btn btn-warning">Edit</a></td>
            </tr>
        @endforeach


        </table>
    </form>
@endsection
