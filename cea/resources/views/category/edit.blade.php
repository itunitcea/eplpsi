
@extends('master')

@section('content')

<h2>Add New Category </h2>

<form class="form-horizontal" action="{{url('/category')}}" method="post" >

   
    
     <div class="form-group">
        <label class="col-sm-2 control-label">ID</label>
        <div class="col-sm-10">
           <label  class="form-control" > {{ $category->id }} </label>
        </div>
    </div>
    
    <div class="form-group">
        <label class="col-sm-2 control-label">Name of Category</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Enter Name of Caregory" name="name" value="{{ $category->name }}">
        </div>
    </div>
    <div class="form-group">
        <label class="col-sm-2 control-label">Details</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" placeholder="Details" name="discription" value="{{ $category->discription }}">
        </div>
    </div>

    <input type="submit" value="SAVE"/>

</form>
@endsection




