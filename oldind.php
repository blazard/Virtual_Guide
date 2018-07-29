<?php 
	session_start(); 
	include("dbconnect.php");

?>
<!doctype HTML>
<head>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  	<link rel="stylesheet"  type="text/css" href="style.css" />
  	<style>
  		.block
  		{
  			border-radius: 5px;
  			border-left: 1px solid;
  			border-top: 1px solid;
  			border-right: 1px solid;
  			border-color: #787878;
  			margin-right: 2px;

  		}
  		.block:hover
  		{
  			background-color: black;
  		}
  		.carousel-inner > .item > img,
  		.carousel-inner > .item > a > img {
     	 width: 100%;
     	 height: 300px;
     	 margin: auto;
  		}
  	</style>
</head>
<body style="background-color: #161616;">
	<div class="container-fluid">
		<?php
			include("header.php");
			?>
  		<div style="padding-top: 20px;">
  		<?php
  			include("banner.php");
  			?>
  		</div>
	</div>
</body>