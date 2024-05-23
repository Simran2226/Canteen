<?php include 'upheader.php';
include 'connection.php';

?>
<?php
if(isset($_POST['addtocart']))
{
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_POST['p_image'];
    $p_quantity = 1;

    //select cart data based on condition
    $select_cart = mysqli_query($conn,"SELECT * FROM `cart` WHERE name='$p_name'");
    if(mysqli_num_rows($select_cart)>0)
    {
        echo '<script>alert("product already added to cart")</script>';
    }
    else 
    {
        //insert cart data in cart table
        $insert_product = mysqli_query($conn, "INSERT INTO `cart`(`name`, `price`, `image`, `quantity`) VALUES ('$p_name','$p_price','$p_image','$p_quantity')" ); 
        echo '<script>alert("product added to cart")</script>';

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>menu</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/menu.css">
    <script>

            document.addEventListener("DOMContentLoaded", function() {
            var searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('input', function() {
            var searchText = this.value.toLowerCase();
            var containers = document.querySelectorAll('.find');
        
            containers.forEach(function(container) {
            var content = container.textContent.toLowerCase();
            if (content.includes(searchText))
            {
                container.style.display = 'block';
            } 
            else
            {
                container.style.display = 'none';
            }
        });
    });
});
           
        
    </script>
</head>
<body>
    
    <!--menu-box-->

        <div class="menu-box">
            <div class="heading-box">
                    <div class="logo-name-heading">
                        <img src="../img/restaurant.png" alt="">
                        <p>Our Menu</p>
                    </div>
                    <div class="search-box">
                        <input type="text" id="searchInput" placeholder="Search..." >

                    </div>
            </div>
                <hr class="h">
    
            <!--main box-->

                <div class="menu-main-box"> 

                    <!--All food menu-->
                    <?php
                        $query = "SELECT * FROM `addproduct`";
                        $query_run = mysqli_query($conn,$query);
                    ?>
                    <?php
                    if(mysqli_num_rows($query_run)>0)
                    {
                        foreach($query_run as $row)
                        {
                    ?>

                <form action="#.php" method="POST">
                    <div class="find">
                        <div class="outer-box">
                            <div class="product-img" > 
                                <?php 
                                echo '<img src="../upload/'.$row['image'].'" alt="image" style=" height: 180px; width:235px;">';
                                ?>
                            
                            </div>
                            <div class="product-detail">    
                                <div class="inner-detail product-name">
                                    <div class="product-name"> <p><?php echo $row['itemname']; ?> </p> </div>
                                </div>

                                <div class="inner-detail last"> 
                                    <div class="product-price"> <i class="fa-solid fa-indian-rupee-sign"></i> : <?php echo $row['price'] ;?> </div>
                                    <div class="product-counter">
                                        <input type="hidden" name="p_name" value="<?php echo $row['itemname']; ?>">
                                        <input type="hidden" name="p_price" value="<?php echo $row['price']; ?>">
                                        <input type="hidden" name="p_image" value="<?php echo $row['image']; ?>">
                                        <button type="submit" name="addtocart"><i class="fa-solid fa-cart-shopping"></i></button>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    </form>
                    <?php
                        }
                    }
                        
                    ?>

                </div>
        </div>

</body>
</html>

<?php include 'upfooter.php'; ?>
