<!--database & links php 


src="admin/pic/<?php echo $result["p_img"];?>"

<?php echo $result["p_name"];?>
<?php echo $result["p_price"];?>
<?php echo $result["p_cat"];?>
<?php echo $result["p_description"];?>







code-->

<!--product upload-->
<?php


$con=mysqli_connect("localhost","root","","shop");
if(!$con)
{
    echo "error";
}
if(isset($_POST['p_button']))
{
    
$Name = $_POST['p_name'];

$price = $_POST['p_price'];
$description=$_POST['p_description'];
$p_cat=$_POST['p_cat'];


$t_name=$_FILES['p_img']['tmp_name'];
$file_name=$_FILES['p_img']['name'];


move_uploaded_file($t_name,"admin/pic/$file_name");

$query="insert into product(p_name,p_description,p_img,p_price,p_cat)values('$Name','$description','$file_name','$price','$p_cat')";
$data=mysqli_query($con,$query);
if($data){
 echo "done";
}

}


?> 



<!--shop & product page links-->
<?php


$p_id = isset($_GET['p_id']) ? $_GET['p_id'] : '';
$con=mysqli_connect("localhost","root","","shop");
$query="select * from product where p_id='$p_id'";
$data=mysqli_query($con,$query);

$result= mysqli_fetch_assoc($data);


?>


<!--addd to cart-->
<?php


$con=mysqli_connect("localhost","root","","shop");
if(!$con)
{
    echo "error";
}
if(isset($_POST['add_to_cart']))
{
    
$cp_id=$_GET['cp_id'];

$cp_price = $_GET['cp_price'];
$cu_id = $_GET['cu_id'];
$qty = $_GET['qty'];



print_r($_POST);


$query="INSERT INTO tempcart(cp_price,cp_qty,cu_id)values('$cp_id','$cp_price','$qty','$cu_id')";
$data=mysqli_query($con,$query);
if($data){
 echo "done";
}

}


?> 

<!--show products from database-->
<?php

$con=mysqli_connect("localhost","root","","shop");
$query="select * from product";
$data=mysqli_query($con,$query);


$catphone="select * from product where p_cat='Phones'";
$phones=mysqli_query($con,$catphone);


$cattab="select * from product where p_cat='Tab'";
$tab=mysqli_query($con,$cattab);


$catlaptop="select * from product where p_cat='Laptop'";
$laptop=mysqli_query($con,$catlaptop);


$catwatch="select * from product where p_cat='Watch'";
$watch=mysqli_query($con,$catwatch);


$catheadphone="select * from product where p_cat='Headphone'";
$headphone=mysqli_query($con,$catheadphone);

$topselling="select * from product where p_cat='Selling'";
$selling=mysqli_query($con,$topselling);




?>

<!--
<!DOCTYPE html>
<html lang="en">
<head>

            <div class="product-small-img-one"><img src="asset/img/products/f1.jpg" alt="" onclick="myFunction(this)"></div>

            <img id="imageBox" src="asset/img/products/f1.jpg" alt="">
 


    <script>
        function myFunction(smallImg)
        {
            var fullImg = document.getElementById("imageBox")
            fullImg.src = smallImg.src;
        }
    </script>
</body>
</html>
-->