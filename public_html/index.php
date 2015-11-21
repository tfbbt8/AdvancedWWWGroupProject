<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css" rel="stylesheet" integrity="sha256-MfvZlkHCEqatNoGiOXveE8FIwMzZg4W85qfrfIFBfYc= sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha256-Sk3nkD6mLTMOF0EOpNtsIry+s1CsaqQC1rVLTAy+0yc= sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>
  <script src="js.js"></script> 
  <script src="fb.js"></script>
  <script src="http://connect.facebook.net/en_US/all.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script type="text/javascript" src="twitter.js"></script>
  <link href="twitter.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" tpe="text/css" href="extras.css">
</head>
<body>
  <div class="wrapper">
    <div class="content">
      <div class="container">
       <div class="jumbotron">
         <h1 class="text-center" id="Name">Shenanigans</h1>
         <div id="user-info"></div>
       </div>
       <nav class="navbar navbar-inverse">
         <div class="container-fluid">
           <div class="navbar-header">
             <a class="navbar-brand" href="#">Official Page</a>
           </div>
           <div>
       	     <ul class="nav navbar-nav">
       	       <li id="home" class="active"><a href="#">Home</a></li>
      	       <li id="menu1" class=""><a href="#menu1">Twitter API</a></li>
    	       <li id="menu2" class=""><a href="#menu2">Databases</a></li>
      	       <li id="menu3" class=""><a href="#menu3">MVC Frameworks</a></li>
    	     </ul>
    	     <ul class="nav navbar-nav navbar-right">
   	       <li><a id="loginButton" href="#" onclick="authUser();">Login</a></li>
 	     </ul>
           </div>
         </div>
       </nav>
       <div id="content">
  
       </div>
     </div><!--container-->
   </div><!--content-->
 </div><!--wrapper-->
</body>
</html>
