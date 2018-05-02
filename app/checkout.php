
<?php
include '../app/db.php';
?>
<?php
  if (isset($_GET['c'])) {
    $id = $_GET['c'];
  }
   $mysli = "SELECT * FROM book WHERE id = '$id'";
   $myresult = mysqli_query($connect, $mysli);
     while ($rowse = mysqli_fetch_array($myresult)) {
       $image = $rowse['image'];
       $title = $rowse['title'];
       $sbn = $rowse['sbn'];
       $author = $rowse['author'];
       $binding = $rowse['binding'];
	     $price = $rowse['Price'];
	     $description = $rowse['description'];
     }


 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="../checkout.css">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto+Condensed" rel="stylesheet">
    <title></title>
  </head>
  <body>
    <section>
      <div class="firsttabe">
         <div class="setabe">
           <center>
           <div class="image">
               <!--<img src="../image/logo1.jpg" alt="" id="logo" style="vertical-align:middle;"> --><span id="span">  <i class="fas fa-bars" id="menbar"></i> CE GHANA</span>

           </div>
         </center>
         <center>

         </center>
         </div>
      </div>
    </section>
     <section>
       <div class="buynow">
         <div class="location">
           <center>
             <div class="buynowcontent">

                 <div class="left">
                 <p>
                  <li id="cart">Cart |</p></li>
                  <li>Customer Information |</p></li>
                  <li>Shipping method |</p></li>
                  <li>Payment method </p></li>
                 </p>
                   <img src="../image/expresspay.png" alt=" ec ghana ghana mobile money" id="paytimage">
                   <img src="../image/mtn-mobile-money.jpg" alt=" ec ghana ghana mobile money" id="mobilemoney">
                   <div class="separator">
                     OR
                   </div>
                   <div class="formcontainer">
                     <p>
                       <li id="cti">Contact Information</li>
                       <li id="ahad">Already have and account ?<a href="../log-in.php" style="text-decoration:none;">Login </a> </li>
                     </p>

                     <form class="form1" action="index.html" method="post">
                        <input type="email" name="email" placeholder="Email" id="email"><br>

                        <input type="checkbox" name="checkbox" value="" checked id="checkbox"> <span id="keep">Keep me up to date on news and exclusive offers</span><br>
                          <span style="margin-top: 10px;margin-bottom: 10px;font-size:20px;">Shipping address</span><br>
                          <br>
                        <input type="text" name="First Name" value="" id="firstname" placeholder="First name">  <input type="text" name="Last Name" value="" id="lastname" placeholder="Last Name"><br>
                        <input type="text" name="Address" value="" placeholder="Address" placeholder="Address" id="address">
                        <input type="text" name="" value="" placeholder="Apt, Suite, Etc..." id="apt">
                        <input type="text" name="city" value="" id="state" placeholder="State/ Region">
                          <input type="text" name="city" value="" id="city" placeholder="City">


                     </form>
                  <div class="return">
                    <li> <a href="#" id="return">Return to cart</a> </li>
                    <li> <a href="#" id="continue">Continue to Shipping methode</a></li>
                  </div>
                   </div>
                 </div>
                 <div class="right">
                    <div class="itemimage">

                      <li id=""> <img src="<?php echo"../image/".$image; ?>" alt=""></li>
                      <li id="price">Price:  <?php echo $price; ?>&#8373; </li>
                    <hr id="hr">
                      <li id="subt">Subtotal</li>
                      <li id="subprice"><?php echo $price; ?>&#8373;</li><br>
                      <li id="shipping">Shipping</li>
                      <li id="shprice">0.0&#8373;</li>
                      <hr id="hr">
                      <li id="shipping">Total</li>
                      <li id="shprice"> <small>Cedis  </small><?php echo $price; ?></li>
                    </div>
                 </div>
             </div>

       </div>

             </div>
         </div>
     </section>
     <script type="text/javascript">
     var spantittle = document.getElementById('spantittle').value;
     //var n = spantittle.length;
     console.log(spantittle);

     </script>
  </body>
</html>
