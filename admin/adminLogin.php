<?php include "../user/header.php"; ?>
<?php include "connection.php"?>
<?php
if(isset($_POST['submit'])){
    $query = "SELECT * FROM adminlogin WHERE aname = '$_POST[aname]' AND pword = '$_POST[pword]' ";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) == 1) {
        session_start();
        $_SESSION['login'] = $_POST['aname'];
        echo
            "<script> alert('Welcome to Admin Panel!!'); </script>";
         echo 
            '<script>
            location.replace("totalStudents.php");
            </script>';
    } else {
        echo "<script> alert('Incorrect Password')</script>";
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
    <div id="container">
        <div id="container-head">
            <h1>Admin Login</h1>
        </div>
        <form action="" method="post" autocomplete="off">
            <div id="input-group">
                <div class="input-items">
                    <input type="text" placeholder="Admin name" name="aname" required>
                    <input type="password" placeholder="Password" name="pword" required>
                    <!-- <input type="password" placeholder="Confirm Password"name="confirmpword" required> -->
                    <button type="submit" name="submit"><p class="btn-text">Login</p</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>