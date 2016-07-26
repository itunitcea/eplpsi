@extends('master')

@section('content')

<h2>Details of Water</h2>  
<form class="form-horizontal" >

    <div class="form-group">
        <label class='col-sm-5 control-label' >Processing (m3/day) :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$water->wr_processing}}</label>
    </div>
    <div class="form-group">
        <label class='col-sm-5 control-label'>cooing (m3/day) :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$water->wr_cooling}} </label>
    </div>
    <div class="form-group">
        <label class='col-sm-5 control-label'>washing (m3/day) :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$water->wr_washing}}</label>
    </div>
    <div class="form-group">
        <label class='col-sm-5 control-label'>Domestic (m3/day) :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$water->wr_domestic}}</label>
    </div>
    <div class="form-group">
        <label class='col-sm-5 control-label'>Public Supply :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$water->swater_publicsupply}}</label>
    </div>
    <div class="form-group">
        <label class='col-sm-5 control-label'>Ground Water (Wells, Springs) :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$water->swater_groundwater}}</label>
    </div>    
    <div class="form-group">
        <label class='col-sm-5 control-label'>Surface Water (Stream, River) :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$water->swater_sufacewater}}</label>
    </div> 
    <fieldset>
        <div class="form-group">
            <legend><h2>Total daily discharge (m3/day)</h2></legend>
            <label class='col-sm-5 control-label'>Total daily discharge :</label>
            <label class='col-sm-7 control-label' style="text-align: left">{{$water->totaldailydischargewwater}}</label>
        </div>
        <div class="form-group">
            <label class='col-sm-5 control-label'>Total Domestic :</label>
            <label class='col-sm-7 control-label' style="text-align: left">{{$water->totaldisDome}}</label>
        </div>
        <div class="form-group">
            <label class='col-sm-5 control-label'>Total Industrial :</label>
            <label class='col-sm-7 control-label' style="text-align: left">{{$water->totaldisIndu}}</label>	
        </div>
    </fieldset> 
    <div class="form-group">
        <label class='col-sm-5 control-label'>Method of Discharge water :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$water->discharge_method}}</label>
    </div> 	    
    <div class="form-group">
        <label class='col-sm-5 control-label'>Final point of discharge of waste water :</label>
        <label class='col-sm-7 control-label' style="text-align: left">{{$water->finalpointofDischarge_ww}}</label>
    </div>
    <div>
            <center>
                <a class="glyphicon glyphicon-plus btn btn-warning" href="{{url('water/'.$water->w_id.'/edit')}}">Edit</a> 
                <a href="#" class="btn btn-success"  style="width:80px">Save</a>
                <a href="#" class="btn btn-danger" style="width:80px">Cancel</a>
            </center>
        </div>
    </form>
    @endsection
