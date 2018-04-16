<?php
 $server = 'sql211.epizy.com';
 $serverusername = 'epiz_21911108';
 $serverpassword = 'rock1roll';
 $dbname = 'epiz_21911108_project';

 $connect = new mysqli($server, $serverusername, $serverpassword, $dbname);
   if ($connect->connect_error) {
      die("Connection Fail".$connect->connect_error);
   }

   //error handler function
//function customError($errno, $errstr) {
//  header("location:../index.php");
//}

//set error handler
//set_error_handler("customError");


 ?>
