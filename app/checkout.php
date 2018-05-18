
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

    <?php include '../php/template-config.php' ?>
  <head>
   

    <title>Checkout - <?php echo $title?></title>
  </head>
  <body>
    <section>
      <div class="firsttabe">
         <div class="setabe">
           <center>
           <div class="image">
           <a href="<?php echo "detail.php?a=".$id?>" class="arrow-left"><i class="fas fa-arrow-left"></i></a>
            <span id="span">CE GHANA</span>

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
             <div class="buynowcontent container-main">

                 
                 <div class="right">
                    <div class="itemimage">

                      <table class="book-details">
                        <tr class="book-display">
                          <th><img src="<?php echo"../image/".$image; ?>" alt=""></th>
                          <td style="text-align: center">Price:  <?php echo $price; ?>&#8373; </td>
                        </tr>
                        <tr>
                          <th>Subtotal</th>
                          <td><?php echo $price; ?>&#8373;</td>
                        </tr>
                        <tr>
                          <th>Shipping</th>
                          <td>0.0&#8373;</td>
                        </tr>
                        <tr>
                          <th>Total</th>
                          <td> <small>Cedis  </small><?php echo $price; ?></td>
                        </tr>
                      </table>

                    </div>
                 </div>

                 <div class="left">
                 <p class="small-nav">
                  <li class="sm-link">Cart </p></li>
                  <li>| Customer Information |</p></li>
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
                    <a class="btn-butt rounded-button-sm" role="button">Continue to Shipping method</a>
                  </div>
                   </div>
                 </div>
             </div>

       </div>

             </div>
         </div>
     </section>

     <section>
        <?php include '../php/template-footer.php' ?>
    </section>
    <!-- End Of Body Details -->

    <section>
        <span id="icon-con"> </span>
        <ul class="icon">
            <li>
                <a href="#">
                    <img src="../icon/Facebook.png" alt="" id="icon">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../icon/twitter-icon.png" alt="" id="icon">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../icon/Pinterest.png" alt="" id="icon">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../icon/instagram.png" alt="" id="icon">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="../icon/gmail-icon.png" alt="" id="icon">
                </a>
            </li>
        </ul>

       
    </section>
     <script type="text/javascript">
     var spantittle = document.getElementById('spantittle').value;
     //var n = spantittle.length;
     console.log(spantittle);

     </script>

    <script src="../js/details-interactivity.js" type="text/javascript"></script>
    <script src="../js/jquery-3.3.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/libraries/p5.js"></script>
    <script type="text/javascript" src="../js/libraries/p5.dom.js"></script>
    <script type="text/javascript" src="../js/processor.js"></script>
    
  </body>
</html>
