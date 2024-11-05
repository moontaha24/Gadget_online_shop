<?php
    include_once('codes.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="refresh" content="400">
    <title>Home</title>
    <link rel="stylesheet" href="sheets/style.css">
    <link rel="stylesheet" href="sheets/shop.css">
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


    <!--Shop row start-->

    <section class="shop-head-banner" >

        <div class="shop-heading gap">
            <h1>Shop</h1>
        </div>
    </section>
    <!--Shop row end-->



    <!--shop page category-->

    <section>
        <div class="shop-category-menu gap">
            <ul>
                <li><a href="shop.php">All Products</a></li>
                <li><a href="phone.php">Phones</a></li>
                <li><a href="tab.php">Tab</a></li>
                <li class="shop-active"><a href="Lptp.php">Laptop</a></li>
                <li><a href="watch.php">Watch</a></li>
                <li><a href="headphone.php">Accessories</a></li>
            </ul>
        </div>
    </section>

    
    <!--top selling start-->
    <section class="top-selling">










        <div class="top-selling-heading gap">
            <h1>Available Products</h1>
        </div>
        

        <div class="top-selling-product-row shop-product-row gap">



            <?php while($result= mysqli_fetch_assoc($laptop)){ ?>


            <div class="top-selling-product-column">
                <div class="t-s-pro-img">
                <a href="productdetails.php?p_id=<?php echo $result["p_id"];?>"><img src='admin/pic/<?php echo $result["p_img"];?>' alt=""></a>
                </div>



                <div class="t-s-pro-details">
                    <h2><?php echo $result["p_name"];?></h2>
                    <h4>Tk <?php echo $result["p_price"];?></h4>
                    <h6><?php echo $result["p_cat"];?></h6>
                </div>
            </div>

            <?php } ?>

        </div>


        











    </section>







    
    <!--top selling end-->


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