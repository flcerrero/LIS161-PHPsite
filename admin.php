<?php include 'server.php'; 

//secure homepage---include this code to all pages na dapat accessible lang kapag nakalog in
if (!isset($_SESSION['username'])) {
$_SESSION['warning'] = "You need to log-in to access this page";
 header("location: login.php");
}
?>


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

<!--HOVER DIV and TRIGGER DIV-->
<div id="triggerdiv">
<div id="hoverdiv">
  <img class="img-fluid" src="Tanza_logo_admin.png"><br><br>

  <!--PHP WELCOME MESSAGE AND LOGOUT BUTTON-->
  <div>
        <?php if (isset($_SESSION['username'])) { ?>
          <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
          <?php } ?>
        </div>
<!---welcome end-->

<hr>

<a href="admin.php" role="button" class="btn btn-info btn-lg btn-block admin-text">Admin</a>
<a href="index.php" role="button" class="btn btn-info btn-lg btn-block admin-text">Home</a>
<a href="history.php" role="button" class="btn btn-info btn-lg btn-block admin-text">About</a>
<a href="#" role="button" class="btn btn-info btn-lg btn-block admin-text">Economy</a>
<a href="resorts.php" role="button" class="btn btn-info btn-lg btn-block admin-text">Resorts</a>
<a href="contact.php" role="button" class="btn btn-info btn-lg btn-block admin-text">Contact Us</a>
<a href="contact_message.php"  role="button" class="btn btn-info btn-lg btn-block admin-text">Message Submissions</a>
<a href="munuser.php" role="button" class="btn btn-info btn-lg btn-block admin-text">Registered Users</a>
<br>
       <?php if (isset($_SESSION['username'])) { ?>
<a href="server.php?logout=1" role="button" class="btn btn-light btn-lg btn-block admin-text">Log Out</a>
          <?php } ?>
        </div>
</div>

<!--END HOVER DIV-->

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
      
   
<!--float left right, no div class row-->
<div class="outer">
  <div class="fullcolumn">
      <div class="adminpage">

  <?php if (isset($_SESSION['success'])) { ?>
    <div class="alert alert-success">
      <?php
        echo $_SESSION['success'];
        unset($_SESSION['success']);
        ?>
      </div>
      <?php } ?>

                <p><h2>  WELCOME</h2><hr><br>
        <div class="row">
          <div class="col-md-4">
                <p><h4>ADMIN RULES</h4></p><hr>
<b>User panel is on the left side of the page; hover near the left side of the page to access it. </b>
</div>
          <div class="col-md-4">
                <p><h4>ADMIN RULES</h4></p><hr>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat at nunc at congue. Phasellus et mauris pellentesque, feugiat massa quis, pharetra metus. Praesent ullamcorper ut urna eu posuere. Mauris facilisis eget mi et placerat. Quisque molestie nisl euismod felis sollicitudin elementum. Etiam tincidunt vestibulum diam in interdum. Donec ac ex convallis, vulputate justo nec, finibus odio.

<br><br>Suspendisse blandit imperdiet dolor, eu vestibulum tellus convallis et. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Fusce congue tempor est, id aliquam tellus feugiat in. Maecenas pulvinar tristique mauris quis posuere. Mauris erat nunc, cursus vitae facilisis vel, dignissim sed leo. In a risus eleifend, pretium elit eget, vestibulum nulla. Cras vel tortor nec magna dapibus fringilla. Duis eget augue maximus, aliquet mauris vel, sodales ex. Suspendisse vulputate ipsum velit, a interdum quam vestibulum quis. Phasellus condimentum semper quam, ac lacinia arcu laoreet vitae. Aenean ullamcorper urna sed enim consequat, a aliquam dui ultricies. Suspendisse malesuada nulla sed mauris ultricies rutrum. Pellentesque ullamcorper, nisi eget suscipit dictum, dolor enim pellentesque libero, at consectetur ex ex nec ante.

Sed sit amet ipsum pellentesque, commodo ante quis, consectetur turpis. Vestibulum vitae est ac sem faucibus interdum. Cras ut ex nec mauris tincidunt egestas a commodo dui.
</div>
          <div class="col-md-4">
                <p><h4>ADMIN RULES</h4></p><hr>
          Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec feugiat at nunc at congue. Phasellus et mauris pellentesque, feugiat massa quis, pharetra metus. Praesent ullamcorper ut urna eu posuere. Mauris facilisis eget mi et placerat. Quisque molestie nisl euismod felis sollicitudin elementum. Etiam tincidunt vestibulum diam in interdum. Donec ac ex convallis, vulputate justo nec, finibus odio.

</div>
</div>
</div> <!--adminpage-->
</div>
  </div> <!--for outer-->

<!--tryboxes-->
<div class="boxes"></div><!--div for boxes-->


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

  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body></html>
