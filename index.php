<?php include './app/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width = device-width , initial-scale= 1" >

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l" crossorigin="anonymous"></script>

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
    <script type="text/javascript" src="js/jquery-3.3.1.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
    <link rel="icon" type="image/png" href="image/ecghanalogo.png" >
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

    <script type="text/javascript" src="myjs/js.js"></script>
    <script type="text/javascript" src="js/libraries/p5.js"></script>
    <script type="text/javascript" src="js/libraries/p5.dom.js"></script>
    <script type="text/javascript" src="js/processor.js"></script>

    <style>
        .emph {
           color: rgb(230, 70, 70);
           font-style: italic;
        }
    </style>

    <title> CE GHANA </title>
</head>
<body >
  <!-- start of top menu -->
<section>
    <div class="image">
    <div class="image-slider-wrapper">
    <ul id="image_slider">
    <li><img src="image/2.jpg" alt="bookshop" id="image" class="img-fader"></li>
    </ul>
    </div>
    <div class="overlay" > </div>
  </div>
      <div class="container" >
      <div class="wrapper">
      <div class="menu-bar">
      <div class="left" id="mb">

        <img src="image/ecghanalogo.png" alt="" id="logo"><span id="span">  <i class="fas fa-bars" id="menbar"></i> EC GHANA</span>
        <div class="image1"> </div>
      </div>
      <div class="center" id="mb">
          <ul class="top-nav">
              <li class="active-nav"><a href="" style="color:cyan">Home</a></li>
              <li><a href="#" id="min">Ministries <i class="down"></i> </a></li>
              <ul id="ministiedd" style="font-size:13px;">
                 <li><a href="#"id="extras" >Challenge Bookshops<a/></li>
                 <li><a href="#" id="cinematoday">Cinema Today (CineVan)<a/></li><br>
                 <li><a href="#" id="mobilebookshops">Mobile Bookshops<a/></li><br>
                 <li><a href="#" id="localfollowup">Local Follow up<a/></li><br>
                 <li><a href="#" id="prisonministry">Prison Ministry<a/></li><br>
                 <li><a href="#" id="prisonchaplain">Prison Chaplain<a/></li><br>
                 <li><a href="#" id="youngsearchersleague">Young Searchers League<a/></li><br>
                 <li><a href="#" id="mailboxclub">Mail Box Club<a/></li><br>
                 <li><a href="#" id="conferences">Conferences<a/></li><br>
                 <li><a href="#" id="counselingservices">Counseling Services<a/></li>
              </ul>
              <li><a href="#" id="mins">Bookshop Locations<i class="down"></i></a></li>
              <ul id="bookshopdb">
                 <li><a href="#" id="extra">Accra<a/></li>
                 <li><a href="#" id="Tema">Tema<a/></li>
                 <li><a href="#" id="Abetifi">Abetifi<a/></li>
                 <li><a href="#" id="kumasi">Kumasi<a/></li>
                 <li><a href="#" id="sunyani">Sunyani<a/></li>
                 <li><a href="#" id="capeCoast">Cape coast<a/></li>
                 <li><a href="#" id="Tamale">Tamale<a/></li>
              </ul>

              <li><a href="#aboutus">About</a></li>
              <li><a href="">Contact </a></li>
           </ul>
      </div>
      <div class="right" >
       <ul>
         <li id="account"><a href="#">Create Account</a></li>
         <li id="login"><a href="log-in.php">Login</a></li>
       </ul>

    </div>
    </div>
    </div>
<!--      <hr id="hr" >-->
<section>
    <div class="text">
       <p>Buy a book . Save a bundle <br>
      <b id="centerText">Welcome</b>  </p>
    </div>

    <div class="seache">
      <div class="seachebar">
        <form class="" action="#" method="post">
          <input type="search" name="seache" placeholder="Seach by ISBN, TItle, or Author" id="seach">
          <input type="submit" name="seache" value="Find a Book" id="seachsubmit">
        </form>
      </div>

    </div>
