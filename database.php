<?php

session_start();

//Initialize variables 
$name = "";
$email = "";
$barangay = "";
$recipient = "";
$cmessage = "";
$id = 0;
$edit_state = false;


//connect to database
$con = mysqli_connect("localhost", "root","","municipality");

if (!$con) {
	echo "Connection to the database unsuccessful!";
}

//CREATE record
if (isset($_POST['submit'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$barangay = $_POST['barangay'];
$recipient = $_POST['recipient'];
$cmessage = $_POST['cmessage'];

$query = "INSERT INTO contact_message(name,email,barangay,recipient,cmessage) VALUES ('$name', '$email', '$barangay', '$recipient', '$cmessage')";

mysqli_query($con,$query);
$_SESSION['message'] = "Message sent!";
header("location: contact.php");
}

//READ Records
$contact_message = mysqli_query($con,"SELECT * FROM contact_message");

//UPDATE record
if (isset($_POST['update'])) {
$name = $_POST['name'];
$email = $_POST['email'];
$barangay = $_POST['barangay'];
$recipient = $_POST['recipient'];
$cmessage = $_POST['cmessage'];
$id = $_POST['id'];

//PREPARE query
$query = "UPDATE contact_message SET
name= '$name',
email = '$email',
barangay ='$barangay',
recipient = '$recipient',
cmessage = '$cmessage'
WHERE id = $id";

mysqli_query($con,$query);
$_SESSION['message'] = "Submission updated";
header("location: contact_message.php");
}

//DELETE record
if (isset($_GET['del'])) {
	$id = $_GET['del'];

	$query = "DELETE FROM contact_message WHERE id=$id";
	mysqli_query($con,$query);
	$_SESSION['message'] = "Submission updated!";
	header("location: contact_message.php");

}

?>