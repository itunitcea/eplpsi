
@extends('master')

@section('content')

    <h2>Province</h2>
    
    <div class="form-group">
        <label class="col-sm-3 control-label">Province Code</label>
        <div class="col-sm-9">
            <label type="text" class="form-control" > {{$province->prcode}} </label>
        </div>
        <label class="col-sm-3 control-label">Province Name</label>
        <div class="col-sm-9">
            <label type="text" class="form-control" > {{$province->prname}} </label>
        </div>
       
    </div>
    
   

@endsection




