<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Page | Created By A-Al-Mamun</title>

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
            <a href="#" id="emp">Employees</a>
            <a href="#" id="pro">Products</a>
        </div>
        <div class="emp-form">
            <h3>Insert Employee Info: </h3>
            <?php 
                
            ?>
            <form action="saveEmp.php" method="post">
                <label for="#">Name :</label>
                <input type="text" name="ename" id=""><br>
                <label for="#">Email :</label>
                <input type="email" name="eemail" id=""><br>
                <label for="#">Address :</label>
                <input type="text" name="eaddress" id=""><br>
                <label for="#">Date of Birth :</label>
                <input type="date" name="edob" id=""><br><br>
                <label for="#">Gender :</label>
                <select name="egender" id="">
                    <option value="" selected disabled>Select Gender</option>
                    <?php
                        include_once("./db.php");
                        $genderSql = "SELECT * FROM gender_tbl";
                        $genderResult = mysqli_query($conn, $genderSql) or die("Query Failed");

                        while ($genRow = mysqli_fetch_assoc($genderResult)) {
                    ?>
                        <option value="<?php echo $genRow['gen_id']; ?>"><?php echo $genRow['gen_name']; ?></option>
                    
                    <?php } ?>
    
                </select><br><br>
                
                <label for="#">Phone :</label>
                <input type="number" name="ephone" id=""><br>
                <input type="submit" value="Add" name="eadd">
            </form>
        </div>
        <hr>
        <div class="pro-form"> 
            <h3>Insert Product Info: </h3>
            <form action="savePro.php" method="post" enctype="multipart/form-data">
                <!-- <label for="#">Product ID :</label> -->
                <!-- <input type="text" name="pid" id=""><br> -->
                <label for="#">Product Name :</label>
                <input type="text" name="pname" id=""><br>
                <label for="#">Details :</label>
                <input type="text" name="pdetail" id=""><br>
                <label for="#">Price :</label>
                <input type="text" name="pprice" id=""><br>
                <label for="#">Image :</label>
                <input type="file" name="pimage" id=""><br>
                <input type="submit" value="Add" name="padd">
            </form>
        </div>
    </main>
    <!-- Main Section End -->

    <!-- Script Link -->
    <script src="../js/main.js"></script>
</body>
</html>