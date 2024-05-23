<?php 
include "adminheader.php" ; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add New Product</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/adminProduct.css">
</head>
<body>
        <span class="move">
            <a href="adminAllProduct.php">Exit</a>
        </span>
    <div class="add">
       

        <div class="add-container update-box">
            <div class="add-heading">
                <p>UPDATE PRODUCT</p>
            </div>
            <?php
                include "connection.php";

                $id= $_GET['id'];
                $query = "SELECT * FROM `addproduct` WHERE id='$id'";
                $query_run = mysqli_query($conn,$query);

                if(mysqli_num_rows($query_run)>0)
                {
                    foreach($query_run as $row)
                    {
            ?>
            <form action="code.php" method="post" enctype="multipart/form-data" autocomplete="off">
               
                <div class="add-input">
                    <input type="hidden" name="stud_id" value="<?php echo $row['id']; ?>">
                </div>
                <div class="add-input">
                    <label for="">Item Name :</label> <br>
                    <input type="text" name="itemname" value="<?php echo $row['itemname']; ?>"><br>
                </div>
                <div class="add-input">
                    <label for="">Price :</label> <br>
                    <input type="text" name="price" value="<?php echo $row['price']; ?>" ><br>

                </div>
                <div class="add-input">
                    <label for="">Upload Image :</label> <br>
                    <input type="file" class="border" name="image">
                    <input type="hidden" name="image_old" value="<?php echo $row['image']; ?>">
                    <img src="<?php echo "../upload/".$row['image'];?>" width="90px"alt="" class="edit-img">
                </div>
                <div class="add-input">
                    <button type="submit" name="update_image">Update</button>
                </div>
            
            </form>
            <?php
                    }
                }
                else
                {
                    echo " No Record";
                }
            ?>
        </div>
    </div>

</body>
</html>