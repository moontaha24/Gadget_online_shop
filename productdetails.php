<?php
    include_once('codes.php');
?>

<?php
$p_id=$_GET['p_id'];
$con=mysqli_connect("localhost","root","","shop");
$query="select * from product where p_id='$p_id'";
$data=mysqli_query($con,$query);

$result= mysqli_fetch_assoc($data);


//===============add to cart===============
if(isset($_GET['add_to_cart']))
{

$cp_id=$_GET['cp_id'];
$cp_price = $_GET['cp_price'];
$cu_id = $_GET['cu_id'];
$qty = $_GET['qty'];
print_r($_GET);


$query="INSERT INTO temp_cart(qty,cp_price,cu_id,cp_product_id)values('$qty','$cp_price','$cu_id','$cp_id')";
$data=mysqli_query($con,$query);
if($data){
 echo "done";
}

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Home</title>
    <link rel="stylesheet" href="sheets/style.css">
    <link rel="stylesheet" href="sheets/productdetails.css">
    
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


    <!--product detail section starts-->
    <section>
        <div class="product-details-all-first-row gap">

            <div class="product-img">


                <div class="pro-big-img">
                    <img id="imageBox" src="admin/pic/<?php echo $result["p_img"];?>" alt="">
                </div>

                <div class="pro-small-imgaes-grp">


                    <div class="pro-small-imgaes">
                        <img src="admin/pic/<?php echo $result["p_img"];?>" alt="" onclick="myFunction(this)">
                    </div>

                    
                    <div class="pro-small-imgaes">
                        <img src="img/8.png" alt="" onclick="myFunction(this)">
                    </div>


                    
                    <div class="pro-small-imgaes">
                        <img src="img/9.png" alt="" onclick="myFunction(this)">
                    </div>


                    
                    <div class="pro-small-imgaes">
                        <img src="img/10.png" alt="" onclick="myFunction(this)">
                    </div>


                </div>
                
            </div>
            <div class="product-content">
                <h5 class="product-Category">
                    Product Category / <span><?php echo $result["p_cat"];?></span>
                </h5>

                <h1>
                    <?php echo $result["p_name"];?>
                </h1>
                <h2 class="product-price">
                    Tk.  <?php echo $result["p_price"];?>
                </h2>

                <div class="product-bank">
                    <h4><i class="fa-solid fa-bahai"></i> Up to 18 months EMI Available</h4>
                    <p>EBL, Standard Chartered, Dhaka Bank, DBBL, etc.</p>
                    <h6><i class="fa-solid fa-triangle-exclamation"></i> No return is applicable if the seal is broken</h6>
                </div>
                <div class="product-color-heading">
                    <h2>Color</h2>
                </div>
                <div class="product-color">
                    <div class="pro-color-one color-black"></div>
                    <div class="pro-color-one color-green"></div>
                    <div class="pro-color-one color-purple"></div>
                </div>

                

                
                    <form action="" method="get" >
                        
                        <div class="product-quantity">
                            <span>Quantity: </span><input type="number" name="qty" min="1" value="1">
                        </div>
                        
                        <input type="hidden" name="p_id" value="<?php echo $result['p_id'];?>">
                        <input type="hidden" name="cp_id" value="<?php echo $result['p_id'];?>">

                        <input type="hidden" name="cp_price" value="<?php echo $result['p_price'];?>">

                        <input type="hidden" name="cu_id"  value="<?php echo $_SERVER['REMOTE_ADDR'];?>">
                        <br>
                        <div class="add-to-cart-working">
                            <input type="submit" name="add_to_cart" class ="" value="ADD TO CART">
                        </div>
                        

                    </form>
                
        
            </div>

        </div>
        <div class="product-details-all-2nd-row gap">
            <div class="product-description">
                <h2>Product Description</h2>
                <p><?php echo $result["p_description"];?></p>
            </div>
        </div>

    </section>

    <!--product detail section ends-->



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








    <script>
        function myFunction(smallImg)
        {
            var fullImg = document.getElementById("imageBox")
            fullImg.src = smallImg.src;
        }
    </script>



 

    

 
   
</body>
</html>