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
    <div class="add">
        <div class="add-container product-box" >
            <div class="add-heading">
                <p>ADD PRODUCT</p>
            </div>
            <form action="code.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="add-input">
                    <label for="">Item Name :</label> <br>
                    <input type="text" name="itemname" id="itemname" required>
                </div>
                <div class="add-input">
                    <label for="">Price :</label> <br>
                    <input type="text" name="price" id="price" required>
                </div>
                <div class="add-input">
                    <label for="">Upload Image :</label> <br>
                    <input type="file" class="border" name="image" id="image" required>
                </div>
                <div class="add-input">
                    <button type="submit" name="submit">Submit</button>
                </div>
            
            </form>
        </div>
    </div>

</body>
</html>