</section>
<section>
  <div class="float">
    <div class="foating">
      <div class="line" style="text-align: center;">

       <p>
        <h3> <i class="fas fa-truck" id="fa"></i>Free Shiping</h3>
        <h4>Both ways</h4>
        <h5>  Learn more <span>&#187;</span> <h5>
        </p>
      </div>
      <div class="line">
        <p>
          <h3><i class="fas fa-sync" id="fa"></i>Easy Returns </h3>
        <h4>  It is Fast! </h4>
        <h5>  Learn more <span>&#187;</span> <h5>
        </p>
      </div>
      <div class="line">
        <p>
          <h3><i class="fas fa-thumbs-up" id="fa"></i>Satisfaction</h3>
          <h4>Guaranteed</h4>
        <h5>  Learn more <span >&#187;</span> <h5>
        </p>
      </div>

    </div>
  </div>
</section>
    </div>
</section>
<!-- end of top menu -->

<!-- start of body -->
<section class="anim-element">
  <div class="middle">
    <div class="these">
      <p class="header-blue" style="font-size: 40px;">Featured Books</p>
    </div >
    <div class="books">
          <?php
          $sql = "SELECT * FROM book ORDER BY id DESC LIMIT 10";
          $result = mysqli_query($connect, $sql);
          while ($rows = mysqli_fetch_array($result)) {
            $image = $rows['image'];
            $title = $rows['title'];
            $sbn = $rows['sbn'];
            $author = $rows['author'];
            $binding = $rows['binding'];
            $id = $rows['id'];
            ?>

    <div id="book_container">
         <div class="book" id="book" >
      <form class="book_case" method="POST" action="app/detail.php?a=<?php echo $id ?>">
      <i id="load"></i>
      <a href="app/detail.php?a=<?php echo $id ?>"><img src="<?php echo "./image/".$image; ?>" alt="book" id="bookimages" ></a>
      <!--<p> <textarea name="name" rows="1" cols="" class="title" readonly style="border:none"><?php echo "$title"; ?></textarea> </p>-->
      <p>
      </p>
    </form>
    </div>
    </div>

    <?php
    }
    ?>
  </div>

  <center>
    <div class="pagination">
      <li ><a href="#">&#171;</a></li>
    <?php
       $ls = "SELECT * FROM book ORDER BY id ASC";
       $Lsresult = mysqli_query($connect, $ls);
       $lsrow = mysqli_num_rows($Lsresult);
       $a = $lsrow/10;
       $a = ceil($a);
       for ($i=0; $i < $a ; $i++) {
        ?>

          <li><a href="index.php?page=<?php echo $i ;?>" id="page"><?php echo $i; ?></a></li>

        <?php
       }

     ?>
     <li><a href="#">&#187;</a></li>
   </div>
  </center>
</section>

<!-- end of body-->

<!--  start about us page-->

<div class="aboutus " id="aboutus">
<!-- <img id="aboutimage" src="image/3.jpg" alt=""  >-->
<div class="about anim-element">
<center>
<p><h1 class="header-blue">ABOUT US</h1></p>
<div class="p1" style="text-align: justify;">
<p class="numbers"> <b>Challenge Enterprises of GHANA </b> </p>
<p id="para5">For the past 50 plus years, Challenge Enterprises of Ghana (CEG) has been the leading name in the distribution of Christian literature in the country of Ghana and offers the best in Christian reading.
  <br><br>
Challenge distributes over 90% of the Bibles and Christian literature through 18 retail shops across the country as well as through a fleet of eight "cinevans" which also function as mobile bookshops in remote villages in the 10 regions of Ghana. CEG offers all types and versions of the Bible and the widest variety and choice of Biblically balanced literature to the general public and the Christian community in particular.
 <br><br>
 In addition to books and bookstores, Challenge serves through:
<div class="lists">
<ul>
<li>a prison ministry in eight prisons</li>
<li>free counseling services</li>
<li>eight "cinevans" showing gospel films and providing a mobile bookstore <br>
     in all the regions of Ghana</li>
