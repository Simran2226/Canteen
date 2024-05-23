<?php include "header.php"; ?>
<?php include "connection.php";?>
<?php
if(isset($_POST['submit']))
{
    $sname = $_POST["sname"];
    $rollno = $_POST["rollno"];
    $pword = $_POST["pword"];
    $confirmpword = $_POST["confirmpword"];
    $duplicate = mysqli_query($conn, "SELECT * FROM signup WHERE sname = '$sname' OR rollno = '$rollno'");
    if (mysqli_num_rows($duplicate) > 0) {
        echo
        "<script> alert('Rollno. has already taken'); </script>";
    } else {
        if ($pword === $confirmpword) {
            $query = "INSERT INTO signup VALUES('','$sname','$rollno','$pword','$confirmpword')";
            mysqli_query($conn,$query);
            echo
            "<script> alert('Signup Successful'); </script>";
            echo 
            '<script>
            location.replace("loginPage.php");
            </script>';

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
    <title>Signup</title>
    <link rel="stylesheet" href="../css/loginPage.css">
    <!-- <link rel="stylesheet" href="headerFooter.css"> -->

</head>
<body>
    <div id="container" class="page-height">
        <div id="container-head">
            <h1>Create Account</h1>
        </div>
        <form name="email" action="" method="POST" autocomplete="off">
            <div id="input-group">
                <div class="input-items">
                    <input type="text" placeholder="Student name" name="sname" required>
                    <input type="text" placeholder="Roll no." name="rollno" required>
                    <input type="password" placeholder="Password" name="pword" required>
                    <input type="password" placeholder=" Confirm Password" name="confirmpword" required>
                    <button type="submit" name="submit" ><p class="btn-text">Create account</p></button>
                </div>
            </div>
        </form>
        <div id="container-end">
            <p>Already have an account? <a href="loginPage.php">Log in</a> </p>
        </div>
    </div>
</body>
</html>