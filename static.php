<html>
    <head>

    <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/solid.js" integrity="sha384-+Ga2s7YBbhOD6nie0DzrZpJes+b2K1xkpKxTFFcx59QmVPaSA8c7pycsNaFwUK6l"
    crossorigin="anonymous"></script>

  <script defer src="https://use.fontawesome.com/releases/v5.0.8/js/fontawesome.js" integrity="sha384-7ox8Q2yzO/uWircfojVuCQOZl+ZZBg2D2J5nkpLqzH1HY0C1dHlTKIbpRz/LG23c"
    crossorigin="anonymous"></script>

        <?php 

            if(isset($_GET['title'])) {

                $title = ucfirst($_GET['title']);


              ?>      
               <title><?php echo $title ?> - CE Ghana</title>
        
        <link rel="stylesheet" type="text/css" href="css/details.css" />

        <style>

            * {
                box-sizing: border-box;
            }

            .help-container {
                width: 100%;
                padding: 100px;
            }

            @media (max-width: 768px) {

                .help-container {
                    padding: 0px;
                    margin-top: 40px;
                }
            }

            

        </style>

          <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
            <link href="https://fonts.googleapis.com/css?family=Pacifico" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Bitter" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">


    </head>

    <body> 

        <?php include 'template-header.php' ?>

        <div class="help-container">

            <?php

                $page = $_GET['page'];

                switch($page) {

                    case "contact" : 
                        include 'app/contact.php';
                        break;
                    case "help" :
                        include 'app/help.php';
                        break;
                    case "rental":
                        include 'app/rental.php';
                        break;
                }
            ?>
            
        </div>

        <?php
            }
        ?>

        <?php include 'template-footer.php' ?>
    </body>

</html>