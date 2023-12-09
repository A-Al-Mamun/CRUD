<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Edit Page | Created By A-Al-Mamun</title>

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
        </div>
        <div class="emp-edit-form">
            <h3>Editing Employee Info: </h3>
            <?php 
                //Db Connection
               include_once("./db.php"); 

               $eid = $_GET['empid'];
               $empSql = "SELECT * FROM emp_tbl WHERE eid = {$eid}";
               $empResult = mysqli_query($conn, $empSql) or die("Query Failed");

               if (mysqli_num_rows($empResult) > 0) {
                    while ($empRow = mysqli_fetch_assoc($empResult)) {
            ?>
            <form action="editEmp.php" method="post">
                <input type="hidden" name="eid" value="<?php echo $empRow['eid'] ?>"><br>
                <label for="#">Name :</label>
                <input type="text" name="ename" value="<?php echo $empRow['ename'] ?>"><br>
                <label for="#">Email :</label>
                <input type="email" name="eemail" value="<?php echo $empRow['eemail'] ?>"><br>
                <label for="#">Address :</label>
                <input type="text" name="eaddress" value="<?php echo $empRow['eadd'] ?>"><br>
                <label for="#">Date of Birth :</label>
                <input type="date" name="edob" value="<?php echo $empRow['edob'] ?>"><br><br>
                <label for="#">Gender :</label>
                <?php
                    $genderSql = "SELECT * FROM gender_tbl";
                    $genderResult = mysqli_query($conn, $genderSql) or die("Query Failed");

                    if (mysqli_num_rows($genderResult) > 0) {
                        echo '<select name="egender">';
                            while ($genRow = mysqli_fetch_assoc($genderResult)) {
                                if($empRow['egender'] == $genRow['gen_id']){
                                    $select = 'selected';
                                } else {
                                    $select = '';
                                }
                                echo "<option {$select} value='{$genRow['gen_id']}'>{$genRow['gen_name']}</option>";
                            }
                        echo '</select><br><br>';
                    }
                    
                ?>
                <!-- <select name="egender" id=""> -->
                    <!-- <option value=""><php echo $empRow['egender'] ?></option> -->
                    <!-- <option value="">Female</option> -->
                </select><br><br>
                <label for="#">Phone :</label>
                <input type="number" name="ephone" value="<?php echo $empRow['ephone'] ?>"><br>
                <input type="submit" value="Add" name="eadd">
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