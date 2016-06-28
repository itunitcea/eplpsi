@extends('master')

@section('content')

<h2>Details of Water</h2>  


<label>Processing (m3/day)</label>
<label>cooing (m3/day)</label>
<label>washing (m3/day)</label>
<label>Domestic (m3/day)</label>
<label>Public Supply</label>
<label>Ground Water (Wells, Springs)</label>
<label>Surface Water (Stream, River)</label>


<h2>Total daily discharge (m3/day)</h2>
<label>Total Domestic</label>
<label>Total Industrial</label>
					    

<label>Method of Discharge water</label>
<option value="" selected="selected"></option>
<option value="1" >Open channel</option>
<option value="2" >Pipeline</option>
<option value="3" >Covered Drain</option>
<option value="3" >Other</option>

<label>Final point of discharge of waste water :</label>
<option value="" selected="selected"></option>
<option value="1" >Agricultural Land</option>
<option value="2" >Marshy Land</option>
<option value="3" >Sewer</option>
<option value="4" >Lake</option>
<option value="5" >River</option>
<option value="6" >Ela</option>
<option value="5" >Sea</option>
<option value="6" >Other</option>


<a href="{{url('/water/edit')}}" class="glyphicon glyphicon-edit btn btn-success"></a>"

@endsection
