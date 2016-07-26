<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>EPL - PSI SYSTEM</title>
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php
        // put your code here
        ?>

        <div class="container-fluid"> <!-- Start Container --> 
            <!--<img src="../resources/assets/images/nb2.jpg" style="height: 100px;width: 100%"/>-->
            <img src="{{asset('assets/images/nb2.jpg')}}" style="height: 100px;width: 100%"/>
            <!--<img src="{{url('../assets/images/newBanner.jpg')}}"  /> -->
            <!-- -------------------------- Banner----------------------------------- -->
            <!--<div class="well well-lg" style="font-family: serif; height: 100px;width: 100%; padding: 0.5px ; padding-left: 50px; " >
                <h1>EPL - PSI SYSTEM</h1>
                <h4>Central Environmental Authority</h4>
                <hr/>
            </div> -->
            <!-- -------------------------- ----------------------------------- -->
            <!-- Main menu start -->
            <!--<nav class="navbar navbar-inverse" style="background-color: #001133"  >-->
            <br/>
            <br/>
            <nav class="navbar navbar-inverse" style="background-color: #1A782A"  >
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>                        
                        </button>
                        <a class="navbar-brand" href="#">HOME</a>
                    </div>
                    <div class="collapse navbar-collapse" id="myNavbar">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="{{url('/industry')}}">INDUSTRY</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">CONTACT US</a></li>
                            <li><a href="#">MAIN DATA</a></li>
                        </ul>
                        <ul class="nav navbar-nav navbar-right">
                            <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
                        </ul>
                    </div>
                </div>
            </nav>  
            <!-- Main menu End -->

            <!--            <div class="row">
                            <div class="col-md-3">
                                <div id="wrapper">
                                    <ul class="nav sidebar-nav " style="background-color: #DFF0D8">
                                        <li>
                                            <a href="#" >Home</a>
                                        </li>
                                        
                                        <li>
                                            <a href="{{url('/industry')}}">Industry</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/sector')}}">sector</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/water')}}">Water</a>
                                        </li>
                                         <li>
                                            <a href="{{url('solidWaste')}}">Solid Waste</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/category')}}">Category</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/province')}}">Province</a>
                                        </li>
                                        <li>
                                            <a href="{{url('/sector')}}">Sector</a>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reminders<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">First Reminder</a></li>
                                                <li><a href="#">Second Reminders</a></li>
                                                <li><a href="#">Third Reminders</a></li>
                                            </ul>
                                        </li>
                                        <li class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#">Weekly Reports</a></li>
                                                <li><a href="#">Monthly Reports</a></li>
                                                <li><a href="#">Annual Reports</a></li>
                                            </ul>
                                        </li>
                                        
            
                                    </ul>
                            </div>
                        </div>
                        <div class="col-md-9">
                            @yield('content')
                        </div>
            
                    </div>-->

            <div class="row">
                <div class="col-md-3">
                    <div id="wrapper">
                        <ul class="nav sidebar-nav " style="background-color: #DFF0D8">
                            <li>
                                <a href="#" >Home</a>
                            </li>
                            <li>
                                <a href="{{url('/searchind')}}">Search Industry</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Industries<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/industry')}}">Industry Details</a></li>
                                    <li><a href="#">Manufacturing Process</a></li>
                                    <li><a href="{{url('/water')}}">Water</a></li>
                                    <li><a href="{{url('/solidWaste')}}">Solid Waste</a></li>
                                    <li><a href="{{url('/atmosphericEmission')}}">Atmospheric Emission</a></li>
                                    <li><a href="{{url('/noise')}}">Noise Pollution</a></li>
                                    <li><a href="{{url('/energy_reqt')}}">Energy Requirement</a></li>
                                    <li><a href="{{url('/fuel')}}">Fuel Used</a></li>
                                    <li><a href="{{url('/recycle')}}">Recycling / Reuse</a></li>
                                    <li><a href="{{url('/geographicalLocation')}}">Geographical Location</a></li>
                                    <li><a href="{{url('/emergency')}}">Emergency Contact</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Industry Applications<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="{{url('/application')}}">Application</a></li>
                                    <li><a href="{{url('/payment')}}">Payments</a></li>
                                    <li><a href="#">File Number</a></li>
                                    <li><a href="{{url('/inspection')}}">Inspection Details</a></li>
                                    <li><a href="#">EPL Details</a></li>
                                    <li><a href="#">Environment Monitoring</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="{{url('/category')}}">Category</a>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reminders<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">First Reminder</a></li>
                                    <li><a href="#">Second Reminders</a></li>
                                    <li><a href="#">Third Reminders</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Reports<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                    <li><a href="#">Weekly Reports</a></li>
                                    <li><a href="#">Monthly Reports</a></li>
                                    <li><a href="#">Annual Reports</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Contact</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-9">
                    @yield('content')
                </div>
            </div>
            <hr/>
            <footer class="container-fluid" style="background-color: #1A782A; text-align: center; padding: 5px">
                <p style="color: #ffffff">Copyrights © Central Environmental Authority</p>
            </footer>
        </div> <!--End Container -->
    </body>
</html>
