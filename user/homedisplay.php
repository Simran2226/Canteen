<?php include 'header.php'; ?>
<?php include 'connection.php'; ?>

<!DOCTYPE html>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/aboutUs.css">

</head>
<body>

<div class="product-box">
        <div class="product-heading">
            <p>Today's Special</p>
        </div>
        
        <?php
            $query = "SELECT * FROM `addproduct`";
            $query_run = mysqli_query($conn,$query);
         ?> <?php
         if(mysqli_num_rows($query_run)>0)
         {
             foreach($query_run as $row)
             {
             ?>


        <div class="outer-box">
            <div class="product-img" > 
            <?php 
            // echo '<img src="upload/"'.$row['image'] width="100px" alt=""> '; 


            // <!-- echo '<img src="data:image;base64,'.base64_encode($row['image']).'" alt="image" style=" height: 180px;">';  -->
            echo '<img src="../upload/'.$row['image'].'" alt="image" style=" height: 180px;">';
            ?>
            
        </div>
            <div class="product-detail">    
                <div class="inner-detail product-name">
                    <div class="product-name"> <p><?php echo $row['itemname']; ?> </p> </div>
                </div>

                <div class="inner-detail last"> 
                    <div class="product-price"> <i class="fa-solid fa-indian-rupee-sign"></i> : <?php echo $row['price'] ;?> </div>
                    <div class="product-counter">
                        <button class="decrement-btn"> - </button>
                        <span class="count">0</span>
                        <button class="increment-btn"> + </button>
                    </div>
                </div>

                <div class="inner-detail">
                        <div class="cart-btn">
                            <button type="submit"><i class="fa-solid fa-cart-shopping"></i>Add to cart</button>
                        </div>
                </div>
            </div>
        </div>
        <?php
            }
        }
        
        ?>
        
</div>
    
</body>
</html>