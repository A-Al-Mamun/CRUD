<?php
    include_once("db.php");
    
    $pid = $_GET['pro_id'];

    $proSql = "DELETE FROM  product_images  WHERE product_id = {$pid}";

    $proResult = mysqli_query($conn, $proSql) or die("Query Failed");

    header("Location: http://localhost/PHP_Learn/06_CRUD/index.php");

    mysqli_close($conn);
?>