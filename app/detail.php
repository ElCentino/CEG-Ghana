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
    <title>Store - CE Ghana</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../css/details.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.10/css/all.css" integrity="sha384-+d0P83n9kaQMCwj8F4RJB66tzIwOKmrdb46+porD/OvrJ+37WqIM7UoBtwHO6Nlg"
        crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans|Raleway|Roboto+Condensed|Ubuntu" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">

</head>

<body>

    <?php include '../template-header.php' ?>

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

                            <h3 class="comments-header-icons">Share on social media</h3>
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
                                            <input type="text" class="input-default" name="name" placeholder="Name [Optional]" />
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="comment-table-header">Comment</td>
                                        <td class="comments-input">
                                            <textarea id="comment-box" type="text" class="input-default" name="comment" placeholder="Comment...."></textarea>
                                            <button type="submit" class="btn-butt rounded-button-sm comments-submit" style="margin-top: 40px">Comment</button>
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

                $sql = "SELECT * FROM book ORDER BY id DESC LIMIT 4";
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
        
    <?php include '../template-footer.php' ?>
    </section>

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

    <script src="../scripts/details-interactivity.js" type="text/javascript"></script>
    <script src="../js/jquery-3.3.1.js" type="text/javascript"></script>
    <script type="text/javascript" src="../js/libraries/p5.js"></script>
    <script type="text/javascript" src="../js/libraries/p5.dom.js"></script>
    <script type="text/javascript" src="../js/processor.js"></script>
    <script src="../scripts/bundle.js" type="text/javascript"></script>
</body>

</html>