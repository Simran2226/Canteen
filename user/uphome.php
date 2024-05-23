<?php include 'upheader.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>home page</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/home.css">
    <link rel="stylesheet" href="../css/aboutUs.css">
</head>
<body>

   
    <!--image-->

    <div class="img-container">
        <div class="overlay-text">
            <h1>"Fuel your workday with delicious bites and inspiring conversations."</h1>
        </div>
    </div>

    <!--Today special-->
    <!-- <div class="product-box">
        <div class="product-heading">
            <p>Today's Special</p>
        </div>
        
        <?php
            $query = "SELECT * FROM `addproduct`";
            $query_run = mysqli_query($conn,$query);

            // while($row = mysqli_fetch_array($query_run))
            // {
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
            echo '<img src="upload/'.$row['image'].'" alt="image" style=" height: 180px;">';
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
        
    </div> -->
    

    
<!--About Us-->

<div class="aboutUs-container">
    <div class="aboutUs-container-img">
        <div class="aboutUs-img">
            <div class="slide"><img src="../img/DCJspecialBurger.jpg" alt="Image 4"></div>
            <div class="slide"><img src="../img/blueMojito.jpg" alt="Image 3"></div>
            <div class="slide"><img src="../img/springRoll.jpg" alt="Image 2"></div>
            <div class="slide"><img src="../img/noodles.jpg" alt="Image 1"></div>
        </div>
      </div>

    <div class="aboutUs-text">
        <div class="aboutUs-link"><a href="#">About Us</a></div>
        <div class="aboutUs-heading">
            <p>
                Delivering best <br>
                ingredients for our trusty <br>
                food lovers
            </p>     
        </div>
        <div class="aboutUs-content">
            <p>
                The DCJ canteen has yummy food! We make sandwiches, salads, and snacks that taste really good. We use fresh ingredients, so everything is delicious and healthy. Whether you're hungry for something light or craving a treat, the DCJ canteen has lots of options to choose from. It's the perfect place to grab a bite with friends between classes or when you need a break from studying.
            </p>
        </div>
    </div>
</div>

<!--special event offer-->
<div class="special-event">
    <div class="event-heading">
        <p>Special Offers</p>
    </div>
    <div class="offer-event">
        <div class="events">
            <img src="../img/birthday.jpg" alt="" srcset="">
            <div class="text"> <p>Bithday party</p></div>
        </div>
        <div class="events">
            <img src="../img/christmas.jpg" alt="" srcset="">
            <div class="text"> <p>Christmas</p></div>
        </div>
        <div class="events">
            <img src="../img/halloween.jpg" alt="" srcset="">
            <div class="text"> <p>Halloween</p></div>
        </div>
        <div class="events">
            <img src="../img/youth.jpg" alt="" srcset="">
            <div class="text"> <p>Youth day</p></div>
        </div>
    </div>
</div>


</body>
</html>
<?php include 'upfooter.php'; ?>
