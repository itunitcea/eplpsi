
@extends('master')

@section('content')

    <h2>Sector</h2>
    
    <div class="form-group">
        <label class="col-sm-3 control-label">Sector Code</label>
        <div class="col-sm-9">code}}
            <label type="text" class="form-control" > {{$sector->scode}} </label>
        </div>
        <label class="col-sm-3 control-label">Sector Description</label>
        <div class="col-sm-9">
            <label type="text" class="form-control" > {{$sector->sdescription}} </label>
        </div>
        <label class="col-sm-3 control-label">A List Number Range </label>
        <div class="col-sm-9">
            <label type="text" class="form-control" > S{{$sector->Alistnorange}} </label>
        </div
        <label class="col-sm-3 control-label">B List Number Range </label>
        <div class="col-sm-9">
            <label type="text" class="form-control" > S{{$sector->Blistnorange}} </label>
        </div>
        <label class="col-sm-3 control-label">C List Number Range </label>
        <div class="col-sm-9">
            <label type="text" class="form-control" > S{{$sector->Clistnorange}} </label>
        </div>
        
    </div>
    
@endsection




