<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Innovation Test | Created By A-Al-Mamun</title>

    <!-- Font Awesome 6v CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Google Font Poppins Link -->
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Custome CSS Link -->
    <link rel="stylesheet" href="./assets/css/style.css">

</head>
<body>
    <!-- Header Section Start -->
    <header>
        <?php 
            include_once("./assets/pages/header.php") 
        ?>
    </header>
    <!-- Header Section End -->
    <!-- Main Section Start -->
    <main>
        <div class="main-menu">
            <a href="#" id="emp">Employees</a>
            <a href="#" id="pro">Products</a>
        </div>
        <div class="emp-table">
            <?php
                include_once ('./assets/pages/db.php');

                $empSql  = "SELECT * FROM emp_tbl JOIN gender_tbl WHERE emp_tbl.egender = gender_tbl.gen_id";
                $empResult = mysqli_query($conn, $empSql) or die("Database Failed");

                if (mysqli_num_rows($empResult) > 0) {
                    
            ?>
            <table>
                <h1>Employees Info</h1>
                <thead>
                    <td>Employee ID</td>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Address</td>
                    <td>DOB</td>
                    <td>Gender</td>
                    <td>Phone</td>
                    <td>Action</td>
                </thead>
                <?php 
                    while ($empRow = mysqli_fetch_assoc($empResult)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $empRow['eid'] ?></td>
                        <td><?php echo $empRow['ename'] ?></td>
                        <td><?php echo $empRow['eemail'] ?></td>
                        <td><?php echo $empRow['eadd'] ?></td>
                        <td><?php echo $empRow['edob'] ?></td>
                        <td><?php echo $empRow['gen_name'] ?></td>
                        <td><?php echo $empRow['ephone'] ?></td>
                        <td>
                            <a href="./assets/pages/eedit.php?empid=<?php echo $empRow['eid']; ?>">Edit</a>
                            <a href="./assets/pages/empDelete.php?empid=<?php echo $empRow['eid']; ?>">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php } ?>
            </table>
            <?php
                }else{
                    echo "Employees has't record";
                } 
                // mysqli_close($conn);
            ?>
        </div>

        <div class="pro-table">
            <?php
                 $proSql = "SELECT * FROM products JOIN product_images WHERE products.p_id = product_images.product_id ";

                 $proResult = mysqli_query($conn, $proSql) or die("Database Failed");

                 if (mysqli_num_rows($proResult) > 0) {
            ?>
            <table>
                <h1>Products Info</h1>
                <thead>
                    <td>Product ID</td>
                    <td>Product Name</td>
                    <td>Details</td>
                    <td>Price</td>
                    <td>Image</td>
                    <td>Action</td>
                </thead>
                <?php 
                    while ($proRow = mysqli_fetch_assoc($proResult)) {
                ?>
                <tbody>
                    <tr>
                        <td><?php echo $proRow['p_id'] ?></td>
                        <td><?php echo $proRow['product_name'] ?></td>
                        <td><?php echo $proRow['details'] ?></td>
                        <td><?php echo $proRow['price'] ?></td>
                        <td>
                            <img src="./assets/images/<?php echo $proRow['image'] ?>">
                        </td>
                        <td>
                            <a href="./assets/pages/pedit.php?pro_id=<?php echo $proRow['product_id']; ?>">Edit</a>
                            <a href="./assets/pages/proDelete.php?pro_id=<?php echo $proRow['product_id']; ?>">Delete</a>
                        </td>
                    </tr>
                </tbody>
                <?php
                    }
                ?>
            </table>
            <?php 
                }else{
                    echo "Products has't record";
                } 
                mysqli_close($conn);
            ?>
        </div>
    </main>
    <!-- Main Section End -->

    <!-- Script Link -->
    <script src="./assets/js/main.js"></script>
</body>
</html>