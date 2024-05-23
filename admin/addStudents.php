<?php include "connection.php"?>
<?php include "adminHeader.php"; 

// add students
if(isset($_POST['submit']))
{
    $sname = $_POST["sname"];
    $rollno = $_POST["rollno"];
    $pword = $_POST["pword"];
    $confirmpword = $_POST["confirmpword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM signup WHERE rollno = '$rollno'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> alert('Rollno. has already taken'); </script>";
    } else {
        if ($pword === $confirmpword) {
            $add_query = "INSERT INTO `signup` VALUES('','$sname','$rollno','$pword','$confirmpword')";
            mysqli_query($conn,$add_query);
            echo
            "<script> alert('Student Create Successfully'); </script>";
            // echo 
            // '<script>
            // location.replace("../admin/totalStudents.php");
            // </script>';
            header("location: totalStudents.php");

            
        } else {
            echo
            "<script> alert('Password not match'); </script>";
        }
        
    }
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Users</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="../css/adminProduct.css">


</head>
<body>
    <span class="move">
        <a href="totalStudents.php">Exit</a>
    </span>
<div class="add">
        <div class="add-container update-box" >
            <div class="add-heading">
                <p>ADD USER</p>
            </div>
            <form name="email"action="#.php" method="post" enctype="multipart/form-data" autocomplete="off">
                <div class="add-input">
                    <label for="">Student name :</label> <br>
                    <input type="text" name="sname"  required>
                </div>
                <div class="add-input">
                    <label for="">Roll no.</label> <br>
                    <input type="text" name="rollno"  required>
                </div>
                <div class="add-input">
                    <label for="">Password</label> <br>
                    <input type="password"  name="pword"  required>
                </div>
                <div class="add-input">
                    <label for=""> Confirm Password</label> <br>
                    <input type="password"  name="confirmpword"  required>
                </div>
                <div class="add-input">
                    <button type="submit" name="submit">Create Account</button>
                </div>
            
            </form>
        </div>
    </div>
</body>
</html>