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

  <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="css/indexstyle.css">
  <link rel="stylesheet" type="text/css" href="css/UI.css">
  <link rel="stylesheet" type="text/css" href="css/root.css">
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
      color: var(--redish);
      font-family: 'Pacifico', cursive;
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
    <div class="container" style="margin-top: 20vh">
      <nav class="main-nav">
        <div class="nav-logo">
          <img src="image/ecghanalogo.png" alt="" class="nav-logo-img">
          <h1 class="nav-black-hide">CE GHANA</h1>
        </div>
        <div class="blocks">
          <section class="sec1"></section>
          <section class="sec2"></section>
          <section class="sec3"></section>
        </div>
        <div class="menu-itmes">
          <ul>
            <li>
              <a href="#">Home</a>
            </li>
            <li>
              <a href="#">About</a>
            </li>
            <li>
              <a href="#">Ministries</a>
            </li>
            <li>
              <a href="#location-area" class="locator-nav">Locations</a>
            </li>
            <li>
              <a href="#">Library</a>
            </li>
            <li>
              <a href="#">Contact Us</a>
            </li>
            <li>
              <a class="nav-active" href="#">Login</a>
            </li>
          </ul>
        </div>
      </nav>
      <section>
        <div class="text">
          <p>Welcome to Challenge Enterprise
            <br>
            <b id="centerText">Welcome</b>
          </p>
        </div>

        <center style="margin-top: 5vh">
          <div class="seache">
            <div class="seachebar">
              <form class="" action="#" method="post">
                <input type="search" name="seache" placeholder="Seach by ISBN, TItle, or Author" id="seach">
                <button type="submit" name="seache" id="seachsubmit">Find a Book
                  <i class="fas fa-search"></i>
                </button>
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
      <h1 class="header-blue">ABOUT US</h1>
      <div class="p1" style="text-align: justify;">
        <b>Challenge Enterprises of GHANA </b>
        <p id="para5">For the past 50 plus years, Challenge Enterprises of Ghana (CEG) has been the leading name in the distribution of
          Christian literature in the country of Ghana and offers the best in Christian reading.
          <br>
          <br> Challenge distributes over 90% of the Bibles and Christian literature through 18 retail shops across the country
          as well as through a fleet of eight "cinevans" which also function as mobile bookshops in remote villages in the
          10 regions of Ghana. CEG offers all types and versions of the Bible and the widest variety and choice of Biblically
          balanced literature to the general public and the Christian community in particular.
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

    </div>
  </div>

  <div id="location-area">
    <div class="header-maps">
      <div class="locations">
        <h1 class="header-reddish-sm">Our Location</h1>
        <div class="blocks">
          <section class="sec1"></section>
          <section class="sec2"></section>
          <section class="sec3"></section>
        </div>
        <ul class="locations-area-list">
          <li class="location-active" data-location="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9507152381993!2d-0.21041868486156928!3d5.574305335014205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a125704f393%3A0x56b6d8b96b19f4f3!2sChallenge+Bookshop!5e0!3m2!1sen!2sgh!4v1526830655812">
            <a href="#location-area">Accra</a>
          </li>
          <li data-location="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4704.646690061505!2d-0.0013980008343181835!3d5.638352638536481!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf87555febd069%3A0x6fc8c1f2f1b0524!2sMELCOM+PLUS!5e1!3m2!1sen!2sgh!4v1523267907356">
            <a href="#location-area">Tema</a>
          </li>
          <li data-location="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4705.162999649278!2d-0.21041868479699632!3d5.574299995958565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1schallenge+bookshot+tamale!5e1!3m2!1sen!2sgh!4v1523277920632">
            <a href="#location-area">Tamale</a>
          </li>
          <li data-location="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d18781.285334133514!2d-1.6353621063833776!3d6.690840500689334!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sKumasi+Main+shop+adum!5e1!3m2!1sen!2sgh!4v1523277347004">
            <a href="#location-area">Kumasi</a>
          </li>
          <li data-location="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4705.162999649278!2d-0.21041868479699632!3d5.574299995958565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1schallenge+bookshot+tamale!5e1!3m2!1sen!2sgh!4v1523277920632">
            <a href="#location-area">Sunyani</a>
          </li>
          <li data-location="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4708.748290079033!2d-1.2438046847987423!3d5.107475996293235!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfddfe51c55742e9%3A0x5b95f64dd8981554!2sChallenge+Book+Shop!5e1!3m2!1sen!2sgh!4v1523277807362">
            <a href="#location-area">Cape Coast</a>
          </li>
          <li data-location="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d4705.162999649278!2d-0.21041868479699632!3d5.574299995958565!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1schallenge+bookshop+Abefiti!5e1!3m2!1sen!2sgh!4v1523277688262">
            <a href="#location-area">Abefiti</a>
          </li>
        </ul>
      </div>
      <div class="map-buttons">
        <a class="btn-active toggle-btn">Toggle Maps</a>
      </div>
      <div class="clear-fix"></div>
    </div>
    <div class="clear-fix"></div>
    <iframe class="maps" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3970.9507152381993!2d-0.21041868486156928!3d5.574305335014205!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdf9a125704f393%3A0x56b6d8b96b19f4f3!2sChallenge+Bookshop!5e0!3m2!1sen!2sgh!4v1526830655812"
      frameborder="0" style="border:0" allowfullscreen></iframe>
  </div>


  <?php include 'php/template-footer.php'?>

      <section>
        <span id="icon-con"> </span>
        <ul class="icon">
            <li>
                <a href="#">
                    <img src="icon/Facebook.png" alt="" id="icon">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="icon/twitter-icon.png" alt="" id="icon">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="icon/Pinterest.png" alt="" id="icon">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="icon/instagram.png" alt="" id="icon">
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="icon/gmail-icon.png" alt="" id="icon">
                </a>
            </li>
        </ul>
</section>

  <script type="text/javascript" src="scripts/interactivity.js"></script>
  <script type="text/javascript" src="scripts/UI.js"></script>
  <script type="text/javascript" src="scripts/xhrs.js"></script>

</body>

</html>