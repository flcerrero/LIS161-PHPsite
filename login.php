<?php include "server.php"; ?>

<!DOCTYPE html>
<html>
<title>Municipality of Tanza</title>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Alef'>
	<script src="script.js" type="text/javascript"></script>
</head>
	<body>
		<div class="container-fluid">
			<div class="wrapper">
			<!--header-->
			<div class="header">
				<div id="tanza-header">
					<div class="row">
					  <div id="hdrlogo">
					    <img class="img-fluid" src="img/Tanza_logo.png">
					  </div>
					  <div id="hdrtitle">
						<p class="hdrword">MUNICIPALITY OF TANZA</p>
						<small class="text-muted">The Official Website of Municipality of Tanza</small>
					</div>
					  </div>
				</div>
			</div>
			


<div id="navMenu"> 
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="history.php">About</a></li>
          <li><a href="#">Economy</a>
            <ul class="sub-nav">
              <li><a href="#">Schools</a> </li>
              <li><a href="#">Businesses</a> </li>
            </ul>
          </li>
          <li><a href="#">Tourism</a>
            <ul class="sub-nav">
              <li><a href="resorts.php">Resorts</a> </li>
              <li><a href="#">Restaurants</a></li>
              <li><a href="#">Malls</a></li>
              <li><a href="#">Festivities</a></li>
			 </ul>
			</li>
          <li><a href="#">Downloads</a>
             <ul>
              <li><a href="#">Disclosure Report</a> </li>
              <li><a href="#">Forms</a></li>
          </ul>
			<li><a href="contact.php">Contact Us</a></li>
        </ul>
      </div>
<!--end newnavbar-->

<!--float left right, no div class row-->
<div class="outer">
	<div class="left-content">		
		<div class="vidtitle"><h2>Log In</h2></div>
		<div class="signuppage">	


<!-- Sign Up Form -->
  <div>
      <form method="post">
                          <!--Alert for CRUD Operations-->
                              <?php if (isset($_SESSION['warning'])) { ?>
                                <div class="error">
                                <?php
                                   echo $_SESSION['warning'];
                                  unset($_SESSION['warning']);
                                  ?>
                                  </div>
                                  <?php } ?>
                          <?php include "errors.php"; ?>
                          <br>
                      <label><b>Username:</label></b>
                  <input type="text" placeholder="Enter Username" name="username"><br><br>
                     <label><b>Password:</b></label>
      <input type="password" placeholder="Enter Password" name="password"><br><br>
      <span class="signup"><p><a href="signup.php">Sign Up</p></a></span>
                <button type="submit" class="btn btn-primary" name="login_user">Sign In</button>
                <button type="reset" class="btn btn-primary">Clear</button>
                </form>
                            </div>

  </div>
</div> 
 <!-- End of Contact Form -->

	<div><input type="text" name="search" placeholder="Search.." class="search"></div>
	<div class="time">
<p id="demo"></p>
<script type="text/javascript">
document.getElementById('demo').innerHTML = Date().slice(0, -32)
</script>
	</div>
	<div class="jobs">
		<div class="jobheader">Job listing</p></div>
		<div class="joblist">
			<b class="jobtitle">Jollibee Tanza</b><br>
			<small><i>Posted: August 30, 2017</i></small>
				<ul>
					<li>Waitress</li>
					<li>Cashier</li>
					<li>Manager</li>
				</ul>
			<p>See details: <a href="facebook.com">here</p></a>
			<hr>
			<b class="jobtitle">Puregold Tanza</b><br>
			<small><i>Posted: July 30, 2017</i></small>
				<ul>
					<li>Bagger</li>
					<li>Cashier</li>
					<li>Janitor</li>
					<li>Supervisor</li>
				</ul>
			<p>See details: <a href="facebook.com">here</p></a>
		</div>
	</div>
</div>
<hr>
<!--end float left-->
<div class="boxes"></div>

<!--footer-->
<div class="footer">
	<div class="row">
		<div class="col-md-4">
			<b>Links</b><hr>
			<a href="http://cavite.gov.ph/home/">Cavite Website</a>
		</div>
	<div class="col-md-4">
		<b>Contact Information</b><hr>
		Telephone Number: (046)450-4545<br>
		E-mail address: tanzamunicipality@gmail.com<br>
		Fax No : (632) 899-8933
		</div>
	<div class="col-md-4">
				<b>Social Media</b><hr>
			<a href="https://www.instagram.com" target="_blank">
			<img class="img-fluid" id="socmed" src="img/instagram.png" alt="instagram logo"></a>
			<a href="https://www.facebook.com" target="_blank">
			<img class="img-fluid" id="socmed" src="img/facebook.png" alt="facebook logo"></a>
			<a href="https://www.twitter.com" target="_blank">
			<img class="img-fluid" id="socmed" src="img/twitter.png" alt="twitter logo"></a>
		</div>
	</div>
	<p class="copyright">Copyright © 2017 All Rights Reserved | Municipality of Tanza</p>
</div>
<!--end footer-->
</div>
	</div>


	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	</body>
</html>
