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
							<li style="border-bottom: 2px solid red;"..
							><a href="signup.php" style="color: black;">Places to visit</a></li>
							<li><a href="categories.html" style="color: black;">Hotels</a></li>
							<li><a href="contact.html" style="color: black;">How to reach</a></li>
							<li><a href="contact.html" style="color: black;">Weather</a></li>
						</ul>
				</div>
			</div>
		</div>
	</div>
	<form action="roadmap.php" method="post">
	<div class="gtco-section">
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 col-md-offset-2 text-center gtco-heading">
					<h2>Top places to visit in Kurukshetra</h2>
				</div>
			</div>
			<div class="row">

				<div class="col-lg-4 col-md-4 col-sm-6">
					<span class="fh5co-card-item">
						<figure>
							<div class="overlay"></div>
							<img src="images/kurbs.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Brahma Sarovar</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<input type="hidden" name='kurbs' id="kurbsv" value='false'>
							<p id='kurbs'><span class="btn btn-primary" onclick="addplace('kurbs')">Add to visit list</span></p>
							<a href="#"><p><span class="btn btn-primary">View Description</span></p></a>
						</div>
					</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<span class="fh5co-card-item ">
						<figure>
							<div class="overlay"></div>
							<img src="images/kursmt.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Sthaneshwar Mahadev Temple</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<input type="hidden" name='kursmt' id="kursmtv" value='false'>
							<p id="kursmt"><span class="btn btn-primary" onclick="addplace('kursmt')">Add to visit list</span></p>
							<a href="#"><p><span class="btn btn-primary">View Description</span></p></a>
						</div>
					</span>
				</div>
				<div class="col-lg-4 col-md-4 col-sm-6">
					<span class="fh5co-card-item ">
						<figure>
							<div class="overlay"></div>
							<img src="images/kurskm.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Sri Krishna Museum</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<input type="hidden" name='kurskm' id='kurskmv' value='false'>
							<p id="kurskm"><span class="btn btn-primary" onclick="addplace('kurskm')">Add to visit list</span></p>
							<a href="#"><p><span class="btn btn-primary">View Description</span></p></a>
						</div>
					</span>
				</div>


				<div class="col-lg-4 col-md-4 col-sm-6">
					<span href="#" class="fh5co-card-item ">
						<figure>
							<div class="overlay"></div>
							<img src="images/kurpsc.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Panorma Science Centre</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<input type="hidden" name='kurpsc' id='kurpscv' value='false'>
							<p id="kurpsc"><span class="btn btn-primary" onclick="addplace('kurpsc')">Add to visit list</span></p>
							<a href="#"><p><span class="btn btn-primary">View Description</span></p></a>
						</div>
					</span>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<span class="fh5co-card-item ">
						<figure>
							<div class="overlay"></div>
							<img src="images/kurscm.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Sheikh Chilli Mausoleum</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<input type="hidden" name='kurscm' id='kurscmv' value='false'>
							<p id="kurscm"><span class="btn btn-primary" onclick="addplace('kurscm')">Add to visit list</span></p>
							<a href="#"><p><span class="btn btn-primary">View Description</span></p></a>
						</div>
					</span>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<span class="fh5co-card-item">
						<figure>
							<div class="overlay"></div>
							<img src="images/kurbt.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Bhadrakali Temple</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<input type="hidden" name='kurbt' id='kurbtv' value='false'>
							<p id="kurbt"><span class="btn btn-primary" onclick="addplace('kurbt')">Add to visit list</span></p>
							<a href="#"><p><span class="btn btn-primary">View Description</span></p></a>
						</div>
					</span>
				</div>
				
				<div class="col-lg-4 col-md-4 col-sm-6">
					<span class="fh5co-card-item">
						<figure>
							<div class="overlay"></div>
							<img src="images/kurss.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Sannihit Sarovar</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<input type="hidden" name='kurss' id="kurssv" value='false'>
							<p id="kurss"><span class="btn btn-primary" onclick="addplace('kurss')">Add to visit list</span></p>
							<a href="#"><p><span class="btn btn-primary">View Description</span></p></a>
						</div>
					</span>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<span class="fh5co-card-item">
						<figure>
							<div class="overlay"></div>
							<img src="images/kurjy.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Jyotisar</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<input type="hidden" name='kurjy' id="kurjyv" value='false'>
							<p id="kurjy"><span class="btn btn-primary" onclick="addplace('kurjy')">Add to visit list</span></p>
							<a href="#"><p><span class="btn btn-primary">View Description</span></p></a>
						</div>
					</span>
				</div>

				<div class="col-lg-4 col-md-4 col-sm-6">
					<span class="fh5co-card-item">
						<figure>
							<div class="overlay"></div>
							<img src="images/kurbk.jpg" alt="Image" class="img-responsive">
						</figure>
						<div class="fh5co-text">
							<h2>Bhishma Kund</h2>
							<p>Far far away, behind the word mountains, far from the countries Vokalia..</p>
							<input type="hidden" name='kurbk' id="kurbkv" value='false'>
							<p id="kurbk"><span class="btn btn-primary" onclick="addplace('kurbk')">Add to visit list</span></p>
							<a href="#"><p><span class="btn btn-primary">View Description</span></p></a>
						</div>
					</span>
				</div>
				<div class="col-lg-2 col-md-2"></div>

			</div>
		</div>
	</div>
	<div class="gtco-container">
			<div class="row">
				<div class="col-md-8 text-center gtco-heading">
					<button  class="btn btn-success" style="height:50px; font-size: 20px;" onclick="generate()">Generate roadmap with selected places</button>
				</div>
				<div class="col-md-4 text-center gtco-heading">
					<button  class="btn btn-success" style="height:50px; font-size: 20px;" onclick="generatec()">Visit Everything</button>
				</div>
			</div>
		</div>
	</div>
