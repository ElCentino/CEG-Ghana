<?php
include '../app/db.php';
?>
<?php
include "../php/header.php";
?>
<?php
  if (isset($_GET['a'])) {
    $id = $_GET['a'];
  
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
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width, initial-scale= 1">
    <link rel="stylesheet" type="text/css" href="../detail.css">
    <link href="https://fonts.googleapis.com/css?family=IBM+Plex+Serif" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<!--    <link rel="stylesheet" media="screen" href="../indexstyle.css" type="text/css" />-->
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
      <script type="text/javascript" src="myjs/js.js"></script>
      <script type="text/javascript" src="../js/jquery-3.3.1.js"></script>
    <title></title>
  </head>
  <body >
<section>

<div class="bookhistory">
<div class="bookimage">
 <img src="<?php echo "../image/".$image; ?>" alt="bookshop" >
</div>
<div class="descriptions">
  <p id="booktitle"><?php echo "$title"; ?></p>
  <hr >
  <hr>
 <ul>
   <li>Sbn:</li><span><?php echo "$sbn"; ?></span><br>
   <li>Author(s):</li><span> <?php echo "$author"; ?></span><br>
   <li>Binding:</li><span><?php echo "$binding"; ?></span><br>
   <li><b style="color:#c0392b">Price</b>:<big style="color:#c0392b" id="price"><?php echo "$price"?></big> <span> GHS</span> </li>

   <form  id="theform">
    <span style="color:gray; margin-right:10px;">Quantity</span> <input type="number" name="text" value="1" id="quantity"><br>

     <input type="submit" name="buynow" value="buy Now" id="click">
      <input type="submit" name="buynow" value="Add to card" id="clicks">
   </form>
 </ul>
  </div>

    <div class="boookdescription">
  <form style="display:inline-block">
    <input type="submit" name="submit" value="Description" id="desc"><input type="submit" name="submit" value="Reviews" id="descs">
  </form>
        <hr width="1000px" color="lightgray" style="margin-left:0px;margin-top:-0px;">
      <p id="descriptiontext"><?php echo nl2br($description) ?></p>
      <div class="Reviews">
        <div class="">
          <form>
            <P style="text-align:left; font-size:18px;color:#26dac3; margin-left:10px; margin-bottom:10px;"> leave a Review</p>
            <input type="email" name="name" value="" placeholder="Enter your email" id="email"><br>
            <textarea name="name" rows="5" cols="40" id="textarea"></textarea><br>
            <input type="submit" name="comment" value="comment" id="rcomment">
          </form>
        </div>
      </div>
  <hr  style="margin-top:30px; width:1000px; align:center;margin-bottom:30px;">
    </div>
  </div>
</section>
<!-- related books; -->

<section>
  <div class="realatedbooks">
      <div class="middle">
        <div class="these">
          <p>People Also Search For These Books</p>
        </div >
        <div class="books">
              <?php

                $sql = "SELECT * FROM book ORDER BY id DESC TOP 4";
                $result = mysqli_query($connect, $sql);
                while ($rows = mysqli_fetch_array($result)) {
                  $image2 = $rows['image'];

              ?>

            <div class="book" id="book" >
              <form>
              <i id="load"></i>
          <a href="checkout.php?c=<?php echo $id ?>">    <img src="<?php echo "../image/".$image2; ?>" alt="CEG GHANA BOOKS" id="bookimages">
</a>
            </form>
            </div>
        <?php
        }
        ?>
      </div>
    </div>
    </div>
  </div>
</section>
<p id="contt" ></p>
<section>
  <div class="addtocart">
    <div class="addtocartcont">
      <div class="closepopup">
      <button type="button" class="close" aria-label="Close">
      <span aria-hidden="true">&times;</span>
      </button>
      </div>
      <br>
      <div class="cartcontent">
           <div class="cartleft">
             <img src="<?php echo "../image/".$image; ?>" alt="">
           </div>
           <div class="catright">
            <p id="justadded"> <img src="../icon/added.png" alt=""> Just Added <span> <a href="cart.php">view Cart</a> </span></P>
          <hr id="ct">
              <div class="carttitle">
                <p><?php echo $title; ?></p><br>
                <p>Price: &nbsp;<span> <?php echo $price ?> &#8373;</span> </p>
              </div>
              <div class="butt">
                 <button type="button" name="button" id="checkout">Checkout</button> &nbsp; or &nbsp; <span id="contu" style="color:blue;">  Continue Shopping&nbsp;  &#187;</span>
              </div>
           </div>
      </div>
    </div>
  </div>
</section>
<footer>
<?php include '../php/footer.php'; ?>
</footer>
 <script type="text/javascript">
   $(document).ready(function(){
     var maxTextLength = 15;
     var specialDets = document.getElementsByClassName("author");

     for(var i = 0; i < specialDets.length; i++) {

      var specText = specialDets[i].innerHTML;
      var subSpec = specText.substring(0, maxTextLength);

       if(specText.length > maxTextLength) {
           specialDets[i].innerHTML = subSpec;
        }
    }

function _(id){
  return document.getElementById(id);
}
    $(".close").click(function(){
      $(".addtocart").css('display', 'none');

    });
    $("#click").click(function(e){
      e.preventDefault();
      var id = '<?php echo $id ?>';

    window.location.href = "checkout.php?c="+id;
    });

$("#clicks").click(function(e){
  e.preventDefault();
 var id = '<?php echo $id ?>';
 var image = '<?php echo $image; ?>';
 var title = '<?php echo $title; ?>';
 var price = '<?php echo $price; ?>';

 var data =
 "&id="+id+
 "&image="+image+
 "&title="+title+
 "&price="+price;
   var xhrs = new XMLHttpRequest();
   xhrs.open("POST", "../app/cart.php", true);
   xhrs.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
   xhrs.onreadystatechange = function(){
     if (this.readyState == 4 && this.status == 200) {
        console.log(this.responseText);
        document.getElementById('contt').innerHTML = this.responseText;
     }
   }
   xhrs.send(data);

});

   $("#descs").click(function(e){
     e.preventDefault();
     $("#descriptiontext").hide();
     $(".Reviews").show();
     $("#desc").css('background-color', 'lightgray');
     $("#descs").css('background-color', 'white');


   });
   $("#desc").click(function(e){
     e.preventDefault();
   $(".Reviews").hide();
  $("#descriptiontext").show();
  $("#desc").css('background-color', 'white');
  $("#descs").css('background-color', 'lightgray');
   });


   });
 </script>
  </body>
</html>
