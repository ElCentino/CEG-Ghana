<div>

 <script type="text/javascript" src="js/jquery-3.3.1.js"></script>

    <style>

        figure header {
            color: var(--ash);
            font-size: 18px;
            font-family: 'Poppins', sans-serif;
            padding: 32px 30px;
            border-bottom: 3px var(--cyan) solid;
        }

        figure:last-child header {
            border-bottom: none;
        }

        figure figcaption {      
            padding: 50px;
            color: white;
            text-align: justify;
            background: #607D8B;
        }

    </style>

    <script>

        $("document").ready(function() {

             $("figure figcaption").hide();

             $("figure").click(function() {

                 $("figure figcaption").slideUp();
                 
                 $(this).children("figcaption").slideToggle();
             });
        });

    </script>

    <div class="faq">
        <h1 class="sm-link" style="font-size: 50px;">FAQ</h1>

        <h3 class="sm-link" style="font-size: 30px;">Location</h3>

        <figure>
            <header>Where are we located at ?</header>
            <figcaption>
                <p>We have offices all over Ghana, our head office is at Accra located at Opposite ATTC, Royalt Castle Road, P. O. Box 5723</p>
            </figcaption>
        </figure>

        <figure>
            <header>Where are we located at ?</header>
            <figcaption>
                <p>We have offices all over Ghana, our head office is at Accra located at Opposite ATTC, Royalt Castle Road, P. O. Box 5723</p>
            </figcaption>
        </figure>

        <figure>
            <header>Where are we located at ?</header>
            <figcaption>
                <p>We have offices all over Ghana, our head office is at Accra located at Opposite ATTC, Royalt Castle Road, P. O. Box 5723</p>
            </figcaption>
        </figure>

        <figure>
            <header>Where are we located at ?</header>
            <figcaption>
                <p>We have offices all over Ghana, our head office is at Accra located at Opposite ATTC, Royalt Castle Road, P. O. Box 5723</p>
            </figcaption>
        </figure>
    </div>
</div>