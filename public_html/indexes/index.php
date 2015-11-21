<!DOCTYPE html>
<html>
<head>
	<title>Brent Virtual Machine</title>
	
	<meta charset="utf-8">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
	<link rel="stylesheet" type="text/css" href="style/style.css"> 
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
        <script src="//browserstate.github.io/history.js/scripts/bundled/html4+html5/jquery.history.js"></script>
	<script src= "http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
	<script src="scripts/ang.js"></script>
	<script src="scripts/jquery.js"></script>
<body>
<?php
	if($_GET['params']=='php')
	{
		phpinfo();
	}
	else
	{
?>

<h1 style='text-align:center;'>This is Brent's Azure Server!</h1>
	<div class="container">
            <!-- HEADER -->
            <div class="header clearfix">
                <nav role="navigation">
                    <ul class="nav nav-pills pull-right">
                        <li id = 'home'><a href="home">Home</a></li>
                        <li id = 'about'><a href="about">About</a></li>
                        <li id = 'contact'><a href="contact">Contact</a></li>
			<li id = 'angularjs'><a href="angularjs">Angular JS</a></li>
                    </ul>
                </nav>
                <h2 class="text-muted">AJAX Navigation</h2>
            </div>
            
            <!-- STAGE -->
            <div id="stage" ng-scope></div>
	    <div id="angular" ng-scope style="display:none">
		<div ng-app="">
		    <?php
		    	readfile("content/angularContent.html");
		    ?>
                </div>

	    </div>
        </div>
<?php
	}
?>
</body>
</html>
