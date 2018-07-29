<?php 
	header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
	header("Cache-Control: post-check=0, pre-check=0", false);
	header("Pragma: no-cache");
	session_start(); 
	include("dbconnect.php");

?>
<!doctype HTML>
<head>
  	<script src="https://s.codepen.io/assets/libs/modernizr.js" type="text/javascript"></script>
  	<link rel="stylesheet"  type="text/css" href="style.css" />
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
  	<script src="js/jquery-1.11.3.min.js"></script>
  	<script src="bootstrap/js/bootstrap.min.js"></script>
  	
</head>
<body id="main">
		<?php
			include("header.php");
		?>
		<?php
  			include("banner.php");
  		?>
  		<div id="category" class="conatiner-fluid">
  			<div id="inncat">
  				<p id="cathead">Categories</p>
  			</div>
        <div>
  			  <div id="cat1" class="col-xs-4">
  					   <image src="adventure.jpg" class="img-responsive adimg"><p id="advtext"><span>Adventure</span></p></image>
  			  </div>
          <div id="cat2" class="col-xs-4">
              <image src="religion.jpg" class="img-responsive adimg"><p id="retext"><span>Religious</span></p></image>
          </div>
          <div id="cat3" class="col-xs-4">
              <image src="history.jpg" class="img-responsive adimg"><p id="histext"><span>Historical</span></p></image>
          </div>
        </div>
  		</div>
    <?php 
      include("footer.php");
    ?>
	
</body>
