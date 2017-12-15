<?php include "server.php";
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
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
  <link rel="stylesheet" type="text/css" href="style.css">
  <link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Alef'>
  <script src="script.js" type="text/javascript"></script>
</head>
  <body>
    <div class="container-fluid">

      <!--HOVER DIV and TRIGGER DIV (class triggerdiv)-->
<div id="triggerdiv">
<div id="hoverdiv">
  <img class="img-fluid" src="img/Tanza_logo_admin.png"><br><br>

  <!--PHP WELCOME AND LOGOUT BUTTON-->
  <div>
        <?php if (isset($_SESSION['username'])) { ?>
          <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
          <?php } ?>
        </div>
<!---welcome end-->

<hr>

<a href="admin.php" role="button" class="btn btn-info btn-lg btn-block admin-text">Admin</a>
<a href="home.php" role="button" class="btn btn-info btn-lg btn-block admin-text">Home</a>
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
              <img class="img-fluid" src="img/Tanza_logo.png">
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
    <div class="vidtitle"><h2>Registered Users</h2></div>

<!--search bar-->
  <div class="tablesearch">
<div id="searchfield">
  <form action=<?php echo htmlentities($_SERVER["PHP_SELF"]);?> method="POST">
    <input type="text" placeholder="Type name or barangay" name="valueToSearch"></input>
    <button type="submit" name="search">Submit</button>
  </form>
</div>
 </div>

 <!--end search bar-->

<div class=" infotable">
     <p><h2>Search Results</h2></p>
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col" class="tablecontent">Name</th>
          <th scope="col" class="tablecontent">Username</th>
          <th scope="col" class="tablecontent">Barangay</th>
          <th scope="col" class="tablecontent">Email</th>
        </tr>
      </thead>
      <tbody>
<?php

$con = mysqli_connect("localhost","root","","municipality");

if(isset($_POST['search'])) {
    $valueToSearch = $_POST['valueToSearch'];
    $show = ("SELECT * FROM municipality_users WHERE first_name LIKE '%$valueToSearch%' OR last_name LIKE '%$valueToSearch%' OR barangay LIKE '%$valueToSearch%'") or die("No results found!");
  $result = mysqli_query($con,$show);

while ($rows=mysqli_fetch_array($result)) {
    echo "<tr>";
    echo "<td>"; echo $rows['first_name']. ' ' .$rows['last_name']; echo "</td>";
    echo "<td>"; echo $rows['username']; echo "</td>";
    echo "<td>"; echo $rows['barangay']; echo "</td>";
    echo "<td>"; echo $rows['email']; echo "</td>";
  }
  }
?>
</table>
</div>
</div>

</div>

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



  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>