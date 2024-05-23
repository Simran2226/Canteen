<?php include 'header.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ContactUS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!-- <link rel="stylesheet" href="../css/headFoot.css"> -->
    <style>
        
        *{
            margin: 0%;
            padding: 0%;
            box-sizing: border-box;
            font-family: 'poppins',sans-serif;
        }
        .contact-box{
            width: 100%;
            height: 350px;
            background-color: red;
        }
        .contact-heading{
            padding: 5px; 
            margin-top: 10px;
            text-align: center;
            font-size: 35px;
        }
        .contact-heading>p{
            /* color: #fff; */
            font-weight: bold;
            margin-top: 30px;
        }
        .contact-text{
            margin-top: 15px;
            text-align: center;
            line-height: 28px;
        }
        .contact-info-box{
            display: flex;
            justify-content: space-around;
        }
        .info-box{
            margin: 35px;
            width: 200px;
            text-align: center;
        }
        .info-box i{
            font-size: 22px;
            margin-top: 15px;
        }
        .info-box .text{
            margin-top: 25px;
            font-size: 18px;
            line-height: 25px;
        }
    </style>

</head>
<body>
    
     <div class="contact-box" style="background-image: url('../img/cus.jpg'); ">
        <div class="contact-heading" ><p>CONTACT US</p></div>
        <div class="contact-text">
            <p>"Got a question about our online canteen? Reach out anytime. We're here to ensure your dining experience is top-notch!"</p>
        </div>
        <div class="contact-info-box">
            <div class="info-box">
                <p><i class="fa-solid fa-location-dot"></i></p>
                <p class="text"> Doaba college, <br> Jalandhar,Punjab</p>
            </div>

            <div class="info-box">
                <p><i class="fa-solid fa-phone"></i></p>
                <p class="text">+91 987654321</p>
            </div>

            <div class="info-box">
                <p><i class="fa-regular fa-envelope"></i></p>
                <p class="text">dcjcanteen@gmail.com</p>
            </div>
        </div>
     </div>
     <div class="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d664.8441791031476!2d75.58573373874086!3d31.343277385253504!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a5bb20972e317%3A0xeeebac894fc830bb!2sCollege%20Canteen!5e0!3m2!1sen!2sin!4v1710597369009!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
     </div>
    
</body>
</html>
<?php include 'footer.php'; ?>