<li>free Bible corrspondence courses</li>
<li>free tract distribution</li>
<li>pastors and church leaders conferences in Accra, Kumasi and Takoradi</li>
</ul>
</div>
</p>
</div>

  <!--  <div class="p1">
    <p class="numbers">2</p><span id="span2">Incididunt ut labore et dolore</span>
    <p id="para5">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
    </div>
    <div class="p1">
    <p class="numbers">3</p><span id="span2">Incididunt ut labore et dolore</span>
    <p id="para5">Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex.</p>
  </div>-->
</center>
</div>
</div>

<footer>
   <div class="legone">
   <div class="legswos">
   <div class="firstf">
     <ul>
      <p id="title4">The Company</p>
      <li> <a href="#">About Us </a></li>
      <li> <a href="#">Contact us </a></li>
      <li> <a href="#">Newsroom</a></li>
      <li> <a href="#">Custom Rental Store</a></li>
      <li> <a href="#">Affiliates</a></li>
      <li> <a href="#">Customer care</a></li>


    </ul>
    </div>

   <div class="firstf">
    <ul>
      <p id="title4">Support</p>
      <li> <a href="#">Rental Agreement</a></li>
      <li> <a href="#">Help</a> </li>
      <li> <a href="#">How to Return</a></li>
      <li> <a href="#">Extending Rentals</a></li>
      <li> <a href="#">Shipping Details</a></li>
      <li> <a href="#">Coupons</a></li>

     </ul>
   </div>

   <div class="firstf">
     <ul>
      <p id="title4">What's Hot</p>
      <li> <a href="#">Popular Textbooks </a></li>
      <li> <a href="#">Top Rented Textbooks</a></li>
      <li> <a href="#">Rent Textbooks</a></li>
      <li> <a href="#">All Categories</a></li>
      <li> <a href="#">Top Searches</a></li>
      <li> <a href="#">Customer Quotes</a></li>

     </ul>
   </div>

   <div class="firstf">
     <ul>
      <p id="title4">Follow Us</p>
      <li> <a href="#"><i class="fab fa-facebook-f" style="font-size:15px"></i>Facebook</a></li>
      <li> <a href="#"><i class="fab fa-facebook-f" style="font-size:15px"></i>Twitter </a></li>
      <li> <a href="#"><i class="fas fa-facebook-f" style="font-size:15px"></i>Skype</a></li>
      <li> <a href="#"><i class="fas fa-facebook-f" style="font-size:15px"></i>instagram</a></li>
      <li> <a href="#"><i class="fas fa-facebook-f" style="font-size:15px"></i>Pinterest</a></li>
      <li> <a href="#"><i class="fas fa-facebook-f" style="font-size:15px"></i>Email </a></li>

   </ul>
   </div>
   <div class="firstf" id="title5">

   </ul>
   </div>

  </div>
   <br><br>

   <div style="margin-top:100px" ></div>
    

   <footer class="footer-text">
    &copy; 2018 Challenge Enterprises of Ghana
  </footer>

</div>

 <!-- pop up -->
<section>
    <div class="popupclass">
    <div class="popup">
    <div class="popupcontainer">
    <div class="closepopup">
    <button type="button" class="close" aria-label="Close">
    <span aria-hidden="true">&times;</span>
    </button>
    </div>
    <div class="textcontent">
    <p id="popuptitle"></p>
    <p id="pagecontent"> </p>

    </div>
    </div>
    </div>
    </div>
</section>
<section>
  <span id="icon-con"> </span>
  <ul class="icon">
    <li><a href="#"> <img src="icon/Facebook.png" alt="" id="icon"></a></li>
    <li><a href="#"> <img src="icon/twitter-icon.png" alt="" id="icon"></a></li>
    <li><a href="#"> <img src="icon/Pinterest.png" alt="" id="icon"></a></li>
    <li><a href="#"> <img src="icon/instagram.png" alt="" id="icon"></a></li>
    <li><a href="#"> <img src="icon/gmail-icon.png" alt="" id="icon"></a></li>
  </ul>
