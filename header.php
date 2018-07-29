<div class="navbar navbar-inverse" id="uppnav">
			<?php 
				if(isset($_SESSION["name"])){
			?>
					<div class="container-fluid">
						<ul class="nav navbar-nav">
							<li><a href="#">Welcome <?php echo $_SESSION["name"]?></a></li>
						</ul>
					</div>
			<?php }
				else{
					?>
					<div class="container-fluid">
						<ul class="nav navbar-nav">
							<li>
								<a href='#' data-toggle="modal" data-target="#myModal1">
									<span class="glyphicon glyphicon-user"></span> Sign Up
								</a>
							</li>
	        				<li>
	        					<a href="#" data-toggle="modal" data-target="#myModal2">
	        						<span class="glyphicon glyphicon-log-in"></span> Login
	        					</a>
	        				</li>
	      				</ul>
	      			</div>
	      	<?php 	} 
	      	?>
</div>
<div id="myModal2" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
   			<div class="modal-header">
    		  	<button type="button" class="close" data-dismiss="modal">&times;</button>
        			<h3 style="text-align: center;">Login</h3>
        	</div>
        	<div class="modal-body container">
        		<form action="action_pagelogin.php" class="form-inline" method="post">
			    	<div class="form-group">
			      		<label for="email">Enter your Email</label><br>
			      		<input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
			    	</div>
			    	<br><br>
			    	<div class="form-group">
			     		<label for="pwd">Password</label><br>
			     		<input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
			    	</div>
			    	<br><br>
			    	<div class="checkbox">
			      		<label><input type="checkbox" name="remember"> Remember me</label>
			    	</div>
			    	<br><br>
			    		<button type="submit" id="register" class="btn btn-default btn-success" style="margin-left: 250px;">Submit</button>
			  	</form>
			</div>
		</div>
	</div>
</div>
<div id="myModal1" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
        		<h3 style="text-align: center;">Signup</h3>
			</div>
			<div class="modal-body container">
				<form  name="form1" class="form-inline" action="action_pagesign.php" method="post">
		  			<div class="form-group" >
		  				<label for="email">Email:</label>
		  				<input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
		  			</div>
		  			<br><br>
		  			<div class="form-group">
		  				<label for="password">Password:</label>
		  				<input type="password" class="form-control" id="email" placeholder="Enter password" name="password" required>
		  			</div>
		  			<br><br>
		  			<div class="form-group">
		  				<label for="pass">Repeat password:</label>
		  				<input type="password" class="form-control" placeholder="Re-type password" name="repass" required>
		  			</div>
		  			<br>
		  			<br>
		  			<div class="form-group">
  						<label for="email">First Name:</label>
  						<input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname" required>
  					</div><br><br>
  					<div class="form-group">
  						<label for="name">Last Name:</label>
  						<input type="text" class="form-control" id="lname" placeholder="Enter Last name" name="lname" required>
  					</div><br><br>
  					<div class="form-group">
  						<label for="mobile">Mobile No:</label>
  						<input type="text" class="form-control" id="contact" placeholder="Enter Mobile no" name="contact" required>
  					</div>
  					<br><br>
		  			<button type="submit" id ="register" class="btn btn-default btn-success" style="margin-left: 250px;">Submit</button>
  				</form>
  			</div>
  		</div>
 	</div>
</div>
