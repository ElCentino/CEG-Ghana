<?php include "adminserver.php"; ?>
<?php include "adminphpserver.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="admin.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
   <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.7.2/Chart.bundle.min.js"></script>
   <script
    src="https://code.jquery.com/jquery-3.3.1.min.js"
           integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
           crossorigin="anonymous"></script>
</head>
<body>
   <div class="container">
   	<!--  -->
   	
   	<!--  -->
 <div class="body">
   	<div class="th_left_menu">
         <div class="left_menu_top">
         	<b><img src="../image/users.png"></b><span>Welcome<?php if (isset($_SESSION['userid'])) {
               $username = $_SESSION['userid'];
               echo " "."<b style='text-transform:capitalize;font-size:17px; color:#26dac3;'>$username</b>";
            }else{header("Location:adminlogin.php");} ?></span>
         </div>
         <hr id="hr">
         <div class="list">
         	<ul id="ul">
         		<li class="li active" id="dashboard"><i class="fas fa-tachometer-alt" id="icon"></i>Dashboard</li>
         		<li class="li" id="visitors"><i class="fas fa-globe" id="icon"></i>Visitors</li>
         		<li class="li" id="emails"><i class="fas fa-envelope-square" id="icon"></i>E-mails</li>
         		<li class="li" id="address"><i class="fas fa-address-book" id="icon"></i>Address</li>
         		<li class="li " id="sales"><i class="fas fa-shopping-bag" id="icon"></i>Sales</li>
         		<li class="li" id="users"><i class="fas fa-users" id="icon"></i>Users</li>
         		<li class="li" id="books"><i class="fab fa-product-hunt" id="icon"></i>books</li>
         		<li><i class="fas fa-sign-out-alt" id="icon"></i>log out</li>
         	</ul>
         </div>
   	</div>
   	<div class="th_right">
         <div class="top_menu_bar">
         <ul>
            <li><img src="../image/menu-bars.png"></li>
            <li><b>CE GHANA</b></li>
            <li>Admin panel </li>
         </ul>
      </div>
   		<div class="content_right_table">
   			<div class="block_content">
   				<p id="top">Total Visitors</p>
   				<div class="right" >
                 <p>25,194</p>
   					
   				</div>
   				<div class="left">
   					<img src="../image/world.png">
   				</div>
   				<p id="bottom">Visitors section</p>
   			</div>
   			<div class="block_content sale" >
   				<p id="top">Total Sales</p>
   				<div class="right">
                 <p>11,105</p>
   					
   				</div>
   				<div class="left">
   					<img src="../image/shopping-bag.png">
   				</div>
   				<p id="bottom">Sale section</p>
   			</div>
   			<div class="block_content income">
   				<p id="top">Overall Income</p>
   				<div class="right">
                 <p>125,194</p>
   					
   				</div>
   				<div class="left">
   					<img src="../image/ghanaian-cedi.png">
   				</div>
   				<p id="bottom">Overall Income</p>
   			</div>
   			<div class="block_content user">
   				<p id="top">Total User</p>
   				<div class="right">
                 <p>180,194</p>
   					
   				</div>
   				<div class="left">
   					<img src="../image/users.png">
   				</div>
   				<p id="bottom">Total user</p>
   			</div>

   		</div>
   		<div class="content_right_body">

         <div id="emailsss">
            

         </div>
   		<div class="body_content">
            
         <div class="canvas" style="display: inline-block;">
             <canvas id="myChart" width="200" height="120" class="img"></canvas>

        </div>
         <div class="canvas" style="float: right;">
             <canvas id="theChart" width="200" height="120" class="img"></canvas>
             
        </div>
        <div class="canvas" style="display: inline-block;">
             <canvas id="csChart" width="200" height="120" class="img"></canvas>

        </div>
         <div class="canvas" style="float: right;">
             <canvas id="dsChart" width="200" height="120" class="img"></canvas>
             
        </div>
         </div>
   		</div>
   	</div>
   	<!--  -->
   </div>
   </div>
</body>
<script type="text/javascript" src="script.js"></script>
</html>