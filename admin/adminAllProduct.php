<?php include "adminheader.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="../css/adminAllProduct.css">
    <title>Admin home page </title>
</head>
<body>
    <div class="box">
        
        <div class="main-container">
        <form action="code.php" method="post" enctype="multiple/form-data">
            <?php
                include "connection.php";
                $query ="SELECT * FROM `addproduct`";
                $query_run = mysqli_query($conn,$query);
                $num=1;

            ?>

            <table>
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Image</th>
                        <th>Itemname</th>
                        <th>Price</th>
                        <!-- <th>Category</th> -->
                        <th colspan="2">Action</th>
                    </tr>
                </thead>
                <?php
                    if(mysqli_num_rows($query_run)>0)
                    {
                        foreach($query_run as $row)
                        {
                    
                ?>
                     <tr>
                        <!-- <td class="data"> <?php //echo $row['id'] ;?> </td> -->
                        <td class="data"> <?php echo $num ;?> </td>
                        <td class="data"> <img src="<?php  echo "../upload/".$row['image']; ?>" width="100px" alt=""> </td>
                        <td class="data"> <?php echo $row['itemname'] ?> </td>
                        <td class="data"> <?php echo $row['price'] ;?> </td>
                        <td class="data ">
                        <a class="btn clr1" href="edit.php?id=<?php echo $row['id'];?>">edit</a>
                        </td>
                        <td class="data">
                        <form action="code.php" method="post">
                            <input type="hidden" name="delete_id" value="<?php  echo $row['id']; ?>">
                            <input type="hidden" name="del_image" value="<?php  echo $row['image']; ?>">
                            <button type="submit" name="delete_image" class="btn clr2" onclick="return confirm('Are you sure want to delete this product');">Delete</button>
                        </form>

                        </td>


                    </tr>
                    <?php
                    $num++;
                        }
                    }
                    else
                    {
                        ?>
                        <tr>
                            <td>NO Record Available</td>
                        </tr>
                        <?php
                    }   
                    ?>  
                        
            </table>
        </form>
       </div>
    </div>
</body>
</html>