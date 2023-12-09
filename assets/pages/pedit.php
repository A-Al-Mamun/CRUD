<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Product Edit Page | Created By A-Al-Mamun</title>

    <!-- Font Awesome 6v CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Font Poppins Link -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Custome CSS Link -->
    <link rel="stylesheet" href="../css/style.css">

</head>
<body>
    <!-- Header Section Start -->
    <header>
        <?php include_once("header.php") ?>
    </header>
    <!-- Header Section End -->
    <!-- Main Section Start -->
    <main>
        <div class="main-menu">
            <a href="#" id="pro">Products</a>
        </div>
        <div class="pro-edit-form">
            <h3>Product Edit Info: </h3>
            <?php 
                //Db Connection
               include_once("db.php"); 

               $pid = $_GET['pro_id'];
               $proSql = "SELECT * FROM products WHERE p_id = {$pid}";
            //    $proSql = "SELECT * FROM products JOIN product_images WHERE (products.p_id = {$pid}) & (product_images.product_id = {$pid})";
               $proResult = mysqli_query($conn, $proSql) or die("Query Failed");

               if (mysqli_num_rows($proResult) > 0) {
                    while ($proRow = mysqli_fetch_assoc($proResult)) {
            ?>
            <form action="editPro.php" method="post" enctype="multipart/form-data">
               
                <input type="hidden" name="pid" value="<?php echo $proRow['p_id'] ?>"><br>
                <label for="#">Product Name :</label>
                <input type="text" name="pname" value="<?php echo $proRow['product_name'] ?>"><br>
                <label for="#">Details :</label>
                <input type="text" name="pdetail" value="<?php echo $proRow['details'] ?>"><br>
                <label for="#">Price :</label>
                <input type="text" name="pprice" value="<?php echo $proRow['price'] ?>"><br>
                <?php

                    // if (isset($_FILES['pimage'])) {
    
                        // $filename = $_FILES["pimage"]["name"];
                        // $tempname = $_FILES["pimage"]["tmp_name"];
                        // $folder = "../images/" . $filename; 

                        $imgSql = "SELECT * FROM product_images WHERE product_id = {$pid}";
                        $imgResult = mysqli_query($conn, $imgSql) or die("Query Failed");
                        if (mysqli_num_rows($imgResult) > 0) {
                            while ($imgRow = mysqli_fetch_assoc($imgResult)) {
                        
                ?>
                <label for="#">Image :</label>
                <!-- <img src="./assets/images/<php echo $proRow[$filename] ?>"> -->
                <input type="file" name="pimage" value="<?php echo $imgRow['image']; ?>"><br>
                <?php
                            }
                    }
                ?>
                <input type="submit" value="Add" name="padd">
            </form>
            <?php
                    }
               }
            ?>
        </div>
    </main>
    <!-- Main Section End -->

    <!-- Script Link -->
    <script src="../js/main.js"></script>
</body>
</html>