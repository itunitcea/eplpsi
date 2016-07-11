@extends('master')

@section('content')

<h2>List of Solid Waste </h2>

<form action="solidwaste" action="{{url('/inspection')}}" method="post" >
    <label class="control-label col-sm-2" for="prdByprod">Type and Nature of Soild Wastes :</label>
    <input type="Text" class="form-control" id="prdByprod" placeholder="Enter Type and Nature of Soild Wastes" value="{{$sw->natureOfSolidWaste}}">
    <label class="control-label col-sm-2" for="qty">Total quantity of soild waste - kg/day:</label>
    <input type="Text" class="form-control" id="qty" placeholder="Enter Total quantity" value="{{$sw->total_qty_sw}}">
    <label class="control-label col-sm-2" for="prdStatus">Method of Disposal of Soild Waste :</label>
    <input type="Text" class="form-control" id="prdStatus" placeholder="Enter Method of Disposal of Soild Waste" value="{{$sw->sw_disposal_method}}">
    
    
    <input type="submit" value="EDIT"/>
    
</form>







@endsection
