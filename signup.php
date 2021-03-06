<?php include "signupserver.php"; ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<style type="text/css">
	@import url(https://fonts.googleapis.com/css?family=Roboto:400,300,500);
*:focus {
  outline: none;
}

body {

}
body { 
	  margin: 0;
  padding: 0;
  background: #DDD;
  font-size: 16px;
  color: #222;
  font-family: 'Roboto', sans-serif;
  font-weight: 300;
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
#login-box {
  position: relative;
  padding: 250px;
  margin: 5% auto;
  margin-top: 10%;
  width: 700px;
  height: auto;
  background: #FFF;
  border-radius: 2px;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
}
#stuff{
  color: red;
  font-size: 16px;
}
.errors{
  color: #e55039;
}
.success{
  color:#369;
}
.left {
  position: absolute;
  top: 0;
  left: 0;
  box-sizing: border-box;
  padding: 10px 40px 40px 40px;
  width: 300px;
  height:100%;
}
h1{
 padding: 0px 0px 0px 60px;
 color: #092756;
 font-weight: normal;
 font-size: 28px;
 margin-top: 0 auto;
}
h3 {
  margin: 0 0 20px 0;
  font-weight: 300;
  font-size: 20px;
  color: #16a085;
}

input[type="text"],
input[type="password"] {
  display: block;
  box-sizing: border-box;
  margin-bottom: 20px;
  padding: 4px;
  width: 220px;
  height: 32px;
  border: none;
  border-bottom: 1px solid #AAA;
  font-family: 'Roboto', sans-serif;
  font-weight: 400;
  font-size: 15px;
  transition: 0.2s ease;
}

input[type="text"]:focus,
input[type="password"]:focus {
  border-bottom: 2px solid #16a085;
  color: #16a085;
  transition: 0.2s ease;
}

input[type="submit"] {
  margin-top: 28px;
  width: 120px;
  height: 32px;
  background: #16a085;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  text-transform: uppercase;
  transition: 0.1s ease;
  cursor: pointer;
}

input[type="submit"]:hover,
input[type="submit"]:focus {
  opacity: 0.8;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

input[type="submit"]:active {
  opacity: 1;
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.1s ease;
}

.or {
  position: absolute;
  top: 180px;
  left: 330px;
  width: 40px;
  height: 40px;
  background: #DDD;
  border-radius: 50%;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  line-height: 40px;
  text-align: center;
}

.right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 50px 50px 50px 70px;
  width: 350px;
  height: 100%;
  background: url('../image/10.jpg');
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  border-radius: 0 2px 2px 0;
}

.right .loginwith {
  display: block;
  margin-bottom: 40px;
  font-size: 28px;
  color: #FFF;
  text-align: center;
}

button.social-signin {
  margin-bottom: 20px;
  width: 220px;
  height: 36px;
  border: none;
  border-radius: 2px;
  color: #FFF;
  font-family: 'Roboto', sans-serif;
  font-weight: 500;
  transition: 0.2s ease;
  cursor: pointer;
}

button.social-signin:hover,
button.social-signin:focus {
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin:active {
  box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
  transition: 0.2s ease;
}

button.social-signin.facebook {
  background: #32508E;
}

button.social-signin.twitter {
  background: #55ACEE;
}

button.social-signin.google {
  background: #DD4B39;
}
* { -webkit-box-sizing:border-box; -moz-box-sizing:border-box; -ms-box-sizing:border-box; -o-box-sizing:border-box; box-sizing:border-box; }

html { width: 100%; height:100%; overflow:hidden; }

</style>
<body>
 <div id="login-box">
  <div class="left">
  	<h1>CEghana</h1>
    <p id="stuff"></p>
    <?php include "app/errors.php" ?>
    <?php include "app/success.php" ?>
    <h3>Sign up</h3>
    <form action="signup.php" method="POST">
    <input type="text" name="username" placeholder="Full Name *" id="full_name" />
    <input type="text" name="email" placeholder="E-mail *"  id="email" />
    <input type="password" name="password" placeholder="Password *" id="password" />
    <input type="password" name="password2" placeholder="Retype password *"  id="retype_password" />
    
    <input type="submit" name="signup_submit" value="Sign me up"  id="signup" />
</form>
  </div>
  
  <div class="right">
    <span class="loginwith">Sign in with<br />social network</span>
    
    <button class="social-signin facebook">Log in with facebook</button>
    <button class="social-signin twitter">Log in with Twitter</button>
    <button class="social-signin google">Log in with Google+</button>
  </div>
  <div class="or">OR</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		// alert("this is working");



		$("#full_name").focus(function(){
           $("#full_name").css('border-bottom-color', 'red');
		});
		$("#full_name").focusout(function(){
             var full_name = $("#full_name").val();
             if (full_name == "") {$("#full_name").css('border-bottom-color', 'red'); }else{$("#full_name").css('border-bottom-color', '#16a085'); }
		});
		$("#email").focus(function(){
           $("#email").css('border-bottom-color', 'red');
		});
		$("#email").focusout(function(){
             var email = $("#email").val();
             if (email == "") {$("#email").css('border-bottom-color', 'red'); }else{$("#email").css('border-bottom-color', '#16a085'); }
		});
		$("#password").focus(function(){
           $("#password").css('border-bottom-color', 'red');
		});
		$("#password").focusout(function(){
             var password = $("#password").val();
             if (password == "") {$("#password").css('border-bottom-color', 'red');}else{$("#password").css('border-bottom-color', '#16a085'); } 
        
		});
		$("#retype_password").focus(function(){
           $("#retype_password").css('border-bottom-color', 'red');
		});
		$("#retype_password").focusout(function(){
			 var password = $("#password").val();
             var retype_password = $("#retype_password").val();
            if (retype_password == "") {$("#retype_password").css('border-bottom-color', 'red');}else{$("#retype_password").css('border-bottom-color', '#16a085'); }
             
		});


  // $("#signup").click(function(){
  //     var full_name = $("#full_name").val();
  //     var email = $("#email").val();
  //     var password = $("#password").val();
  //     var retype_password = $("#password").val();
  //        if (password < 8) {
  //          	$("#stuff").html("Password is too short !")
  //          }else{$("#password").css('border-bottom-color', '#16a085'); }

  //           if (retype_password == "") {$("#retype_password").css('border-bottom-color', 'red'); }else{$("#retype_password").css('border-bottom-color', '#16a085'); }
  //          if (password !== retype_password) {
  //          	$("#stuff").html("Password do not match!")
  //          }
  
  // if (full_name !=="" & email !=="" & password !=="" & retype_password !=="") {
  // 	var xls = new XMLHttpRequest();
  // 	var data =
  // 	"&full_name="+full_name+
  // 	"&email="+email+
  // 	"&password="+password ;

  // 	xls.open("POST", "signupserver.php", true );
  // 	xls.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
  // 	xls.send(data);
  // 	xls.onprogess = function(){

  // 	}
  // 	xls.onreadystatechange = function(){
  //     if (this.readyState == 4 & this.status == 200) {
  //     	var respon = this.responseText;
  //     	// if (respon == "e") {
  //     	// 	$("#stuff").html("Use have successfuly registed Login!");
  //     	// }else{
  //      //  $("#stuff").html("E-mail is already in use !");

  //     	// }
  //     	$("#stuff").html(respon);
     
  //     }
  // 	}
  	
  // }

  // });


	});
</script>
<!-- <script type="text/javascript" src="../js/jquery-3.3.1.js"></script> -->
</body>
</html>