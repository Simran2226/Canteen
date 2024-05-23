<?php include "connection.php"?>
<?php include "adminHeader.php";

//delete student

if(isset($_POST['bin_sname']))
{
    $id = $_POST['bin_id'];
    $sname = $_POST['bin_name'];

    $query = "DELETE FROM `signup` WHERE `id`='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        // unlink("upload/".$image);
        echo "<script>alert('delete successfully')</script>";
        header("location: totalStudents.php");
    }
    else
    {
        echo "<script>alert('delete not successfully')</script>";
        header("location: totaStudents.php");
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Total users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/adminAllProduct.css">
    

</head>
<body>
<span class="move">
            <a href="../admin/addStudents.php">Add Students</a>
        </span>
<div class="box">
    
        <div class="main-container">
        <form action="#.php" method="post" enctype="multiple/form-data">
            <?php
                include "connection.php";
                $query ="SELECT * FROM `signup`";
                $query_run = mysqli_query($conn,$query);
                $num=1;

            ?>

            <table>
                <thead>
                    <tr>
                        <th>S.No.</th>
                        <th>Name</th>
                        <th>Roll No.</th>
                        <th>Password</th>
                        <th>Confirm Password</th>
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
                        <td class="data"> <?php echo $num ;?> </td>
                        <td class="data"> <?php echo $row['sname'] ?> </td>
                        <td class="data"> <?php echo $row['rollno'] ;?> </td>
                        <td class="data"> <?php echo $row['pword'] ;?> </td>
                        <td class="data"> <?php echo $row['confirmpword'] ;?> </td>
                        <td class="data">
                        <form action="#.php" method="post">
                            <input type="hidden" name="bin_id" value="<?php echo $row['id']; ?>">
                            <input type="hidden" name="bin_name" value="<?php  echo $row['sname']; ?>">
                            <button type="submit" name="bin_sname" class="btn clr2" onclick="return confirm('Are you sure want to delete this Student?');">Delete</button>
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