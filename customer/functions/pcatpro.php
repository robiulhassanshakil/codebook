<?php

/**
 * for getting product by product categories
 */
function getpcatpro()
{

    global $db;

    if (isset($_GET['p_cat'])) {

        $p_cat_id = $_GET['p_cat'];
        $get_p_cat = "select * from product_categories where p_cat_id='$p_cat_id'";
        $run_p_cat = mysqli_query($db, $get_p_cat);
        $row_p_cat = mysqli_fetch_array($run_p_cat);
        $p_cat_title = $row_p_cat['p_cat_title'];

        $p_cat_desc = $row_p_cat['p_cat_desc'];

        $get_products = "select * from products where p_cat_id='$p_cat_id'";

        $run_products = mysqli_query($db, $get_products);
        $count = mysqli_num_rows($run_products);

        if ($count == 0) {
            echo "
            <div class='box'>
            
            <h1>
            No Subject Found In This Product Categories
            </h1>
              </div>
            
            ";
        } else {
            echo "
            <div class='box'>
            
            <h1> $p_cat_title</h1>
            <p>$p_cat_desc</p>
            
          </div>
            ";
        }
        while ($row_products = mysqli_fetch_array($run_products)) {
            $pro_id = $row_products['product_id'];

            $pro_title = $row_products['product_title'];

            $pro_price = $row_products['product_price'];

            $pro_img1 = $row_products['product_img1'];


            echo "
            
            <div class='col-md-4 col-sm-6 center-responsive'>
         
         <div class='product'>
         
         <a href='details.php?pro_id=$pro_id'>
         
         <img class='img-responsive' src='admin_area/product_img/$pro_img1' alt=''>
         
         </a>
         <div class='text'>
           
           <h3>
           
           <a href='details.php?pro_id=$pro_id'>
         
           $pro_title
          
           </h3>
            
            <p class='price'>
            
             $pro_price TK
             </p>
             
         <p class='button'>
         
         <a class='btn btn-default' href='details.php?pro_id=$pro_id'>
           
           View Details
         </a>
         <a class='btn btn-primary' href='details.php?pro_id=$pro_id'>
           
           <i class='fa fa-shopping-cart'></i>
           Add  to Cart
         </a>
         </p>
         
         
         
         </div>
         </div>
         </div>  
        
            ";
        }
    }
}

?>