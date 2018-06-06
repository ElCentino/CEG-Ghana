
<div>
<style>
            .container input[type=text], textarea {
                width: 100%;
                padding: 12px; 
                border: 1px solid #ccc; 
                border-radius: 4px; 
                box-sizing: border-box;
                margin-top: 6px; 
                margin-bottom: 16px; 
                resize: vertical 
            }

            .container input[type=submit] {
                background-color: var(--cyan);
                font-family: pacifico, cursive;
                color: black;
                padding: 12px 20px;
                border: none;
                border-radius: 4px;
                cursor: pointer;
            }


            .container input[type=submit]:hover {
                background-color: var(--redish);
            }


            .container {
                border-radius: 5px;
                padding: 20px;
            }
        </style>

        <h1 class="sm-link" style="font-size: 50px;">Contact Us</h1>

            <div class="container">
                <form method="POST" action="action_page.php">

                    <label for="fname">First Name</label>
                    <input type="text" id="fname" name="firstname" placeholder="Your name..">

                    <label for="lname">Last Name</label>
                    <input type="text" id="lname" name="lastname" placeholder="Your last name..">

                    <label for="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="Your Email..">

                    <label for="subject">Subject</label>
                    <textarea id="subject" name="subject" placeholder="Write something.." style="height:200px"></textarea>

                    <input type="submit" value="Submit">

                </form>
            </div>
</div>