<?php
include '../app/db.php';
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
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Store</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/details.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Raleway|Roboto+Condensed|Ubuntu" rel="stylesheet">
</head>

<body>

    <div class="top">
        <nav class="top-nav">
            <ul>
                <li>
                    <a href="#">GHC</a>
                </li>
                <li>|
                    <a href="#">
                        <i class="fas fa-lock" style="margin:0px 5px;"></i>My Account</a> |</li>
                <li>
                    <a href="#">Login</a>
                </li>
            </ul>
        </nav>
    </div>

    <div class="search-area">
        <p class="header-mid">Search for Books </p>
        <input type="text" name="search" placeholder="Books....." />
        <input class="rounded-button-sm" type="submit" role="button" value="Search" />
    </div>

    <!-- Body Details -->
    <section>
        <div class="body-details move-down-sm">
            <div class="detail-container">
                <div class="preview">
                    <div class="detail-display">
                        <div class="book-display-view">
                            <img class="book-display" src="<?php echo "../image/".$image; ?>" />
                            <div class="book-display-info">
                                <section>

                                </section>
                            </div>
                        </div>

                        <a href="#book-ref"><button type="submit" class="btn-butt rounded-button-sm" style="margin-top: 70px">
                            <i class="far fa-hdd" style="float: left; margin-left: 20px"></i>More Details</button></a>
                    </div>
                </div>
                <div class="book-details">
                    <article>
                        <header class="book-header">
                            <h1 id="book-title"><?php echo "$title"; ?></h1>
                            <span id="book-author"><?php echo "$author"; ?></span>
                            <span id="book-batch" class="badges">New Release!</span>
                        </header>
                        <figure class="info-figure">
                            <p><?php echo nl2br($description) ?></p>
                        </figure>

                        <a href="checkout.php?c=<?php echo $id ?>"><button type="submit" class="btn-butt rounded-button-sm buy-button" style="margin-top: 70px">
                            <i class="fas fa-shopping-cart" style="float: left; margin-left: 20px"></i>Buy Now</button></a>

                        <button type="submit" class="btn-butt rounded-button-sm cart-button" style="margin-top: 70px">
                            <i class="fas fa-shopping-cart" style="float: left; margin-left: 20px"></i>Add to Cart</button>
                    </article>
                </div>
                <div class="clear-fix"></div>
            </div>
        </div>
        <div class="clear-fix"></div>

        <div id="book-ref" class="book-info about">
            <div class="detail-container about-books">
                <div class="preview about-preview">
                    <div class="detail-display about-display">
                        <h1 class="details-header">Book Details</h1>
                        <table class="details-table">
                            <tr>
                                <td>ISBN 13</td>
                                <td><?php echo "$sbn"; ?></td>
                            </tr>
                            <tr>
                                <td>Paperback</td>
                                <td><?php echo "$binding"; ?></td>
                            </tr>
                            <tr>
                                <td>Price</td>
                                <td><strong>GHC<strong> <?php echo "$price"; ?></td>
                            </tr>
                        </table>
                    </div>
                </div>

                <div class="book-details about-details">
                    <div class="full-details">
                        <h1 class="details-header">Book Description</h1>
                        <p>
                            <?php echo nl2br($description) ?>
                        </p>
                    </div>
                </div>
            </div>
            <div class="clear-fix"></div>
        </div>

        <div class="clear-fix"></div>

        <div class="comments-section">
            <div class="book-info comments">
                <div class="detail-container comments-message">
                    <div class="preview comments-preview">
                        <div class="detail-display comments-display">
                            <h1 class="details-header comments-header">Leave a comment</h1>
                            <p class="comments-text">
                                Leave a comment on this book
                            </p>

                            <h3 class="comments-header-icons">Connect with the author on </h3>
                            <ul class="comments-icon">
                                <li>
                                    <a href="#">
                                        <img src="../icon/Facebook.png" alt="" id="comments-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../icon/twitter-icon.png" alt="" id="comments-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../icon/Pinterest.png" alt="" id="comments-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../icon/instagram.png" alt="" id="comments-icon">
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <img src="../icon/gmail-icon.png" alt="" id="comments-icon">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="book-details comments-details">
                        <div class="comments-details">
                            <form method="GET" action="javascript::void(0)" name="commentsForm" class="comments-form">
                                <table class="comments-table">
                                    <tr>
                                        <td class="comment-table-header">Name</td>
                                        <td class="comments-input">
                                            <input type="text" class="input-default" name="name" placeholder="Optional" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="comment-table-header">Comment</td>
                                        <td class="comments-input">
                                            <textarea id="comment-box" type="text" class="input-default" name="comment" placeholder="Comment...."></textarea>
                                            <button type="submit" class="btn-butt rounded-button-sm" style="margin-top: 70px">Comment</button>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>

                                        </td>
                                    </tr>
                                </table>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div class="clear-fix"></div>
        </div>

        <div class="clear-fix"></div>
    </section>

    <section class="recommended-section"> 
        <h1 class="details-header">Recommended For You</h1>
        
        <div class="rec-img-details">
            <ul>
            <?php

                $sql = "SELECT * FROM book ORDER BY id DESC LIMIT 8";
                $result = mysqli_query($connect, $sql);

                while ($rows = mysqli_fetch_array($result)) {
                    $image2 = $rows['image'];
                    $id = $rows['id'];
                    
                    echo "<li><a href='detail.php?a=$id'><img src='../image/$image2'class='rec-img'/></a></li>";

                }
                ?>
            </ul>
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
                <input class="AO-input input-default" type="text" placeholder="Email" /> <button type="submit" class="btn-butt rounded-button-sm AO" style="margin-top: 70px">Submit</button>
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

    <script src="../details-interactivity.js" type="text/javascript"></script>
    <script src="../js/jquery-3.3.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/libraries/p5.js"></script>
    <script type="text/javascript" src="../js/libraries/p5.dom.js"></script>
    <script type="text/javascript" src="../js/processor.js"></script>
</body>

</html>