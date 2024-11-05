<?php

$ip = $_SERVER['REMOTE_ADDR'];


$con = mysqli_connect("localhost", "root", "", "shop");

$query = "select * from temp_cart where cu_id='$ip'";
$data = mysqli_query($con, $query);



//=======================delete=====


if (isset($_GET['btndelete'])) {
    $query = "DELETE FROM temp_cart where cp_id='$_GET[did]' ";
    if (mysqli_query($con, $query)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($con);
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
    <link rel="stylesheet" href="sheets/cart.css">
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
                <li><a href="headphone.php">ACCESSORIES</a></li>
            </ul>

        </div>
    </header>
    <!--header section end-->


    <div class="cart-moontaha gap">
        <h1 style="text-align:center;">Cart</h1>
        <table border="1px" width="100%">


            <tr>
                <th> cp_product_id</th>
                <th>cp_price </th>
                <th> Qty</th>
                <th> Total price</th>
                <th> Action</th>

            </tr>

            <?php
            $amount1 = 0;
            $user = 0;
            while ($result = mysqli_fetch_assoc($data)) {

            ?>

                <tr>
                    <td> <?php echo $result["cp_product_id"]; ?></td>

                    <td> <?php echo $result["cp_price"]; ?> </td>

                    <td> <?php echo $result["qty"]; ?></td>

                    <td> <?php $amount = $result["qty"] * $result["cp_price"];
                            echo $amount; ?></td>

                    <td> <a href="?btndelete=del&did=<?php echo $result["cp_id"]; ?>">Delete</a></td>
                </tr>


            <?php
                $amount1 += $amount;
            } ?>

            <tr>
                <td colspan="3"> Total Price </td>

                <td colspan="2"><b><?php echo $amount1; ?></b> </td>

            </tr>

        </table>
        <div class="moontaha-pay">
            <a href="stripe/index.php?user=<?php echo $user; ?>&amount=<?php echo $amount1; ?>"> PAY </a>
        </div>

    </div>



    <!--BRANDS end-->



</body>

</html>