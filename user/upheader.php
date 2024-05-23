
<?php include "connection.php" ?>
<?php session_start(); ?>
<?php 
if(isset($_POST['logout'])){
    session_destroy();
    // header("location: loginpage.php");
    echo
        "<script> alert('Logout Successfully!!'); </script>";
     echo 
        '<script>
        location.replace("loginPage.php");
        </script>';
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/headFoot.css">
</head>
<body>
    
   
    <!--header-->
    <div class="header-container">
        <div class="header-heading">
            <p><i class="fa-solid fa-utensils"></i>DCJ Canteen</p>
        </div>

        <div class="header-group">
            <div class="header-items"><a href="uphome.php">Home</a></div>
            <div class="header-items"><a href="menu.php">Menu</a></div>
            <div class="header-items" >
                <?php
                    $select_product = mysqli_query($conn,'SELECT * FROM `cart`') or die('query failed');
                    $row_count = mysqli_num_rows($select_product);

                ?>
                <a href="addToCart.php"><i class="fa-solid fa-cart-shopping "></i><span><sup><?php echo $row_count ;?></sup></span></a>
            </div>
            
            
                <form action="" method="POST">
                    <button type="submit" class="logout-btn" name="logout" onclick="return confirm('Do you want to logout?');">Logout</button>
                </form>
            

        </div>
    </div>
    
</body>
</html>