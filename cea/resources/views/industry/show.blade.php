
@extends('master')

@section('content')

    <h2>Industry Details</h2>
    <p>The .table class adds basic styling (light padding and only horizontal dividers) to a table:</p>            
    <a href="{{url('/industry')}}" class="glyphicon glyphicon-plus btn btn-success"></a>
    
    <div class="form-group">
        <label class="col-sm-3 control-label">Name of Industry</label>
        <div class="col-sm-9">
            <label type="text" class="form-control" > Sumanadasa and Sons </label>
        </div>
        <label class="col-sm-3 control-label">Type of Industry</label>
        <div class="col-sm-9">
            <label type="text" class="form-control" > Other </label>
        </div>
    </div>
   

@endsection




