
@extends('master')

@section('content')

<h2>Add New Sector </h2>

<form class="form-horizontal" action="{{url('/sector')}}" method="post" >



    <div class="form-group">
        <label class="col-sm-2 control-label">Sector Code</label>

        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Sector Description" name="sdescription" value="{{ $sector->scode }}">
        </div>
    </div>

    <div class="form-group">
        <label class="col-sm-2 control-label">Sector Description</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Sector Description" name="sdescription" value="{{ $sector->sdescription }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">A Category List Number Range</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="A Category List Number Range" name="Alistnorange" value="{{ $sector->Alistnorange }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">B Category List Number Range</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="B Category List Number Range" name="Blistnorange" value="{{ $sector->Blistnorange }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">C Category List Number Range</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="C Category List Number Range" name="Clistnorange" value="{{ $sector->Clistnorange }}">
        </div>
    </div>
    
    <input type="submit" value="SAVE"/>

</form>
@endsection




