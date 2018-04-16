<?php include "../php/header.php" ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
  <section>
    <div class="cart">
      <p style="margin-top:100px;">  <?php if (isset($_COOKIE[$id])) {
           echo   $_COOKIE[$id];
        //   echo  $_COOKIE[$cartid];
        } ?></p>
       <table>

       </table>
    </div>
  </section>
  </body>
</html>
