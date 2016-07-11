
@extends('master')

@section('content')

<h2>Add New Category </h2>

<form class="form-horizontal" action="{{url('/province')}}" method="post" >

   
    
     <div class="form-group">
        <label class="col-sm-2 control-label">Province Code</label>
        <div class="col-sm-10">
           <label  class="form-control" name="prcode" > {{ $province->prcode }} </label>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label">Name of Province</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Name of Caregory" name="prname" value="{{ $province->prname }}">
        </div>
    </div>
    

    <input type="submit" value="SAVE"/>

</form>
@endsection




