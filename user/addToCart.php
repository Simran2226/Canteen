<?php include 'upheader.php'; ?>
<?php include 'connection.php'; 
//update query 
if(isset($_POST['update_product_quantity']))
{
    $update_value = $_POST['update_quantity'];
    $update_id = $_POST['update_quantity_id'];
    // echo $update_id;
    //query 
    $update_quantity = mysqli_query($conn, "UPDATE `cart` SET quantity =' $update_value' WHERE id= '$update_id'");
    if($update_quantity){
        header('location:addToCart.php');
    }

}

if(isset($_GET['remove']))
{
    $remove_id = $_GET['remove'];
    // echo $remove_id;
    mysqli_query($conn, "DELETE FROM `cart` WHERE id='$remove_id'");
    header ('location:addToCart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>AddToCart</title>
    <link rel="stylesheet" href="../css/addToCart.css">
</head>
<body >
    <div class="color">
        <div class="main-cart-div">
            <div class="cart-box">
                <div class="details">
                    <div class="table">
                        <table>
                            <?php
                            $select_cart_product = mysqli_query($conn,"SELECT * FROM `cart`");
                            $num = 1;
                            $grand_total=0;
                            if(mysqli_num_rows($select_cart_product)>0){
                                echo"
                                <thead>
                                    <th>Serial no.</th>
                                    <th>Product Name</th>
                                    <th>Product Price</th>
                                    <th>Quantity</th>
                                    <th>Total price</th>
                                    <th>Action</th>
                                </thead>
                                <tbody>";
                                while($fetch_card_product=mysqli_fetch_assoc($select_cart_product))
                                {
                                    ?>
                                <tr>
                                    <td><?php echo $num; ?></td>
                                    <td> <?php echo $fetch_card_product['name'];?></td>
                                    <td><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $fetch_card_product['price'];?>/-</td>
                                    <td>
                                        <form action="" method="POST">
                                            <input type="hidden" name="update_quantity_id" value="<?php echo $fetch_card_product['id'];?>">
                                            <input type="number" name="update_quantity" id="" class="value-input"   value="<?php echo $fetch_card_product['quantity']; ?>" max="10" min="1">
                                            <input type="submit" class="update-btn" value="Update" name="update_product_quantity"></input>
                                        </form>
                                    </td>
                                    <td><i class="fa-solid fa-indian-rupee-sign"></i><?php echo $subtotal = ($fetch_card_product['price'] * $fetch_card_product['quantity'] );?>/-</td>
                                    <td><a href="addToCart.php?remove=<?php echo $fetch_card_product['id'] ;?>" onclick="return confirm('Are you sure you want to delete this item');"><i class="fa-solid fa-trash trash-clr"></i></a></td>
                                
                                </tr>
                                    <?php
                                    $grand_total+= ($fetch_card_product['price'] * $fetch_card_product['quantity'] );
                                    $num++;
                                }

                            
                            }
                            else
                            {
                                // echo "no product";
                                echo "<div class='empty-text'>Cart is empty</div>";
                            }
                            ?>
                        
                            </tbody>

                        </table>

                        
                        <div class='table-total'>
                            <p>Total: <span><?php echo $grand_total; ?></span></p>
                        </div>
                        <div class='check-out'>
                            <a href='#.php'>Proceed to checkout</a>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</body>
</html>