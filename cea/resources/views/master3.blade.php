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
           <!-- <img src="{{asset('assets/images/nb2.jpg')}}" style="height: 100px;width: 100%"/> -->
            <!--<img src="{{url('../assets/images/newBanner.jpg')}}"  /> -->
            <!-- -------------------------- Banner----------------------------------- -->
             <div class="well well-lg" style="font-family: monotype Corsiva; height: 150px;width: 100%; padding: 0.5px ; padding-left: 50px; background-color: #5cb85c; font-size: 65px; color: #ffffff "  >
                <center> Pollution Source Inventory   </center>
                <center> <h1>Central Environmental Authority</h1> </center>
            </div>
            <!-- -------------------------- ----------------------------------- -->
            <!-- Main menu start -->
            <!--<nav class="navbar navbar-inverse" style="background-color: #001133"  >-->
            
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

            <div class="row">
                <div class="col-md-3">

                    <div id="wrapper">
                        <ul class="nav sidebar-nav " style="background-color: #DFF0D8">
                            <li>
                                <a style="width: 100%;height: 50px" class="btn btn-success" href="{{url('/aplication/show')}}"  role="button">Industry Details </a>
                            </li>
                            <li>
                                <a style="width: 100%;height: 50px" class="btn btn-success" href="{{url('/Payments')}}"  role="button"> Payments </a>
                            </li>
                            <li>
                                <a style="width: 100%;height: 50px" class="btn btn-success" href="{{url('/File Number')}}"  role="button"> File Number </a>
                            </li>
                            <li>
                                <a style="width: 100%;height: 50px" class="btn btn-success" href="{{url('/Inspection Details')}}"  role="button"> Inspection Details </a>
                            </li>
                            <li>
                                <a style="width: 100%;height: 50px" class="btn btn-success" href="{{url('/EPL Details')}}"  role="button"> EPL Details</a>
                            </li>
                            <li>
                                <a style="width: 100%;height: 50px" class="btn btn-success" href="{{url('/Environmental Monitoring')}}"  role="button"> Environmental Monitoring  </a>
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
