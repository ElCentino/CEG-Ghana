<?php include 'db.php' ?>

<?php 

    if(isset($_POST['search']) && isset($_POST['length'])) {

        $search_text = $_POST['search'];
        $limit = $_POST['length'];
    
        $query = "SELECT id, title, image, binding, author, Price FROM book WHERE title LIKE '%$search_text%' OR author LIKE '%$search_text%' LIMIT $limit";
    
        $result = mysqli_query($connect, $query) or die('error occured ' .mysql_error());
    
        $rows = array();
    
        while($results = mysqli_fetch_array($result)) {
    
            $rows[] = $results;
        }
    
        echo json_encode($rows);
    }

    mysqli_close($connect);
?>