<div class="navbar navbar-inverse">
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
							<li><a href='#' data-toggle="modal" data-target="#myModal1"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
	        				<li><a href="#" data-toggle="modal" data-target="#myModal2"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
	      				</ul>
	      			</div>
	      			<?php } ?>
</div>
<div class="container-fluid" style="border-bottom: 1px #787878 solid;padding: 0px; margin: 0px;">
	<div class="col-xs-3" style="margin: 0px; padding: 0px;">
		<img src="vguide1.jpg" style="height:100px;width: 300px;">
	</div>
			<div class="col-xs-9" style="padding: 0px; margin: 0px;">
				<div style="padding: 0px; margin: 0px;">
					<p style="color:white;padding-top: 5px;width:350px;height:40px;box-shadow:0 4px 8px 5px rgba(0, 0, 0, 0.2), 0 6px 20px 10px rgba(0, 0, 0, 0.19);margin-left: 500px;padding-left: 5px">“Wherever you go becomes a part of you somehow.” 
					</p>
				</div>
				<div class="navbar navbar-default navbar-right" style="padding: 0px; margin: 0px; border: 0px; background-color: #161616;">
					<ul class="nav navbar-nav" style="border:0px;">
						<li class="block"><a href="#" class="blocka" style="color: white; width:200px; text-align:center;">Popular places</a></li>
						<li class="block"><a href="#" class="blocka" style="color: white; width:200px; text-align:center;">Planned tours</a></li>
						<li class="block"><a href="#" class="blocka" style="color: white; width:200px; text-align:center;">Categories</a></li>
					</ul>
	      		</div>
	      	</div>
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
			    			</div><br><br>
			    			<div class="form-group">
			     				 <label for="pwd">Password</label><br>
			     				 <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
			    			</div><br><br>
			    			<div class="checkbox">
			      			<label><input type="checkbox" name="remember"> Remember me</label>
			    			</div><br><br>
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
		  				</div><br><br>
		  				<div class="form-group">
		  					<label for="password">Password:</label>
		  					<input type="password" class="form-control" id="email" placeholder="Enter password" name="password" required>
		  				</div><br><br>
		  				<div class="form-group">
		  					<label for="pass">Repeat password:</label>
		  					<input type="password" class="form-control" placeholder="Re-type password" name="repass" required>
		  				</div>
		  				<button type="submit" id ="register" class="btn btn-default btn-success" style="margin-left: 250px;">Submit</button>
  						</form>
  					</div>
  				</div>
  			</div>
  		</div>
  		<div  id="box" class="container-fluid">
  			<form action="http://www.businessaura.com/query2.php" class="form-inline" method="post" id="formIndex" name="formIndex">           	              
            <input type="text" name="txtsearch" style="width:585px;border:1px solid black;height:30px; margin-top: 15px; margin-left:200px; padding:3px;" placeholder="Enter Products / Company Name to Search" autocomplete="off" value=""/>
            <select name="serachCat" style="height:30px;border:1px solid black;padding:3px">
            <option value="Products" >Products</option>
              <option value="Company Name" >Company Name</option>
              <option value="buyerlead" >Buyer's Lead</option>
              <option value="sellers" >Sellers</option>
              <option value="usedmachine" >Used Machines & Equipments</option>
            
            </select>
     
            <input type="submit" name="searchRecords" value="Search" class="button" />
       
  		</div>