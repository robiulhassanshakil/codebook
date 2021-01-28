
<?php
include ("includes/db.php");

include ('functions/item.php');
?>


<?php
/*
 * it is for product details
 */

if(isset($_GET['pro_id'])){

    $product_id=$_GET['pro_id'];

    $get_product="select * from products where product_id='$product_id'";

    $run_product=mysqli_query($con,$get_product);

    $row_product=mysqli_fetch_array($run_product);

    $p_cat_id=$row_product['p_cat_id'];

    $pro_title=$row_product['product_title'];

    $pro_price=$row_product['product_price'];

    $pro_desc=$row_product['product_desc'];

    $pro_img1=$row_product['product_img1'];

    $pro_img2=$row_product['product_img2'];

    $pro_img3=$row_product['product_img3'];

    $get_p_cat="select * from product_categories where p_cat_id='$p_cat_id'";

    $run_p_cat=mysqli_query($con,$get_p_cat);

    $row_p_cat=mysqli_fetch_array($run_p_cat);

    $p_cat_title=$row_p_cat['p_cat_title'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CodeBook A Online Book Shop</title>
    <link rel="stylesheet" href="styles/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="styles/style.css">
</head>
<body>

<div id="top"><!-- Top Begin -->

    <div class="container"><!-- container Begin -->

        <div class="col-md-6 offer"><!-- col-md-6 offer Begin -->

            <a href="#" class="btn btn-success btn-sm">Welcome</a>
            <a href="cart.php"><?php echo item() ?> Items In Your Cart | Total Price: <?php total_price() ?> </a>

        </div><!-- col-md-6 offer Finish -->

        <div class="col-md-6"><!-- col-md-6 Begin -->

            <ul class="menu"><!-- cmenu Begin -->
                <li>
                    <a href="./admin_area/login.php">Admin</a>
                </li>
                <li>
                    <a href="customer_register.php">Register</a>
                </li>
                <li>
                    <a href="customer/my_account.php">My Account</a>
                </li>
                <li>
                    <a href="cart.php">Go To Cart</a>
                </li>
                <li>
                    <a href="customer_login.php">Login</a>
                </li>

            </ul><!-- menu Finish -->

        </div><!-- col-md-6 Finish -->

    </div><!-- container Finish -->

</div><!-- Top Finish -->

