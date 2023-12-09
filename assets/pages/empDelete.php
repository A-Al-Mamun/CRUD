<?php
    include_once("db.php");

    $eid = $_GET['empid'];

    $empSql = "DELETE FROM emp_tbl WHERE eid = {$eid}";

    $empResult = mysqli_query($conn, $empSql) or die("Query Failed");

    header("Location: http://localhost/PHP_Learn/06_CRUD/index.php");

    mysqli_close($conn);
?>