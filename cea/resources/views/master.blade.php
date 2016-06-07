<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

      	<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.0/jquery.min.js"></script>
		<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

    </head>
    <body>
        <div class="container">
            <div class="jumbotron">
                <center><img src="images/banner.jpg" /></center>
            </div>
       
            @yield('content')
            
            <div id="footer" style="background-color: #000; color: #ffffff; text-align: center">
                Copyright © CEA
            </div>
 		</div>
    </body>
</html>
