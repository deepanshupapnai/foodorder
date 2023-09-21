<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>
    <script src="https://kit.fontawesome.com/49e1b371d4.js" crossorigin="anonymous"></script>

    <!-- Link our CSS file -->
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <!-- Navbar Section Starts Here -->
    <section class="navbar">
        <div class="container">
            <div class="logo">
                <a href="#" title="Logo">
                    <img src="images/logo.png" alt="Restaurant Logo" class="img-responsive">
                </a>
            </div>

            <div class="menu text-right">
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="categories.html">Categories</a>
                    </li>
                    <li>
                        <a href="foods.html">Foods</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>

            <div class="clearfix"></div>
        </div>
    </section>
    <!-- Navbar Section Ends Here -->

    <section class="contact-form">
        <div class="container">
            <div class="form-wrapper">
                <div class="company-address">
                    <div class="address-group">
                        <i class="fas fa-map-marker-alt fa-3x text-red"></i>
                        <h2 class="text-grey md-heading">Location</h2>
                        <p> Uttarakhand </p>
                    </div>
                    <div class="address-group">
                        <i class="far fa-envelope fa-3x text-red"></i>
                        <h2 class="text-grey md-heading">Email</h2>
                        <p>wowfoods@gmail.com</p>
                    </div>
                    <div class="address-group">
                        <i class="fas fa-phone-square-alt fa-3x text-red"></i>
                        <h2 class="text-grey md-heading">Call</h2>
                        <p>7253074003 , 9068699824.</p>
                    </div>
                    <img src="images/download.png" alt="image">
                </div>
                <form action="" class="form" method="POST">
                    <h1 class="lg-heading text-black">Contact-Us</h1>
                    <p class="text-gray">let us know your question and concern by filling out your suggestions below</p>
                    <div class="form-group">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="email" required>
                    </div>
                    <div class="form-group">
                        <label for="phone">Number</label>
                        <input type="tel" name="number" id="number" required>
                    </div>
                    <div class="form-group">
                        <label for="messages">Message</label>
                        <textarea name="message" id="message"></textarea>
                    </div>
                    <button type="submit" class="form-btn" name="submit" value="Regesterd">submit</button>

                </form>
            </div>
        </div>
    </section>
    <!-- social Section Starts Here -->
    <section class="social ">
        <div class="container text-center ">
            <ul>
                <li>
                    <a href="# "><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png " /></a>
                </li>
                <li>
                    <a href="# "><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png " /></a>
                </li>
                <li>
                    <a href="# "><img src="https://img.icons8.com/fluent/48/000000/twitter.png " /></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer ">
        <div class="container text-center ">
            <p>wowfoods &reg; All Rights Reserved.
                <a href="# "></a>
            </p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>
<?php
       include 'connection.php';

       if(isset($_POST['submit']))
       {

       $Username = $_POST['username'];
       $Email = $_POST['email'];
       $Number = $_POST['number'];
       $Message = $_POST['message'];



       $insertquery = "insert into contact(username,email,number,message) values('$Username','$Email','$Number','$Message') ";

       $res = mysqli_query($con,$insertquery);

       if($res){
       ?>
       <script>
           alert("Query Submitted");
       </script>
       <?php
        }else{
            ?>
            <script>
                alert("Try Again");
            </script>
            <?php
        }
}