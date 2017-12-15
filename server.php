<?php

	session_start();
//initializing variables
		$first_name = "";
		$last_name = "";
		$gender = "";
		$date_of_birth = "";
		$barangay = "";
		$email = "";
		$username = "";
		$password_1 = "";
		$password_2 = "";
		$password = "";
		$errors = array();

$con = mysqli_connect("localhost","root","","municipality");

if (!$con) {
	echo "Database connection error!";
	}

//if register button is clicked
	//mysql_real_escape is used so that if user submits sql on reg form, it doesn't run
	if (isset($_POST['reg_user'])) {
		$first_name = ($_POST['first_name']);
		$last_name = ($_POST['last_name']);
		$gender = ($_POST['gender']);
		$date_of_birth = ($_POST['date_of_birth']);
		$barangay = ($_POST['barangay']);
		$email = ($_POST['email']);
		$username = ($_POST['username']);
		$password_1 = ($_POST['password_1']);
		$password_2 = ($_POST['password_2']);



//Check if all fields have values
	if (empty($first_name)) {
		array_push($errors, "First Name should not be blank");
	}
	if (empty($last_name)) {
		array_push($errors, "Last Name should not be blank");
	}
	if (empty($gender)) {
		array_push($errors, "Gender should not be blank");
	}
	if (empty($date_of_birth)) {
		array_push($errors, "Date of Birth should not be blank");
	}

	if (empty($barangay)) {
		array_push($errors, "Barangay should not be blank");
	}
	if (empty($email)) {
		array_push($errors, "Email should not be blank");
	}
	if (empty($username)) {
		array_push($errors, "Username should not be blank");
	}
	if (empty($password_1)) {
		array_push($errors, "Password should not be blank");
	}
	if ($password_2 != $password_1) {
		array_push($errors, "Please retype password");
	}

	if (count($errors)==0) {
		$password = md5($password_1); //encrypt password
	//Prepare query statement
		$query ="INSERT INTO municipality_users(first_name,last_name,gender,date_of_birth,barangay,email,username,password)
			VALUES ('$first_name','$last_name','$gender','$date_of_birth','$barangay','$email','$username','$password')";
			//performs query
			mysqli_query($con,$query);
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have successfully registered";
			header("location: admin.php"); //WHERE IT'D BE REDIRECTED AFTER SIGNING UP; SHOULD BE home.PHP

	}
}

	//if login button is clicked
	if (isset($_POST['login_user'])) {
		$username = ($_POST['username']);
		$password = ($_POST['password']);
		//Performs basic input verfication
		if (empty($username)) {
		array_push($errors, "Username should not be blank");
	}
		if (empty($password)) {
		array_push($errors, "Password should not be blank");
	}
	//If there are no errors in the input field
	if (count($errors) == 0) {
		$password =md5($password); //encrypts the password

	//Prepare query statement (select/retrieve a record since login na to, meaning may existing account na ang user)
	$query = "SELECT * FROM municipality_users WHERE username = '$username' AND password ='$password' ";
	$result = mysqli_query($con,$query);

	//Check if there is a record returned by select statement
	if (mysqli_num_rows($result) == 1) { //meaning may nagmatch na record
			//set session variables
			$_SESSION['username'] = $username;
			$_SESSION['success'] = "You have successfully logged-in";
			//redirect user
			header("location: admin.php");
		}	else {
		array_push($errors, "Wrong username/password combination");
		}
}

}
//if logout

if (isset($_GET['logout'])) {
	session_destroy();
	unset($_SESSION['username']);
	header("location: login.php");

}

//READ Records
$users = mysqli_query($con,"SELECT * FROM municipality_users");


?>