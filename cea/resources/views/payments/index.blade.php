@extends('master')
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
                <th>Date of Payment</th>
                <th>Recipt No</th>
                <th>Status</th>
                <th>OPTIONS</th>
                </tr>
            </thead>

            <tr>
                <th>12344</th>
                <th>EPL Renewal</th>
                <th>12525.00</th>
                <th>2015/10/25</th>
                <th>2016/02/01</th>
                <th>122224</th>
                <th></th>
                <td>
                    <a class="glyphicon glyphicon-eye-open btn btn-info" href="{{url('payment/1')}}">Show</a>
                    <a class="glyphicon glyphicon-info-sign btn btn-success">Edit</a> 
                    <a class="glyphicon glyphicon-remove btn btn-danger">Delete</a> 
                </td>
            </tr>


        </table>
    </form>
@endsection
