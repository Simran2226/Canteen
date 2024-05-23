<?php

//insert data and image

include "connection.php";
session_start();

if(isset($_POST['submit']))
{
    $itemname = $_POST['itemname'];
    $price = $_POST['price'];
    // $category = $_POST['category'];
    $image = $_FILES['image']['name'];

    $allowed_extension = array('gif','png','jpg','jpeg');
    $filename = $_FILES['image']['name'];
    $file_extension = pathinfo($filename,PATHINFO_EXTENSION);
    $query = "INSERT INTO `addproduct`(`itemname`, `price`, `image`) VALUES ('$itemname','$price','$image')";

    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        move_uploaded_file($_FILES['image']['tmp_name'], "upload/".$_FILES['image']['name']);
        // $_SESSION['status'] = "Image stored successfully";
        header('location: adminAllProduct.php');
    }
    else
    {
        // $_SESSION['status'] = "Image not inserted";
        header('location: adminAllProduct.php');
    }
}


//edit data and image


if(isset($_POST['update_image']))
{
    $id = $_POST['stud_id'];
    $itemname = $_POST['itemname'];
    $price = $_POST['price'];
    // $category = $_POST['category'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['image_old'];

    if($new_image != '')
    {
        $update_filename = $_FILES['image']['name'];
    }
    else
    {
       $update_filename = $old_image;
    }
    //updating

    $query = "UPDATE `addproduct` SET `itemname`='$itemname',`price`='$price',`image`='$update_filename' WHERE id = '$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        if($_FILES['image']['name'] !='')
        {
            move_uploaded_file($_FILES['image']['tmp_name'], "upload/".$_FILES['image']['name']);
            unlink("upload/".$old_image);

        }
    //   $_SESSION['status'] = "updated successfully" ;
        header("location:adminAllProduct.php");

    }
    else
    {
        // $_SESSION['status'] = "updated not successfully" ;
        header("location:adminAllProduct.php");
    }

}


//edit without image

if(isset($_POST['update_image']))
{
    $stud_id = $_POST['stud_id'];
    $itemname = $_POST['itemname'];
    $price = $_POST['price'];
    // $category = $_POST['category'];

    $new_image = $_FILES['image']['name'];
    $old_image = $_POST['image_old'];

    if( $new_image != '')
    {
        $update_filename =   $_FILES['image']['name'];

    }
    else 
    {
        $update_filename =$old_image;
    }
    $query = "UPDATE `addproduct` SET `itemname`='$itemname',`price`='$price',`image`='$update_filename', WHERE id = '$id'";
    $query_run = mysqli_query($conn,$query);
    if($query_run)
    {
        if(  $_FILES['image']['name'] != '')
        {
            move_uploaded_file($_FILES['image']['tmp_name'], "upload/".$_FILES['image']['name']);
            unlink("upload/".$old_image);

        }
        // $_SESSION['status'] = "updates successfully";
        header("location:adminAllProduct.php");
    }
    else
    {
        // $_SESSION['status'] = "updates not  successfully";
        header("location:adminAllProduct.php");
    }
}




 //delete product

if(isset($_POST['delete_image']))
{
    $id = $_POST['delete_id'];
    $image = $_POST['del_image'];

    $query = "DELETE FROM `addproduct` WHERE `id`='$id'";
    $query_run = mysqli_query($conn,$query);

    if($query_run)
    {
        unlink("upload/".$image);
        echo "<script>alert('delete successfully')</script>";
        header("location: adminAllProduct.php");
    }
    else
    {
        echo "<script>alert('delete not successfully')</script>";
        header("location: adminAllProduct.php");
    }
}








?>