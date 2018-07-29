<?php
session_start();
include("dbconnect.php");
$var= array();
$vis= array();
if($_REQUEST['kurbs']=='true'){
	$vis['kurbs']=0;
	array_push($var, 'kurbs');
}
if($_REQUEST['kurss']=='true'){
	$vis['kurss']=0;
	array_push($var, 'kurss');
}
if($_REQUEST['kurbk']=='true'){
	$vis['kurbk']=0;
	array_push($var, 'kurbk');
}
if($_REQUEST['kurskm']=='true'){
	$vis['kurskm']=0;
	array_push($var, 'kurskm');
}
if($_REQUEST['kurpsc']=='true'){
	$vis['kurpsc']=0;
	array_push($var, 'kurpsc');
}
if($_REQUEST['kurjy']=='true'){
	$vis['kurjy']=0;
	array_push($var, 'kurjy');
}
if($_REQUEST['kurbt']=='true'){
	$vis['kurbt']=0;
	array_push($var, 'kurbt');
}
if($_REQUEST['kurscm']=='true'){
	$vis['kurscm']=0;
	array_push($var, 'kurscm');
}
if($_REQUEST['kursmt']=='true'){
	$vis['kursmt']=0;
	array_push($var, 'kursmt');
}
$places="(";
for($i=0;$i<count($var);$i++){
	$places .= '\''.$var[$i].'\'';
	if($i!=count($var)-1)
		$places.=',';
}
$places .= ')';
$in="select destination,distance,time from kurutravel where distance=(select min(distance) from kurutravel where source='kurbs' and destination in ".$places.") and destination in".$places;
$mintime=99999999;
$_SESSION["place"]=array();
$k=0;
$res=mysqli_query($dbcnx,$in);
if (mysqli_num_rows($res) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($res)) {
        if($row["time"]<$mintime){
        	$pla=$row["destination"];
        	$mintime=$row["time"];
        }
    }
    $_SESSION["place"][$k++]=$pla;
} else {
    echo "0 results";
}
$ind = array_search($_SESSION["place"][0],$var);
$temp = $var[$ind];
$var[$ind]=$var[count($var)-1];
$var[count($var)-1]=$temp;
array_pop($var);
$cnt=count($var);
for($i=0;$i<$cnt;$i++)
{
	$places="(";
	for($j=0;$j<count($var);$j++){
		$places .= '\''.$var[$j].'\'';
		if($j!=count($var)-1)
			$places.=',';
	}
	$places .= ')';
	$in="select destination,distance,time from kurutravel where distance=(select min(distance) from kurutravel where source='".$_SESSION["place"][$i]."' and destination in ".$places.")";
	$mintime=99999999;
	$res=mysqli_query($dbcnx,$in);
	if (mysqli_num_rows($res) > 0) {
    // output data of each row
    	while($row = mysqli_fetch_assoc($res)) {
        	if($row["time"]<$mintime){
        		$pla=$row["destination"];
        		$mintime=$row["time"];
        	}
    	}
    	$_SESSION["place"][$k]=$pla;
	}
	else
		echo "0 results<br>";
	$ind = array_search($_SESSION["place"][$k++],$var);
	$temp = $var[$ind];
	$var[$ind]=$var[count($var)-1];
	$var[count($var)-1]=$temp;
	array_pop($var);
}

