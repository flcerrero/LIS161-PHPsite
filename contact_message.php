<?php include 'database.php'; 

//secure homepage---include this code to all pages na dapat accessible lang kapag nakalog in
if (!isset($_SESSION['username'])) {
$_SESSION['warning'] = "You need to log-in to access this page";
 header("location: login.php");
}

//Check if edit button is clicked
if (isset($_GET['edit'])) {
  $id = $_GET['edit']; //asign edit value to $id
  $query = "SELECT * FROM contact_message WHERE id=$id";
  $edit_record = mysqli_query($con,$query);

  $edit_array = mysqli_fetch_array($edit_record);

  //Assign values
  $name = $edit_array['name'];
  $email = $edit_array['email'];
  $barangay = $edit_array['barangay'];
  $recipient = $edit_array['recipient'];
  $cmessage = $edit_array['cmessage'];

  //SET edit state to true
  $edit_state = true;

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
  <img class="img-fluid" src="Tanza_logo_admin.png"><br><br>

  <!--PHP WELCOME AND LOGOUT BUTTON MAYBE??-->
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
    <div class="vidtitle"><h2>Message Submissions</h2></div>

    <div class="signuppage">  <!--White Container--> 

   <?php if (isset($_SESSION['message'])) { ?>
    <div class="alert alert-success">
      <?php
        echo $_SESSION['message'];
        unset($_SESSION['message']);
        ?>
      </div>
      <?php } ?>      

<!-- Contact Us Form -->
  <div>
    <h2 class="text-center h_title"><p class="p_title">Message Submissions<p></h2>
      <form method="POST" action="database.php">
        <div class="form-row">
          <div class="form-group col-md-6">
            <input type="hidden" name="id" value="<?php echo $id;?>">
            <label for="name">Name</label>
      <!--try on readonly during edit state
        **solution is readonly="readonly" and apply it to if($edit_state)-->
                  <?php if($edit_state) { ?>
                      <input type="text" class="form-control" name="name" placeholder="John" value="<?php echo $name; ?>" required readonly="readonly">
                   <?php  } else { ?>
                      <input type="text" class="form-control" name="name" placeholder="John" value="<?php echo $name; ?>" required>
                   <?php } ?>
       </div>
          <div class="form-group col-md-6">
            <label for="email">Email Address</label>
                  <?php if($edit_state) { ?>
                      <input type="email" class="form-control" name="email" placeholder="jdoe@up.edu.ph"  value="<?php echo $email;?>" required readonly="readonly">
                   <?php  } else { ?>
                      <input type="email" class="form-control" name="email" placeholder="jdoe@up.edu.ph"  value="<?php echo $email;?>" required>
                   <?php } ?>
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="barangay">Barangay</label>
                   <?php if($edit_state) { ?>
            <select class="form-control" name="barangay" required disabled="disabled">
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
                 <?php  } else { ?>
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
                   <?php } ?>
              </div>
          <div class="form-group col-md-6">
            <label for="email">Recipient</label>
            <select class="form-control" name="recipient" required>
              <option <?php if (!isset($recipient))  echo "selected";?> >Choose...</option>
              <option value="Mayor" <?php if($recipient=='Mayor') echo "selected"; ?> >Mayor</option>
              <option value="Vicemayor" <?php if($recipient=='Vicemayor') echo "selected"; ?> >Vice Mayor</option>
              <option value="Barangay Captain" <?php if($recipient=='Barangay Captain') echo "selected"; ?> >Barangay Captain</option>
              <option value="Webmaster" <?php if($recipient=='Webmaster') echo "selected"; ?> >Webmaster</option>
            </select>
          </div>
        </div>
        <div class="form-row">
           <label for="cmessage">Message</label>
                  <?php if($edit_state) { ?>
                      <input type="text" class="form-control" name="cmessage" placeholder="..." value="<?php echo $cmessage; ?>" required readonly="readonly">
                   <?php  } else { ?>
                      <input type="text" class="form-control" name="cmessage" placeholder="..." value="<?php echo $cmessage; ?>" required>
                   <?php } ?>
          </div>
<br>

        <?php if($edit_state) { ?>
        <button type="submit" class="btn btn-primary" name="update">Update</button><a class="btn btn-warning" href="contact_message.php">Cancel</a>
         <?php  } ?>
      </form>
  </div>
</div> 
 <!-- End of Form -->

  <!-- Display of Data in a Table Format -->
  <div class="infotable">
    <p><h2>View Message Submissions</h2></p>
    <table class="table table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col" class="tablecontent">#</th>
          <th scope="col" class="tablecontent">Name</th>
          <th scope="col" class="tablecontent">Email</th>
          <th scope="col" class="tablecontent">Barangay</th>
          <th scope="col" class="tablecontent">Recipient</th>
          <th scope="col" class="tablecontent">Message</th>
          <th scope="col" class="tablecontent">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 0;
        while ($row = mysqli_fetch_array($contact_message)) { ?>
        <tr>
         <td class="tablecontent"><?php echo ++$i; ?> </td>
          <td class="tablecontent"><?php echo $row['name'];?></td>
          <td class="tablecontent"><?php echo $row['email'];?></td>
          <td class="tablecontent"><?php echo $row['barangay'];?></td>
          <td class="tablecontent"><?php echo $row['recipient'];?></td>
          <td class="tablecontent"><?php echo $row['cmessage'];?></td>
          <td class="tablecontent"><a class="btn btn-warning" href="contact_message.php?edit=<?php echo $row['id']; ?>">Edit</a>
              <a class="btn btn-danger" href="contact_message.php?del=<?php echo $row['id']; ?>">Delete</a></td>
        </tr>
        <?php  } ?>
    
      </tbody>
    </table>
  </div>
</div>
    <!-- End of Display of Data in a Table Format -->


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
