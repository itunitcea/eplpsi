@extends('master')

@section('content')

<h2>Details of Water</h2>  

<form action="water" method="post">
    <label>Processing (m3/day)</label>
    <input type="text" class="form-control" placeholder="Enter Processing (m3/day)" name="processing">
    <label>cooing (m3/day)</label>
    <input type="text" class="form-control" placeholder="Enter Cooling (m3/day)" name="cooling">    
    <label>washing (m3/day)</label>
    <input type="text" class="form-control" placeholder="Enter Washing (m3/day)" name="washing">    
    <label>Domestic (m3/day)</label>
    <input type="text" class="form-control" placeholder="Enter Domestic (m3/day)" name="domestic">
    <label>Public Supply</label>
    <input type="text" class="form-control" placeholder="Enter Public Supply " name="publicsupply">
    <label>Ground Water (Wells, Springs)</label>
    <input type="text" class="form-control" placeholder="Enter Ground Water (Wells, Springs)" name="groundwater">
    <label>Surface Water (Stream, River)</label>
    <input type="text" class="form-control" placeholder="Enter Surface Water (Stream, River)" name="surfacewater">

    <h2>Total daily discharge (m3/day)</h2>
    <label>Total Domestic</label>
    <input type="text" class="form-control" placeholder="Enter Total daily discharge of domestic" name="totaldomestic">
    <label>Total Industrial</label>
    <input type="text" class="form-control" placeholder="Enter Total daily discharge of Industrial" name="totalIndustrial">					    
    
    <label>Method of Discharge water</label>
    <input type="search" class="form-control" width="100" name="dischargemethod">
    <option value="" selected="selected"></option>
    <option value="1" >Open channel</option>
    <option value="2" >Pipeline</option>
    <option value="3" >Covered Drain</option>
    <option value="3" >Other</option>

    <label>Final point of discharge of waste water :</label>
    <input type="search" class="form-control" width="100" name="dischargepoint">
    <option value="" selected="selected"></option>
    <option value="1" >Agricultural Land</option>
    <option value="2" >Marshy Land</option>
    <option value="3" >Sewer</option>
    <option value="4" >Lake</option>
    <option value="5" >River</option>
    <option value="6" >Ela</option>
    <option value="5" >Sea</option>
    <option value="6" >Other</option>


    <input type="submit" value="EDIT"/>

</form>

@endsection
@extends('master')

@section('content')

<h2>Add New Industry</h2>  

<form action="atmosphere" method="post">
    <label>Industry Name</label>
    <input type="text" name="name" class="form-control"/>
    <label>Industry Address</label>
    <input type="text" name="address" class="form-control"/>
    <label>Industry TP</label>
    <input type="text" name="tp" class="form-control"/>
    <label>Industry Email</label>
    <input type="text" name="email" class="form-control"/>
    
    <input type="submit" value="SAVE"/>
    
</form>

@endsection