</section>
<script type="text/javascript">
$(document).ready(function(){

  $("#min").on( {
    mouseenter: function() {
      $("#ministiedd").show();
      $("#bookshopdb").hide();

      $("#ministiedd").mouseleave(function() {
        $(this).hide();
      });
    }
  });

  $("#mins").on({
    mouseenter: function() {
      $("#bookshopdb").show();
      $("#ministiedd").hide();

      $("#bookshopdb").mouseleave(function() {
        $(this).hide();
      });
    }
  });



  //  $("#min").mouseenter(function(){
  //   $("#ministiedd").toggle();
  //  $("#bookshopdb").hide();

  // });
  // $("#mins").click(function(){
  // $("#bookshopdb").toggle();
  // $("#ministiedd").hide();
  //    });
  //    $("#span").click(function(){
  //     $(".center").toggle();

  //  });

   var maxTextLength = 15;
   var specialDets = document.getElementsByClassName("specialDet");

   for(var i = 0; i < specialDets.length; i++) {

    var specText = specialDets[i].innerHTML;
    var subSpec = specText.substring(0, maxTextLength);

     if(specText.length > maxTextLength) {
         specialDets[i].innerHTML = subSpec;
      }
  }



var xhr = new XMLHttpRequest();
xhr.open("post", "json/headers.json", true);

xhr.send();
xhr.onreadystatechange = function(){
  if (this.readyState == 4 && this.status == 200) {
    var data = this.responseText;
    data = JSON.parse(data);

    var  ministries = data.type.ministries;
    var bookshoplocations = data.type.bookshopLocations;
    var  challengeBookshops = ministries[0]["challengeBookshops"];
    var cinemaToday = ministries[0]["cinemaToday"];
    var mobileBookshops = ministries[0]["mobileBookshops"];
    var localFollowUp = ministries[0]["localFollowUp"];
    var prisonMinistry = ministries[0]["prisonMinistry"];
    var prisonChaplain = ministries[0]["prisonChaplain"];
    var youngSearchersLeague = ministries[0]["youngSearchersLeague"];
    var mailBoxClub = ministries[0]["mailBoxClub"];
    var conferences = ministries[0]["conferences"];
    var counselingServices = ministries[0]["counselingServices"];

  $(".close").click(function(){
    $(".popupclass").css('display', 'none');

  });
  ///bookshop Locations

  $("#extra").click(function(){
    $(".popupclass").css('display', 'block');

    xhr = new XMLHttpRequest();
    xhr.open("post", "json/headers.json", true);

    xhr.onprogress = function() {
      $("#popuptitle").html("Loading....");
      $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
    };

    xhr.onload = function() {

      var response = JSON.parse(xhr.responseText);

      $("#pagecontent").html(response.type.bookshopLocations[0].accra.contents);
      $("#popuptitle").html(response.type.bookshopLocations[0].accra.title);
    };

    xhr.send();
  });
  $("#Tema").click(function(){

    $(".popupclass").css('display', 'block');

    xhr = new XMLHttpRequest();
    xhr.open("post", "json/headers.json", true);

   xhr.onprogress = function() {
      $("#popuptitle").html("Loading....");
      $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
   };

    xhr.onload = function() {

      var response = JSON.parse(xhr.responseText);

      $("#pagecontent").html(response.type.bookshopLocations[0].tema.contents);
      $("#popuptitle").html(response.type.bookshopLocations[0].tema.title);
    };

    xhr.send();

  });
  $("#Abetifi").click(function(){
    $(".popupclass").css('display', 'block');

    xhr = new XMLHttpRequest();
    xhr.open("post", "json/headers.json", true);

    xhr.onprogress = function() {
      $("#popuptitle").html("Loading....");
      $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
    };

    xhr.onload = function() {

      var response = JSON.parse(xhr.responseText);

      $("#pagecontent").html(response.type.bookshopLocations[0].abetifi.contents);
      $("#popuptitle").html(response.type.bookshopLocations[0].abetifi.title);
    };

    xhr.send();
  });
  $("#kumasi").click(function(){
    $(".popupclass").css('display', 'block');

    xhr = new XMLHttpRequest();
    xhr.open("post", "json/headers.json", true);

    xhr.onprogress = function() {
      $("#popuptitle").html("Loading....");
      $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
    };

    xhr.onload = function() {

      var response = JSON.parse(xhr.responseText);

      $("#pagecontent").html(response.type.bookshopLocations[0].kumasi.contents);
      $("#popuptitle").html(response.type.bookshopLocations[0].kumasi.title);
    };

    xhr.send();
  });

  $("#sunyani").click(function(){
    $(".popupclass").css('display', 'block');

    xhr = new XMLHttpRequest();
    xhr.open("post", "json/headers.json", true);

    xhr.onprogress = function() {
      $("#popuptitle").html("Loading....");
      $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
    };

    xhr.onload = function() {

      var response = JSON.parse(xhr.responseText);

      $("#pagecontent").html(response.type.bookshopLocations[0].sunyani.contents);
      $("#popuptitle").html(response.type.bookshopLocations[0].sunyani.title);
    };

    xhr.send();

  });
  $("#capeCoast").click(function(){

    $(".popupclass").css('display', 'block');

    xhr = new XMLHttpRequest();
    xhr.open("post", "json/headers.json", true);

    xhr.onprogress = function() {
      $("#popuptitle").html("Loading....");
      $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
    };

    xhr.onload = function() {

      var response = JSON.parse(xhr.responseText);

      $("#pagecontent").html(response.type.bookshopLocations[0].capeCoast.contents);
      $("#popuptitle").html(response.type.bookshopLocations[0].capeCoast.title);
    };

    xhr.send();
  });
  $("#Tamale").click(function(){
    $(".popupclass").css('display', 'block');

    xhr = new XMLHttpRequest();
    xhr.open("post", "json/headers.json", true);

    xhr.onprogress = function() {
      $("#popuptitle").html("Loading....");
      $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
    };

    xhr.onload = function() {

      var response = JSON.parse(xhr.responseText);

      $("#pagecontent").html(response.type.bookshopLocations[0].tamale.contents);
      $("#popuptitle").html(response.type.bookshopLocations[0].tamale.title);
    };

    xhr.send();

  });


  //ministries
  $("#extras").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(challengeBookshops["title"]);
      $("#pagecontent").html(challengeBookshops['contents']);
      $("#popupimage").css('display','block');


  });
  $("#cinematoday").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(cinemaToday["title"]);
      $("#pagecontent").html(cinemaToday['contents']);

  });
  $("#mobilebookshops").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(mobileBookshops["title"]);
      $("#pagecontent").html(mobileBookshops['contents']);

  });
  $("#localfollowup").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(localFollowUp["title"]);
      $("#pagecontent").html(localFollowUp['contents']);

  });
  $("#prisonministry").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(prisonMinistry["title"]);
      $("#pagecontent").html(prisonMinistry['contents']);

  });
  $("#prisonchaplain").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(prisonChaplain["title"]);
      $("#pagecontent").html(prisonChaplain['contents']);

  });
  $("#youngsearchersleague").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(youngSearchersLeague["title"]);
      $("#pagecontent").html(youngSearchersLeague['contents']);

  });
  $("#mailboxclub").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(mailBoxClub["title"]);
      $("#pagecontent").html(mailBoxClub['contents']);

  });
  $("#conferences").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(conferences["title"]);
      $("#pagecontent").html(conferences['contents']);

  });
  $("#counselingservices").click(function(){
     $(".popupclass").css('display', 'block');
     $("#popuptitle").html(counselingServices["title"]);
      $("#pagecontent").html(counselingServices['contents']);

  });
  }
}

  const images = ['image/1.jpg', 'image/2.jpg', 'image/3.jpg', 'image/4.jpg'];
  let currentImageIndex = 3;

  const slider = setInterval(function() {

    if(currentImageIndex >= images.length) {
      currentImageIndex = 0;
    }

    $(".img-fader").fadeOut('fast',function() {
      $(this).fadeIn('slow');
      $(this).attr("src", images[currentImageIndex++]);
    });

  }, 5000);
});

</script>

<script type="text/javascript" src="js/interactivity.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="myjs/main.js"></script>

</body>
</html>
