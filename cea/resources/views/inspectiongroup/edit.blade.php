@extends('master')
@section('content')
<h2>Edit Inspection Group Details</h2>

<form class="form-horizontal" action="{{url('/inspectiongroup')}}" method="post" >
    <div class="form-group">
        <label class="col-sm-2 control-label">Name of Inspection Group</label>
        <div class="col-sm-10">
            <input type="text" class="form-control" value="{{$inspectiongroup->groupname}}">
        </div>
    </div>
        <div>
            <center>
                 <input type="submit" value="SAVE"/>
            </center>
        </div>
    </fieldset>
</form>
<br/>

</div>
</div>
</body>
@endsection
