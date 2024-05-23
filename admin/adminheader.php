
<?php include "connection.php" ?>
<?php session_start(); ?>
<?php 
if(isset($_POST['logout'])){
    session_destroy();
    // header("location: adminLogin.php");
    echo
        "<script> alert('Logout Successfully!'); </script>";
    echo 
        '<script>
        location.replace("../user/home.php");
        </script>';
}
?> 



<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin header</title>
        <link rel="stylesheet" href="../css/adminheader.css">
    </head>
    <body>
        <div class="admin-box">
            <div class="admin-heading">Admin Panel</div>
            <div class="admin-items">
                <div class="a-items"><a href="totalStudents.php">Students</a></div>
                <div class="a-items"><a href="adminAllProduct.php">All Product</a></div>
                <div class="a-items"><a href="adminAddProduct.php">Add Product</a></div>
                <!-- <div class="a-items"><a href="">Recent Order</a></div> -->
                <!-- <div class="a-items"><a href="">Total Sales</a></div> -->
                <form action="" method="POST">
                    <button type="submit" name="logout" onclick="return confirm('Do you want to logout?');">Logout</button>
                </form>   
            </div>
        </div>
    
</body>
</html>