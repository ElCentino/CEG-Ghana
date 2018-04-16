<?php
// include database connection
    require 'db.php';

// checking if data exist

    if (isset($_POST['id'])) {$id = $_POST['id'];}
    if (isset($_POST['image'])) {$image = $_POST['image'];}
    if (isset($_POST['title'])) {$title = $_POST['title'];}
    if (isset($_POST['price'])) {$price = $_POST['price'];}

// create a random orderid
//$cartitem = array('id' => $id, 'image' => $image, 'title'=> $title, 'price'=> $price);
$cartid = rand(0, 1000000);
if(isset($id)){
   setcookie( $cartid, $id, time() + (86400 * 5), "/" , 'localhost/project1/CEG-ghana');
  // insert data into database
}
   echo "1";

 ?>
