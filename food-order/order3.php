<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- Important to make website responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Restaurant Website</title>

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

    <!-- fOOD sEARCH Section Starts Here -->
    <section class="food-search">
        <div class="container">

            <h2 class="text-center text-white">Fill This To Confirm Your Order</h2>

            <form action="#" class="order" method="POST">

                <fieldset>
                    <legend>Selected Food</legend>


                    <div class="food-menu-img">
                        <img src="images/vburger.jpg" alt="Veg Burger" class="img-responsive img-curve">
                    </div>

                    <div class="food-menu-desc">

                        <div class="food-menu-text">
                        <h3>Veg Burger</h3>
                        <p class="food-price">Rs.99 - Rs.199</p>

                        
                    </div>
                    
                                          
                   
                </fieldset>
            
                <fieldset>
                    <legend>Delivery Details</legend>

                    <div class="order-label">Name</div>
                    <input type="text" name="name" placeholder="E.g. Full Name" class="input-responsive" required>

                    <div class="order-label">Contact</div>
                    <input type="tel" name="contact" placeholder="E.g. 7253XXXXXX" class="input-responsive" required>

                    <div class="order-label">Email</div>
                    <input type="email" name="email" placeholder="E.g. emailxxxxx@gmail.com" class="input-responsive" required>

                    <div class="order-label">Address</div>
                    <textarea name="address" rows="10" placeholder="E.g. Street, City, State" class="input-responsive" required></textarea>


                    <div class="order-label">Quantity</div>
                        <input type="number" name="quantity" class="input-response" value="1" required>
                       
                    
                    <div class ="order-label">Item</div>
                            <select name ="item" id = "item" class = "input-respons" required><br>
                            <option value = "CheeseBurger">Cheese-Burger         = Rs.99</option>
                            <option value = "TandooriBurger">Tandoori-Burger     = Rs.159 </option>
                            <option value = "SpecialBurger">Special-Burger       = Rs.199 </option>
                            <input type="submit" name="submit" value="Order" class="btn btn-burburry">
                </fieldset>

            </form>

        </div>
    </section>
    <!-- fOOD sEARCH Section Ends Here -->

    <!-- social Section Starts Here -->
    <section class="social">
        <div class="container text-center">
            <ul>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/50/000000/facebook-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/instagram-new.png" /></a>
                </li>
                <li>
                    <a href="#"><img src="https://img.icons8.com/fluent/48/000000/twitter.png" /></a>
                </li>
            </ul>
        </div>
    </section>
    <!-- social Section Ends Here -->

    <!-- footer Section Starts Here -->
    <section class="footer">
        <div class="container text-center">
            <p>wowfoods &reg; All Rights Reserved.
                <a href="#"></a>
            </p>
        </div>
    </section>
    <!-- footer Section Ends Here -->

</body>

</html>


<?php
       include 'connection.php';

       if(isset($_POST['submit']))
       {

       $Quantity = $_POST['quantity'];
       $Name = $_POST['name'];
       $Email = $_POST['email'];
       $Contact = $_POST['contact'];
       $Address = $_POST['address'];
       $Item = $_POST['item'];



       $insertquery = "insert into ordering(quantity,name,email,contact,address,item) values('$Quantity','$Name','$Email','$Contact','$Address','$Item') ";

       $res = mysqli_query($con,$insertquery);

       if($res){
       ?>
       <script>
           alert("Order Placed");
       </script>
       <?php
        }else{
            ?>
            <script>
                alert("Order Can't be placed");
            </script>
            <?php
        }
}