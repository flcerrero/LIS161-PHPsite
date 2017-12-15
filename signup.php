<?php include "server.php"; ?>

<!DOCTYPE html>
<html>
<title>Municipality of Tanza</title>
<head>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap.css">
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
					    <img class="img-fluid" src="Tanza_logo.png">
					  </div>
					  <div id="hdrtitle">
						<p class="hdrword">MUNICIPALITY OF TANZA</p>
						<small class="text-muted">The Official Website of Municipality of Tanza</small>
					</div>
					  </div>
				</div>
			</div>
			
<!---new navbar-->

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
		<div class="vidtitle"><h2>Sign Up</h2></div>
		<div class="signuppage">	


<!-- Sign Up Form -->
  <div>
    <h2 class="text-center h_title"><p class="p_title">Sign Up <p></h2>
      <form method="POST" action="signup.php">
    <?php include "errors.php"; ?>
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label for="first_name">First Name</label>
            <input type="text" class="form-control" name="first_name" placeholder="John" value="<?php echo $first_name; ?>" required>
          </div>
          <div class="form-group col-md-6">
            <label for="last_name">Last Name</label>
            <input type="text" class="form-control" name="last_name" placeholder="Doe" value="<?php echo $last_name; ?>" required>
          </div>
        </div>
    	<div class="form-row">
          <div class="form-group col-md-6">
            <label for="gender">Gender</label>
            <select class="form-control" name="gender" required>
              <option <?php if (!isset($gender))  echo "selected";?> >Choose...</option>
              <option value="M" <?php if($gender=='M') echo "selected"; ?> >Male</option>
              <option value="F" <?php if($gender=='F') echo "selected"; ?> >Female</option>
              <option value="U" <?php if($gender=='U') echo "selected"; ?> >Undisclosed</option>
            </select>
          </div>
          <div class="form-group col-md-6">
            <label for="date_of_birth">Date of Birth</label>
            <input type="date" class="form-control" name="date_of_birth" value="<?php echo $date_of_birth;?>" required>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="gender">Barangay</label>
            <select class="form-control" name="barangay" required>
              <option <?php if (!isset($barangay))  echo "selected";?> >Choose...</option>
              <option value="Amaya 1" <?php if($barangay=='Amaya 1') echo "selected"; ?> >Amaya 1</option>
              <option value="Amaya 2" <?php if($barangay=='Amaya 2') echo "selected"; ?> >Amaya 2</option>
              <option value="Amaya 3" <?php if($barangay=='Amaya 3') echo "selected"; ?> >Amaya 3</option>
              <option value="Amaya 4" <?php if($barangay=='Amaya 4') echo "selected"; ?> >Amaya 4</option>
              <option value="Amaya 5" <?php if($barangay=='Amaya 5') echo "selected"; ?> >Amaya 5</option>
              <option value="Bagtas" <?php if($barangay=='Bagtas') echo "selected"; ?> >Bagtas</option>
              <option value="Calibuyo" <?php if($barangay=='Calibuyo') echo "selected"; ?> >Calibuyo</option>
              <option value="Halayhay" <?php if($barangay=='Halayhay') echo "selected"; ?> >Halayhay</option>
              <option value="Mulawin" <?php if($barangay=='Mulawin') echo "selected"; ?> >Mulawin</option>
              <option value="Poblacion 1" <?php if($barangay=='Poblacion 1') echo "selected"; ?> >Poblacion 1</option>
              <option value="Poblacion 2" <?php if($barangay=='Poblacion 2') echo "selected"; ?> >Poblacion 2</option>
              <option value="Sanja Mayor" <?php if($barangay=='Sanja Mayor') echo "selected"; ?> >Sanja Mayor</option>
              <option value="Tres Cruses" <?php if($barangay=='Tres Cruses') echo "selected"; ?> >Tres Cruses</option>
            </select>
              </div>
          <div class="form-group col-md-6">
            <label for="email">Email Address</label>
            <input type="email" class="form-control" name="email" placeholder="jdoe@up.edu.ph"  value="<?php echo $email;?>" required>
          </div>
        </div>
        <br>
        <hr>
        <br>
  	<!-- Username and password 1 column -->
  	<div class="form-row">
          <div class="form-group col-md-6">
            <label for="username">Username</label>
            <input type="text" class="form-control" name="username" placeholder="jdoe" value="<?php echo $username; ?>" required>
          </div>
        </div>
  	<div class="form-row">
          <div class="form-group col-md-6">
            <label for="username">Password</label>
			<input type="password" class="form-control" name="password_1">
          </div>
        </div>
  	<div class="form-row">
          <div class="form-group col-md-6">
            <label for="username">Confirm Password</label>
			<input type="password" class="form-control" name="password_2">
          </div>
        </div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign In</a>
		</p>
      </form>
  </div>
</div> 
</div>
 <!-- End of Contact Form -->


<!-- Sign up Form 
	<form method="post" action="register.php">
		<?php include "errors.php"; ?>

		<div class="input-group">
			<label>Username</label>
			<input type="text" name="username" value="<?php echo $username;?>">
		</div>
		<div class="input-group">
			<label>Email</label>
			<input type="email" name="email" value="<?php echo $username;?>">
		</div>
		<div class="input-group">
			<label>Password</label>
			<input type="password" name="password_1">
		</div>
		<div class="input-group">
			<label>Confirm password</label>
			<input type="password" name="password_2">
		</div>
		<div class="input-group">
			<button type="submit" class="btn" name="reg_user">Register</button>
		</div>
		<p>
			Already a member? <a href="login.php">Sign in</a>
		</p>
	</form>
</div>
</div>
<!-- End of form -->

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
			<img class="img-fluid" id="socmed" src="instagram.png" alt="instagram logo"></a>
			<a href="https://www.facebook.com" target="_blank">
			<img class="img-fluid" id="socmed" src="facebook.png" alt="facebook logo"></a>
			<a href="https://www.twitter.com" target="_blank">
			<img class="img-fluid" id="socmed" src="twitter.png" alt="twitter logo"></a>
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
