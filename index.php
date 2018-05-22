<?php include './app/db.php'; ?>
<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width = device-width , initial-scale= 1">

  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
    crossorigin="anonymous"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
    crossorigin="anonymous"></script>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
  <link rel="stylesheet" type="text/css" href="details.css">
  <script type="text/javascript" src="js/jquery-3.3.1.js"></script>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <link href="https://fonts.googleapis.com/css?family=Exo" rel="stylesheet">
  <link rel="icon" type="image/png" href="image/ecghanalogo.png">
  <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">

  <script type="text/javascript" src="myjs/js.js"></script>
  <script type="text/javascript" src="js/libraries/p5.js"></script>
  <script type="text/javascript" src="js/libraries/p5.dom.js"></script>
  <script type="text/javascript" src="js/processor.js"></script>

  <style>
    .emph {
      color: rgb(230, 70, 70);
    }
  </style>

  <title> CE GHANA </title>
</head>

<body>
  <!-- start of top menu -->
  <section>

    <div class="top-contact-info">
      <div class="leftside">
        <span>Call us on</span>
        <span>+23345423256</span>
        <span>+233454234557</span>
      </div>
      <div class="rightside">
        <span>Like us on</span>
        <a href="#" class="sm-link">Facebook</a>
        <a href="#" class="sm-link">Twitter</a>
        <a href="#" class="sm-link">Google Plus</a>
        <a href="#" class="sm-link">Instagram</a>
      </div>
    </div>

    <div class="image">
      <div class="image-slider-wrapper">
        <ul id="image_slider">
          <li>
            <img src="image/ce2.jpg" alt="bookshop" id="image" class="img-fader">
          </li>
        </ul>
      </div>
      <div class="overlay"> </div>

    </div>
    <div class="container" style="margin-top: 170px;">
        <nav class="main-nav">
          <div class="nav-logo">
            <img src="image/ecghanalogo.png" alt="" class="nav-logo-img">
            <h1 class="nav-black-hide">CE GHANA</h1>
          </div>
          <div class="menu-itmes">
              <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Ministries</a></li>
                <li><a href="#">Locations</a></li>
                <li><a href="#">Library</a></li>
                <li><a href="#">Contact Us</a></li>
                <li><a class="nav-active" href="#">Login</a></li>
              </ul>
          </div>
        </nav>
      <section>
        <div class="text">
          <p>Welcome to Challenge Enterpriese
            <br>
            <b id="centerText">Welcome</b>
          </p>
        </div>

        <center style="margin-top: 10px;">
          <div class="seache">
            <div class="seachebar">
              <form class="" action="#" method="post">
                <input type="search" name="seache" placeholder="Seach by ISBN, TItle, or Author" id="seach">
                <input type="submit" name="seache" value="Find a Book" id="seachsubmit">
              </form>
            </div>

          </div>

        </center>
      </section>
      <section>
        <div class="float">
          <div class="foating">
            <div class="line" style="text-align: center;">

              <p>
                <h3>
                  <i class="fas fa-truck" id="fa"></i>Free Shiping</h3>
                <h4>Both ways</h4>
                <h5> Learn more
                  <span>&#187;</span>
                  <h5>
              </p>
            </div>
            <div class="line">
              <p>
                <h3>
                  <i class="fas fa-sync" id="fa"></i>Easy Returns </h3>
                <h4> It is Fast! </h4>
                <h5> Learn more
                  <span>&#187;</span>
                  <h5>
              </p>
            </div>
            <div class="line">
              <p>
                <h3>
                  <i class="fas fa-thumbs-up" id="fa"></i>Satisfaction</h3>
                <h4>Guaranteed</h4>
                <h5> Learn more
                  <span>&#187;</span>
                  <h5>
              </p>
            </div>

          </div>
        </div>
      </section>
    </div>
  </section>
  <!-- end of top menu -->

  <!-- start of body -->
  <section class="trending-section">

    <p class="trending-header header-reddish" style="font-size: 40px;">Trending Books</p>

    <div class="book-containers">

      <?php
        $sql = "SELECT * FROM book ORDER BY id DESC LIMIT 15";
        $result = mysqli_query($connect, $sql);
        while ($rows = mysqli_fetch_array($result)) {
            $image = $rows['image'];
            $title = $rows['title'];
            $sbn = $rows['sbn'];
            $author = $rows['author'];
            $binding = $rows['binding'];
            $id = $rows['id'];

            echo "<div id='book-trending'>";
              echo "<a href='app/detail.php?a=$id'><img src='image/$image' alt='book' class='book-thumbnail'></a>";
              echo "<button class='btn btn-butt rounded-button-sm .btn-butt-sm'><i class='fa fa-shopping-cart' aria-hidden='true'></i><span>Add to Cart</span></button></a>";
              echo "<button style='margin-bottom: 0' class='btn btn-butt rounded-button-sm'><i class='fa fa-heart' aria-hidden='true'></i><span>Add to Wishlist</span></button>";
              echo "<a href='app/detail.php?a=$id'><button style='margin-bottom: 0' class='btn btn-butt rounded-button-sm btn-under'><i class='fas fa-info'></i><span>About Book<span></button></a>";
            echo "</div>";
        }
    ?>

        <center>
          <div class="pagination">
            <li>
              <a href="#">&#171;</a>
            </li>
            <?php
       $ls = "SELECT * FROM book ORDER BY id ASC";
       $Lsresult = mysqli_query($connect, $ls);
       $lsrow = mysqli_num_rows($Lsresult);
       $a = $lsrow/10;
       $a = ceil($a);
       for ($i=0; $i < $a ; $i++) {
        ?>

              <li style="margin-top: 100px;">
                <a href="index.php?page=<?php echo $i ;?>" id="page">
                  <?php echo $i; ?>
                </a>
              </li>

              <?php
       }

     ?>
                <li>
                  <a href="#">&#187;</a>
                </li>
          </div>
        </center>
    </div>



  </section>

  <!-- end of body-->

  <!--  start about us page-->

  <div class="aboutus " id="aboutus">
    <!-- <img id="aboutimage" src="image/3.jpg" alt=""  >-->
    <div class="about anim-element">
      <center>
        <p>
          <h1 class="header-blue">ABOUT US</h1>
        </p>
        <div class="p1" style="text-align: justify;">
          <p class="numbers">
            <b>Challenge Enterprises of GHANA </b>
          </p>
          <p id="para5">For the past 50 plus years, Challenge Enterprises of Ghana (CEG) has been the leading name in the distribution
            of Christian literature in the country of Ghana and offers the best in Christian reading.
            <br>
            <br> Challenge distributes over 90% of the Bibles and Christian literature through 18 retail shops across the country
            as well as through a fleet of eight "cinevans" which also function as mobile bookshops in remote villages in
            the 10 regions of Ghana. CEG offers all types and versions of the Bible and the widest variety and choice of
            Biblically balanced literature to the general public and the Christian community in particular.
            <br>
            <br> In addition to books and bookstores, Challenge serves through:
            <div class="lists">
              <ul>
                <li>a prison ministry in eight prisons</li>
                <li>free counseling services</li>
                <li>eight "cinevans" showing gospel films and providing a mobile bookstore
                  <br> in all the regions of Ghana</li>
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

  <div class="locaton-area">
    <div class="header-maps">
      <h1 class="header-reddish-sm">Our Location</h1>
      <a class="btn-active toggle-btn">Toggle Maps</a>
    </div>
    <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9507152381993!2d-0.21041868486156928!3d5.574305335014205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a125704f393%3A0x56b6d8b96b19f4f3!2sChallenge+Bookshop!5e0!3m2!1sen!2sgh!4v1526830655812"
      frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>


  <?php include 'php/template-footer.php'?>

  <script type="text/javascript">
    $(document).ready(function () {

      $("#min").on({
        mouseenter: function () {
          $("#ministiedd").show();
          $("#bookshopdb").hide();

          $("#ministiedd").mouseleave(function () {
            $(this).hide();
          });
        }
      });

      $("#mins").on({
        mouseenter: function () {
          $("#bookshopdb").show();
          $("#ministiedd").hide();

          $("#bookshopdb").mouseleave(function () {
            $(this).hide();
          });
        }
      });


      var maxTextLength = 15;
      var specialDets = document.getElementsByClassName("specialDet");

      for (var i = 0; i < specialDets.length; i++) {

        var specText = specialDets[i].innerHTML;
        var subSpec = specText.substring(0, maxTextLength);

        if (specText.length > maxTextLength) {
          specialDets[i].innerHTML = subSpec;
        }
      }



      var xhr = new XMLHttpRequest();
      xhr.open("post", "json/headers.json", true);

      xhr.send();
      xhr.onreadystatechange = function () {
        if (this.readyState == 4 && this.status == 200) {
          var data = this.responseText;
          data = JSON.parse(data);

          var ministries = data.type.ministries;
          var bookshoplocations = data.type.bookshopLocations;
          var challengeBookshops = ministries[0]["challengeBookshops"];
          var cinemaToday = ministries[0]["cinemaToday"];
          var mobileBookshops = ministries[0]["mobileBookshops"];
          var localFollowUp = ministries[0]["localFollowUp"];
          var prisonMinistry = ministries[0]["prisonMinistry"];
          var prisonChaplain = ministries[0]["prisonChaplain"];
          var youngSearchersLeague = ministries[0]["youngSearchersLeague"];
          var mailBoxClub = ministries[0]["mailBoxClub"];
          var conferences = ministries[0]["conferences"];
          var counselingServices = ministries[0]["counselingServices"];

          $(".close").click(function () {
            $(".popupclass").css('display', 'none');

          });
          ///bookshop Locations

          $("#extra").click(function () {
            $(".popupclass").css('display', 'block');

            xhr = new XMLHttpRequest();
            xhr.open("post", "json/headers.json", true);

            xhr.onprogress = function () {
              $("#popuptitle").html("Loading....");
              $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
            };

            xhr.onload = function () {

              var response = JSON.parse(xhr.responseText);

              $("#pagecontent").html(response.type.bookshopLocations[0].accra.contents);
              $("#popuptitle").html(response.type.bookshopLocations[0].accra.title);
            };

            xhr.send();
          });
          $("#Tema").click(function () {

            $(".popupclass").css('display', 'block');

            xhr = new XMLHttpRequest();
            xhr.open("post", "json/headers.json", true);

            xhr.onprogress = function () {
              $("#popuptitle").html("Loading....");
              $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
            };

            xhr.onload = function () {

              var response = JSON.parse(xhr.responseText);

              $("#pagecontent").html(response.type.bookshopLocations[0].tema.contents);
              $("#popuptitle").html(response.type.bookshopLocations[0].tema.title);
            };

            xhr.send();

          });
          $("#Abetifi").click(function () {
            $(".popupclass").css('display', 'block');

            xhr = new XMLHttpRequest();
            xhr.open("post", "json/headers.json", true);

            xhr.onprogress = function () {
              $("#popuptitle").html("Loading....");
              $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
            };

            xhr.onload = function () {

              var response = JSON.parse(xhr.responseText);

              $("#pagecontent").html(response.type.bookshopLocations[0].abetifi.contents);
              $("#popuptitle").html(response.type.bookshopLocations[0].abetifi.title);
            };

            xhr.send();
          });
          $("#kumasi").click(function () {
            $(".popupclass").css('display', 'block');

            xhr = new XMLHttpRequest();
            xhr.open("post", "json/headers.json", true);

            xhr.onprogress = function () {
              $("#popuptitle").html("Loading....");
              $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
            };

            xhr.onload = function () {

              var response = JSON.parse(xhr.responseText);

              $("#pagecontent").html(response.type.bookshopLocations[0].kumasi.contents);
              $("#popuptitle").html(response.type.bookshopLocations[0].kumasi.title);
            };

            xhr.send();
          });

          $("#sunyani").click(function () {
            $(".popupclass").css('display', 'block');

            xhr = new XMLHttpRequest();
            xhr.open("post", "json/headers.json", true);

            xhr.onprogress = function () {
              $("#popuptitle").html("Loading....");
              $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
            };

            xhr.onload = function () {

              var response = JSON.parse(xhr.responseText);

              $("#pagecontent").html(response.type.bookshopLocations[0].sunyani.contents);
              $("#popuptitle").html(response.type.bookshopLocations[0].sunyani.title);
            };

            xhr.send();

          });
          $("#capeCoast").click(function () {

            $(".popupclass").css('display', 'block');

            xhr = new XMLHttpRequest();
            xhr.open("post", "json/headers.json", true);

            xhr.onprogress = function () {
              $("#popuptitle").html("Loading....");
              $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
            };

            xhr.onload = function () {

              var response = JSON.parse(xhr.responseText);

              $("#pagecontent").html(response.type.bookshopLocations[0].capeCoast.contents);
              $("#popuptitle").html(response.type.bookshopLocations[0].capeCoast.title);
            };

            xhr.send();
          });
          $("#Tamale").click(function () {
            $(".popupclass").css('display', 'block');

            xhr = new XMLHttpRequest();
            xhr.open("post", "json/headers.json", true);

            xhr.onprogress = function () {
              $("#popuptitle").html("Loading....");
              $("#pagecontent").html("<p class='load_waiting'><img src='image/ajax-loader.gif' /></p>");
            };

            xhr.onload = function () {

              var response = JSON.parse(xhr.responseText);

              $("#pagecontent").html(response.type.bookshopLocations[0].tamale.contents);
              $("#popuptitle").html(response.type.bookshopLocations[0].tamale.title);
            };

            xhr.send();

          });


          //ministries
          $("#extras").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(challengeBookshops["title"]);
            $("#pagecontent").html(challengeBookshops['contents']);
            $("#popupimage").css('display', 'block');


          });
          $("#cinematoday").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(cinemaToday["title"]);
            $("#pagecontent").html(cinemaToday['contents']);

          });
          $("#mobilebookshops").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(mobileBookshops["title"]);
            $("#pagecontent").html(mobileBookshops['contents']);

          });
          $("#localfollowup").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(localFollowUp["title"]);
            $("#pagecontent").html(localFollowUp['contents']);

          });
          $("#prisonministry").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(prisonMinistry["title"]);
            $("#pagecontent").html(prisonMinistry['contents']);

          });
          $("#prisonchaplain").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(prisonChaplain["title"]);
            $("#pagecontent").html(prisonChaplain['contents']);

          });
          $("#youngsearchersleague").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(youngSearchersLeague["title"]);
            $("#pagecontent").html(youngSearchersLeague['contents']);

          });
          $("#mailboxclub").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(mailBoxClub["title"]);
            $("#pagecontent").html(mailBoxClub['contents']);

          });
          $("#conferences").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(conferences["title"]);
            $("#pagecontent").html(conferences['contents']);

          });
          $("#counselingservices").click(function () {
            $(".popupclass").css('display', 'block');
            $("#popuptitle").html(counselingServices["title"]);
            $("#pagecontent").html(counselingServices['contents']);

          });
        }
      }

      const imageBrightness = 20;

      const images = ['image/ce1.jpg', 'image/ce2.jpg', 'image/ce3.jpg', 'image/ce4.jpg'];
      let currentImageIndex = 3;

      $(".img-fader").css("filter", `brightness(${imageBrightness}%)`);

      const slider = setInterval(function () {

        if (currentImageIndex >= images.length) {
          currentImageIndex = 0;
        }

        $(".img-fader").fadeOut('1500', function () {
          $(this).fadeIn('slow');
          $(this).attr("src", images[currentImageIndex++]);
          $(this).css("filter", `brightness(${imageBrightness}%)`);
        });

      }, 5000);
    });

    const slideToggler = slideToggle();

    $(".toggle-btn").on('click', function () {

      var currentToggle = slideToggler();

      if (currentToggle === true) {
        $(".maps").slideUp();
      } else {
        $(".maps").slideDown();
      }
    });

    $(window).on('scroll', function() {
      if($(this).scrollTop()) {
          $(".main-nav").addClass("black");
          $(".top-contact-info").slideUp();
          $(".nav-black-hide").addClass("nav-logo").css("padding-top", "28px");
          $(".nav-logo-img").fadeOut();
          $(".nav-black-hide").fadeIn();
      } else {
          $(".black").css("border-bottom", "none");
          $(".main-nav").removeClass("black");
          $(".top-contact-info").slideDown();
          $(".nav-black-hide").removeClass("nav-logo");
          $(".nav-black-hide").fadeOut();
          $(".nav-logo-img").fadeIn();
      }

      if(this.scrollY > 3600) { 
        $(".black").css("border-bottom", "6px solid var(--cyan)");
      } else { 
        $(".black").css("border-bottom", "6px solid var(--redish)"); 
      }
    });

    function slideToggle() {
      var up = false;

      return function () {
        up = !up;
        return up;
      }
    }
  </script>

  <script type="text/javascript" src="js/interactivity.js"></script>
  <script type="text/javascript" src="js/main.js"></script>
  <script type="text/javascript" src="myjs/main.js"></script>

</body>

</html>