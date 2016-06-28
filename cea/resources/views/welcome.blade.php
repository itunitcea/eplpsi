@extends('master')
@section('content')
          
<h3>Welcome to the EPL - PSI System</h3>
<div class="row">
<div class="col-md-6">
    <div class = "panel panel-success">
       <div class = "panel-heading">
           <h4 style="text-align: center">Environmental Pollution Source Inventory</h4>
       </div>

       <div class = "panel-body">
           <img src="{{asset('assets/images/eplpsi.jpg')}}" class='img-responsive'/>
           
       </div>
    </div>
</div>
<div class="col-md-6">
<div class = "panel panel-success">
   <div class = "panel-heading">
       <h4 style="text-align: center;">Hazardous Waste Management            </h4>
   </div>
   
   <div class = "panel-body">
       <img src="{{asset('assets/images/hwmnew.jpg')}}" class='img-responsive' />
       
   </div>
</div>
</div>
    
</div>
            
@endsection