</form>
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
	<script>
		var count=0;
		function addplace(p)
		{
			count++;
			var a=p+'v';
			document.getElementById(p).innerHTML="<span class=\"btn\" style=\"background-color:red;\" onclick=\"remplace(\'"+p+"\')\">Remove from visit list</span>";
			document.getElementById(a).value="true";
			
		}

		function remplace(p)
		{
			count++;
			var a=p+'v';
			document.getElementById(p).innerHTML="<span class=\"btn btn-primary\"  onclick=\"addplace(\'"+p+"\')\">Add to visit list</span>";
			document.getElementById(a).value="false";
			
		}

		function generate()
		{
			if(count>=2)
			{
				var x=document.getElementsByTagName("form");
				x[0].submit();
			}
			else
				alert("Select at least two places");
		}
		function generatec()
		{
			var x=document.getElementsByTagName("input");
			for(a in x)
			{
				document.getElementById(a).value="true";
			}
			var y=document.getElementsByTagName("form");
			y[0].submit();
		}
	</script>
	<script src="js/jquery.min.js"></script>
	<!-- jQuery Easing -->
	<script src="js/jquery.easing.1.3.js"></script>
	<!-- Bootstrap -->
	<script src="js/bootstrap.min.js"></script>
	<!-- Waypoints -->
	<script src="js/jquery.waypoints.min.js"></script>
	<!-- Carousel -->
	<script src="js/owl.carousel.min.js"></script>
	<!-- countTo -->
	<script src="js/jquery.countTo.js"></script>

	<!-- Stellar Parallax -->
	<script src="js/jquery.stellar.min.js"></script>

	<!-- Magnific Popup -->
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/magnific-popup-options.js"></script>
	
	<!-- Datepicker -->
	<script src="js/bootstrap-datepicker.min.js"></script>
	

	<!-- Main -->
	<script src="js/main.js"></script>
	</body>
</html>