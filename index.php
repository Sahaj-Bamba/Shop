<?php 

  include 'connection.php';
  include 'Vars.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title> Gen Next </title>
	
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	
  <link rel="icon" type="image/x-icon" href="favicon.ico">
  <link rel="stylesheet" type="text/css" href="style/index.css">

  <script type="text/javascript" src="javascript/index.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <!--  Button for collapse of main nav bar  -->
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav-bar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">Gen Next</a>
    </div>
    <div class="collapse navbar-collapse" id="main-nav-bar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li ><a href="#">Designs</a></li>
        <li ><a href="#">Profile</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right" >
        <li><a href="Signup_.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="login_.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
    <!--
    <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Page 1 <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#">Page 1-1</a></li>
          <li><a href="#">Page 1-2</a></li>
          <li><a href="#">Page 1-3</a></li>
        </ul>
    </li>
    -->
    <!--  
    <ul class="nav navbar-nav navbar-right " style="width: 190px; position: absolute; top: 0px; right: 0px;">
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><a href="login.html"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
    -->
  </div>
</nav>
<div class="container-fluid main">
  <div id="initial_animation">
      
  </div>
</div>

</body>
</html>