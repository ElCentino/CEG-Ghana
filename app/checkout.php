
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
    <link rel="stylesheet" href="../css/checkout.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Noto+Sans|Roboto+Condensed" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Raleway|Roboto+Condensed|Ubuntu" rel="stylesheet">

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

                      <li id=""> <img src="<?php echo"../image/".$image; ?>" alt=""></li>
                      <li id="price">Price:  <?php echo $price; ?>&#8373; </li>
                      <li id="subt">Subtotal</li>
                      <li id="subprice"><?php echo $price; ?>&#8373;</li><br>
                      <li id="shipping">Shipping</li>
                      <li id="shprice">0.0&#8373;</li>
                      <li id="shipping">Total</li>
                      <li id="shprice"> <small>Cedis  </small><?php echo $price; ?></li>
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
                    <li> <a href="#" id="continue">Continue to Shipping methode</a></li>
                  </div>
                   </div>
                 </div>
             </div>

       </div>

             </div>
         </div>
     </section>

     <section>
        <footer class="footer">
            <section>
                <h3>Contact Us</h3>
                <p class="meta-footer-text">Get in touch
                    <span class="sm-link">here</span> if you have any queries or issues.</p>
            </section>
            <section>
                <h3>Help & Support</h3>
                <p class="meta-footer-text">Click
                    <span class="sm-link">here</span> for FAQs, order information, T&Cs, errata and code downloads.</p>
            </section>
            <section>
                <h3>Alerts & Offers</h3>
                <p class="meta-footer-text">Sign up to our emails for regular updates, bespoke offers, exclusive discounts and great free content.</p>
                <input class="AO-input input-default" type="text" placeholder="Email" /> <button type="submit" class="btn-butt btn-butt-sm rounded-button-sm AO" style="margin-top: 70px">Submit</button>
            </section>
        </footer>
        <footer class="mid-footer">
                <section>
                        <ul>
                            <h3>The Company</h3>
                            <li>
                                <a href="#">About Us </a>
                            </li>
                            <li>
                                <a href="#">Contact us </a>
                            </li>
                            <li>
                                <a href="#">Newsroom</a>
                            </li>
                            <li>
                                <a href="#">Custom Rental Store</a>
                            </li>
                            <li>
                                <a href="#">Affiliates</a>
                            </li>
                            <li>
                                <a href="#">Customer care</a>
                            </li>
        
        
                        </ul>
        
                        <ul>
                            <h3>Support</h3>
                            <li>
                                <a href="#">Rental Agreement</a>
                            </li>
                            <li>
                                <a href="#">Help</a>
                            </li>
                            <li>
                                <a href="#">How to Return</a>
                            </li>
                            <li>
                                <a href="#">Extending Rentals</a>
                            </li>
                            <li>
                                <a href="#">Shipping Details</a>
                            </li>
                            <li>
                                <a href="#">Coupons</a>
                            </li>
        
                        </ul>
        
        
                        <ul>
                            <h3>What's Hot</h3>
                            <li>
                                <a href="#">Popular Textbooks </a>
                            </li>
                            <li>
                                <a href="#">Top Rented Textbooks</a>
                            </li>
                            <li>
                                <a href="#">Rent Textbooks</a>
                            </li>
                            <li>
                                <a href="#">All Categories</a>
                            </li>
                            <li>
                                <a href="#">Top Searches</a>
                            </li>
                            <li>
                                <a href="#">Customer Quotes</a>
                            </li>
        
                        </ul>
                    </section>
        </footer>
        <footer class="pro-footer">
            
            <article>
                &copy; 2018 Challenge Enterprises of Ghana
            </article>
            <article>
                View our
                <span class="sm-link">Cookie Policy</span>
            </article>
            <article>
                Our
                <span class="sm-link">Privacy Policy</span>
            </article>
            <article>
                Follow us on social media
            </article>
        </footer>
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
