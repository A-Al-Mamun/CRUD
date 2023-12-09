<?php
    include_once("db.php");
    
    $eid = $_POST["eid"];
    $ename = $_POST["ename"];
    $eemail = $_POST["eemail"];
    $eaddress = $_POST["eaddress"];
    $edob = $_POST["edob"];
    $egender = $_POST["egender"];
    $ephone = $_POST["ephone"];

    $empSql = "UPDATE emp_tbl SET ename = '{$ename}', eemail = '{$eemail}', eadd = '{$eaddress}', edob = '{$edob}', egender = '{$egender}', ephone = '{$ephone}' WHERE eid = {$eid}";

    $empResult = mysqli_query($conn, $empSql) or die("Query Failed");

    header("Location: http://localhost/PHP_Learn/06_CRUD/index.php");

    mysqli_close($conn);
?>