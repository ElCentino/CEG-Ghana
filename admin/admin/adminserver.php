<?php
  $server = 'localhost';
  $serverusername = 'root';
  $serverpassword = '';
  $dbname = 'project';

  $connect = new mysqli($server, $serverusername, $serverpassword, $dbname);

    if ($connect->connect_error) {
      die("Connection Fail".$connect->connect_error);
    }


 session_start();
 $errors = array();
 $success = array();
 if (isset($_POST['adminlogin'])) {
 	$username = $_POST['username'];
 	$password = $_POST['password'];

 	if ($username !== "" || $password !== "") {
 		$query = "SELECT * FROM admin WHERE userid = '$username' AND password = '$password'";
 	 $result = mysqli_query($connect, $query);
 	 if ($connect->query($query)== TRUE) {
 	 	while ($row = mysqli_fetch_array($result)) {
 	 		$usernames = $row['username'];
 	 	}
 	 	 $_SESSION['userid'] = $usernames;
 	 	 header("Location:admin.php");
 	 }else{
 	 	array_push($errors, "Wrong Credential");
 	 }
 	}else{
 		array_push($errors, "All fiels are required");
 	}
 }
 ?>