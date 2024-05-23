<?php include "header.php"; ?>
<?php include "connection.php"; ?>
<?php session_start();?>
<?php
if (isset($_POST['submit']))
{
    $rollno = $_POST['rollno'];
    $pword = $_POST['pword'];
    // $confirmpword = $_POST['confirmpword'];
    $result = mysqli_query($conn, "SELECT * FROM signup WHERE rollno = '$rollno'");
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) > 0) {
        if ($pword === $row['pword']) {
            $_SESSION["login"] = true;
            $_SESSION["id"] = $row["id"];
            echo
            "<script> alert('login Successful'); </script>";
            echo 
            '<script>
            location.replace("uphome.php");
            </script>';

        } else {
            echo "<script> alert('wrong password'); </script>";
        }

    } 
    else {
         echo"<script> alert('student not registered'); </script>";

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="../css/loginPage.css">
</head>
<body>

    
    <div id="container" class="login-page-height">
        <div id="container-head">
            <h1>Login</h1>
        </div>
        <form action="" action="" method="POST" autocomplete="off">
            <div id="input-group">
                <div class="input-items">
                    <input type="text" name="rollno" placeholder="Roll no." required>
                    <input type="password" name="pword" placeholder="Password" required>
                    <!-- <input type="password" name="confirmpword" placeholder="Confirm Password" required> -->
                    <button type="submit" name="submit"><p class="btn-text">Login</p></button>
                    
                </div>
            </div>
        </form>
        <!-- <div id="container-end">
            <p>Don't have an account? <a href="#.php">Sign Up</a> </p>
        </div> -->
    </div>
</body>
</html>