@extends('master')
@section('content')


<form class="form-horizontal" action="{{url('/searchind')}}" method="GET" >
    <fieldset>
        <legend style="color:green;text-align:center;"><strong>SEARCH INDUSTRY</strong></legend>
        
        <div class = "row">
            <div class = "col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
                <legend style="color:green;text-align:center;">Location</legend>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Province</label>
                    <div class="col-sm-10">
                        <select name="province" id="provinceDropDown" class="form-control">
                            <option value=""></option>
                            @foreach($province as $p)
                                <option value="{{$p->prcode}}">{{$p->prname}}</option>
                            @endforeach
                        </select>       
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">District</label>
                    <div class="col-sm-10">
                         <select name="district" id="districtDropdown" class="form-control district">
                         <option value=""></option></select>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">Local Authority</label>
                    <div class="col-sm-10">
                        <select name="localauthority" id="localauthorityDropdown" class="form-control district">
                        <option value=""></option></select>
                    </div>
                </div>
            </div>
        
            <div class = "col-sm-5 col-sm-offset-2 col-md-6 col-md-offset-0">
                <legend style="color:green;text-align:center;">Sector / Category</legend>
            
                <div class="form-group">
                    <label class="col-sm-2 control-label">Sector</label>
                    <div class="col-sm-10">
                        <select name="sector" class="form-control">
                            <option value=""></option>
                            @foreach($sector as $sec)
                                <option value="{{$sec->scode}}">{{$sec->scode}}</option>
                            @endforeach
                        </select>       
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">EPL Category</label>
                    <div class="col-sm-10">
                        <select name="epl_category" class="form-control">
                            <option value=""></option>
                            @foreach($epl_category as $epl)
                                <option value="{{$epl->categoryID}}">{{$epl->categoryID}}</option>
                            @endforeach
                        </select>       
                    </div>
                </div>
            </div>
        </div>
    </br>
        <div class = "row">
            <label class="col-sm-2 control-label">Industry Name</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" placeholder="Enter Industry name" name="industryname">
                </div>
        </div>
        
        </fieldset>
    </br>
        <center>
            <!-- <td><a class="btn btn-small btn-success" href="{{ URL::to('/index') }}">Show</td> -->
            <button type="submit" class="btn btn-success">
                                        <i class="fa fa-btn fa-user"></i> SEARCH
                                    </button><!-- <a class=" btn btn-success">SEARCH</a> -->
            <a class=" btn btn-danger">CANCEL</a>
        </center>
    </br>
        <div>
            <h5><strong>TOTAL INDUSTRY RECORDS: {{number_format($industry->total())}}</strong></h5>
            <legend style="color:green;text-align:center;"><strong>LIST OF INDUSTRIES</strong></legend>
        </div>
        <div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Industry ID</th>
                        <th>Industry Name</th>
                        <th>Industry Type</th>
                        <th>Industry Category</th>
                        <th>Sector</th>
                        <th>Province</th>
                        <th>Option</th>
                    </tr>
                </thead>
                @foreach($industry as $i)
                <tr>
                    <td>{{$i->industryID}}</td>
                    <td>{{$i->industryName}}</td>
                    <td>{{$i->industrytype}}</td>
                    <td>{{$i->eplcategoryid}}</td>
                    <td>{{$i->sector}}</td>
                    <td>{{$i->provincecode}}</td>
                    <td><a class=" btn btn-info" ><span class="glyphicon glyphicon-eye-open"></span> Show</a>
                        <a class=" btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a></td>
                </tr>
            @endforeach
            </table>
        </div>
        <div>{!! $industry->render() !!}</div>
    </br>
</form>
<script>
    $(document).ready(function () {
    var prcode = $('#provinceDropDown').val();
    console.log(prcode);
    $.ajax({
      url: '{{route('district')}}',
      data: {prcode: prcode},
      type: 'get',
      success: function (result) {
        $('#districtDropdown').html(result);
      }
    });
    });
    jQuery('#provinceDropDown').on('change', function (event) {
    var prcode = $('#provinceDropDown').val();
    console.log(prcode);
    $.ajax({
      url: '{{route('district')}}',
    data: {prcode: prcode},
      type: 'get',
      success: function (result) {
        $('#districtDropdown').html(result);
      }
    });
    });

    $(document).ready(function () {
    var dicode = $('#districtDropdown').val();
    console.log(dicode);
    $.ajax({
      url: '{{route('localauthority')}}',
      data: {dicode: dicode},
      type: 'get',
      success: function (result) {
        $('#localauthorityDropdown').html(result);
      }
    });
    });
    jQuery('#districtDropdown').on('change', function (event) {
    var dicode = $('#districtDropdown').val();
    console.log(dicode);
    $.ajax({
      url: '{{route('localauthority')}}',
      data: {dicode: dicode},
      type: 'get',
      success: function (result) {
        $('#localauthorityDropdown').html(result);
      }
    });
    });
</script>
@endsection
