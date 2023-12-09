<?php
    include_once("db.php");
    
    $ename = $_POST["ename"];
    $eemail = $_POST["eemail"];
    $eaddress = $_POST["eaddress"];
    $edob = $_POST["edob"];
    $egender = $_POST["egender"];
    $ephone = $_POST["ephone"];

    $empSql = "INSERT INTO emp_tbl(ename,eemail,eadd,edob,egender,ephone) VALUES('{$ename}','{$eemail}','{$eaddress}','{$edob}','{$egender}','{$ephone}')";

    $empResult = mysqli_query($conn, $empSql) or die("Query Failed");

    header("Location: http://localhost/PHP_Learn/06_CRUD/index.php");

    mysqli_close($conn);
?>