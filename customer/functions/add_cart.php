<?php
/**
 * Created by PhpStorm.
 * User: DEATH
 * Date: 3/28/2019
 * Time: 3:50 AM
 * for cart adding
 */


function add_cart()
{    global $db;

    if (isset($_GET['add_cart'])) {

        $p_id = $_GET['add_cart'];

        $ip_add=getRealIpUser();

        $products_qty = $_POST['product_qty'];

        $products_type = $_POST['product_type'];

        $check_product = "select * from cart where p_id='$p_id'";

        $run_check = mysqli_query($db, $check_product);

        if (mysqli_num_rows($run_check) > 0) {

            echo "<script>alert('This Product Has already added in cart')</script>";
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";


        } else {
            $query = "Insert into cart(p_id,ip_add,qty,p_type) value ('$p_id','$ip_add','$products_qty','$products_type')";
            $run_query = mysqli_query($db, $query);
            echo "<script>window.open('details.php?pro_id=$p_id','_self')</script>";

        }


    }
}
?>