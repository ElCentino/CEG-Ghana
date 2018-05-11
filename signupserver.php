<?php 

 require "app/db.php"; 
 session_start();
 $success = array();
 $errors = array();

if(isset($_POST['signup_submit'])) {

	$fullname = $_POST['username'];
	$email = $_POST['email'];
	$password = $_POST['password'];
	$cpassword = $_POST['password2'];
	
	if($fullname !== "" || $email !== "" || $password !== "" ) {
		
		if(isset($email)) {

			$select =" SELECT * FROM users WHERE email = '$email'";
			$rselect = mysqli_query($connect, $select);
			$rows = mysqli_num_rows($rselect);

			if($rows == 1){
				array_push($errors, "E-mail already in use !");
			}
		}

		$password = md5($password);
		$query = " INSERT INTO users (fullname, email, password) VALUES ('$fullname', '$email', '$password')";

		if($connect->query($query) == TRUE) {

			array_push($success, "Succesfuly registered !");

		} else {

			array_push($errors, "Sorry try again later");
		}

	} else {

		array_push($errors, "All fields are required");
	}

	$connect->close();
}
?>