?>
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>TravelBuddy:Your online tourist-guide</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Services provided by SathiClap" />
	<meta name="keywords" content="online services,handyman,electrician,carpenter,ac repairs,tv repairs,home cleaning,plumbing" />

  	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->

	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">


	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.min.css">

	<!-- Owl Carousel  -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">

	
	<link rel="stylesheet" href="css/kurustyle.css">
	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>

	</head>
	<body>
	
	<div id="page">

	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">TravelBuddy</a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						<li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
						<li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> Signup</a></li>
						<li class="has-dropdown"><a href="categories.html">Categories</a>
							<ul class="dropdown">
								<li><a href="adventure.php">Adventure</a></li>
								<li><a href="religious.php">Religious</a></li>
								<li><a href="historical.php">Historical</a></li>
							</ul>
						</li>
						<li><a href="contact.html">Contact</a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	<div  class="gtco-cover gtco-cover-md" role="banner" style="background-image: url(images/kuru_bg.jpeg)">
		<div class="overlay"></div>
	</div>
	<div class="second-nav">
		<div class="gtco-container">
			<div class="row">
				<div class="col-xs-8 text-left menu1">
						<ul class="nav navbar-nav">
							<li><a href="login.php" style="color: black;">Kurukshetra</a></li>
							<li><a href="signup.php" style="color: black;">Places to visit</a></li>
							<li><a href="categories.html" style="color: black;">Hotels</a></li>
							<li><a href="contact.html" style="color: black;">How to reach</a></li>
							<li><a href="contact.html" style="color: black;">Weather</a></li>
							<li style="border-bottom: 2px solid red;">Roadmap</li>
						</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Top places to visit in Kurukshetra</h2>
				</div>
			</div>
			<div class="row">
				<?php
				for($i=0;$i<count($_SESSION["place"]);$i++){
					echo count($_SESSION["place"]);
					?>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<span class="fh5co-card-item">
						<figure>
							<div class="overlay"></div>
							<img src=<?php echo "\"images/".$_SESSION['place'][$i].".jpg\"";?> alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2><?php echo $name[$_SESSION['place'][$i]] ?></h2>
							<p></p>
						</div>
					</span>
				</div>
				<?php } ?>
			</div>
		</div>
	</div>
		<div id="gtco-subscribe">
		<div class="gtco-container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Subscribe</h2>
					<p>Be the first to know about the new packages.</p>
				</div>
			</div>
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2">
					<form class="form-inline">
						<div class="col-md-6 col-sm-6">
							<div class="form-group">
								<label for="email" class="sr-only">Email</label>
								<input type="email" class="form-control" id="email" placeholder="Your Email">
							</div>
						</div>
						<div class="col-md-6 col-sm-6">
							<button type="submit" class="btn btn-default btn-block">Subscribe</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">
			<div class="row row-p	b-md">

				<div class="col-md-4">
					<div class="gtco-widget">
						<h3>About Us</h3>
						<p></p>
					</div>
				</div>

				<div class="col-md-2 col-md-push-1">
					<div class="gtco-widget">
						<h3>Cities Served</h3>
						<ul class="gtco-footer-links">
							<li>Kurukshetra</li>
							<li>Vrindavan</li>
							<li>Agra</li>
						</ul>
					</div>
				</div>

				<div class="col-md-1 col-md-push-1">

				</div>

				<div class="col-md-4 col-md-push-1">
					<div class="gtco-widget">
						<ul style="list-style: none;">
						<li><a href=""><h3>FAQ</h3></a></li>
						<li><a href="#"><h3>Complaints</h3></a></li>
						<h3>Get In Touch</h3>
						<ul class="gtco-quick-contact">
							<li><a href="#"><i class="icon-phone"></i> +1 234 567 890</a></li>
							<li><a href="#"><i class="icon-mail2"></i> info@travelbuddy.co.in</a></li>
						</ul>
					</ul>
					</div>
				</div>

			</div>

			<div class="row copyright" style="height: 50px;">
				<div class="col-md-12">
					<p class="pull-left">
						<small class="block">&copy; TravelBuddy.com All Rights Reserved</small> 
					<p class="pull-right">
						<ul class="gtco-social-icons pull-right">
							<li><a href="#"><i class="icon-twitter"></i></a></li>
							<li><a href="#"><i class="icon-facebook"></i></a></li>
							<li><a href="#"><i class="icon-linkedin"></i></a></li>
							<li><a href="#"><i class="icon-dribbble"></i></a></li>
						</ul>
					</p>
				</div>
			</div>
		</div>
	</footer>	
	</div>
	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="glyphicon glyphicon-arrow-up"></i></a>
	</div>