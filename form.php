<?php
include_once('codes.php');
?>

<html>

<head>
    <title>Registration form</title>
    <link rel="stylesheet" href="sheets/style.css">
    <link rel="stylesheet" href="sheets/form.css" type="text/css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,300;0,400;0,700;0,900;1,400;1,700&family=Open+Sans:wght@300;800&family=Poppins:ital,wght@0,300;0,400;0,600;1,400;1,600&family=Raleway:ital,wght@0,100;0,300;0,400;0,500;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/js/all.min.js">

</head>

<body>

    <!--header section start-->
    <header>
        <div class="header-top">

            <div class="header-top-logo">
                <a href="index.php"><img src="img/logo.png" alt=""></a>
            </div>


            <div class="header-top-search">
                <form action="#">
                    <input type="text" placeholder="Search For Products">
                    <input type="submit" value="Search">
                </form>
            </div>

            <div class="header-top-account">

                <a href="#"><i class="fa-solid fa-user-large"></i> My Account</a>
                <a href="cart.php"><i class="fa-solid fa-cart-arrow-down"></i> Cart</a>
            </div>

        </div>



        <div class="header-btm">


            <ul>
                <li><a href="index.php">HOME</a></li>
                <li><a href="shop.php">SHOP</a></li>
                <li><a href="form.php">UPlOAD</a></li>
                <li><a href="phone.php">PHONES</a></li>
                <li><a href="tab.php">TABLETS</a></li>
                <li><a href="Lptp.php">LAPTOP/MACBOOK</a></li>
                <li><a href="watch.php">ACCESSORIES</a></li>
            </ul>

        </div>
    </header>
    <!--header section end-->











    <section class="form-row">

        <div class="main">
            <div class="register">
                <h2>Register Here</h2>
                <form id="register" action="" method="POST" enctype="multipart/form-data">
                    <label>Product Name : </label>
                    <br>
                    <input type="text" name="p_name" id="name" placeholder="Enter your first name">
                    <br><br>

                    <label>Product Image: </label>
                    <br>
                    <input type="file" name="p_img" id="name" placeholder="Upload your product image">
                    <br><br>

                    <label>Product Description : </label>
                    <br>
                    <input type="text" name="p_description" id="name" placeholder="Description">
                    <br><br>

                    <label>Price : </label>
                    <br>
                    <input type="number" name="p_price" id="name" placeholder="Enter your product price">
                    <br><br>
                    <label>Product Category : </label>
                    <br>
                    <input type="text" name="p_cat" id="name" placeholder="Product Category">
                    <br><br>


                    <input type="submit" value="Submit" name="p_button" id="submit">




                </form>
            </div>
        </div>

    </section>


   



    <!--Footer start-->
    <footer>
        <div class="fot-row gap">

            <div class="fot-col">
                <img src="img/logo.png" alt="">
                <p></p>
                <!--about us-->
            </div>

            <div class="fot-col">
                <h2>About Us</h2>
                <ul>
                    <li><a href="about.php">About Us</a></li>
                    <li><a href="Lptp.php">Order Tracking</a></li>

                </ul>
            </div>

            <div class="fot-col">
                <h2>Customer Service</h2>
                <ul>
                    <li><a href="Lptp.php">Terms & Conditions</a></li>
                    <li><a href="Lptp.php">Return Policy</a></li>
                    <li><a href="Lptp.php">Privacy Policy</a></li>
                    <li><a href="Lptp.php">Cookie Policy</a></li>
                </ul>
            </div>

            <div class="fot-col fot-col-follow">
                <h2>Follow us</h2>
                <ul>
                    <li><a href="https://www.facebook.com/"><i class="fa-brands fa-facebook"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-instagram"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-linkedin"></i></a></li>
                    <li><a href=""><i class="fa-brands fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
    </footer>
    <!--Footer end-->
    
</body>

</html>