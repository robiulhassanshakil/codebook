<?php

/**
 * for products categories in sidebar
 */
$db =mysqli_connect("localhost","root","","cbook");


function getPCats(){

    global $db;

    $get_p_cats ="select * from product_categories";

    $run_p_cats =mysqli_query($db,$get_p_cats);

    while ($row_p_cats=mysqli_fetch_array($run_p_cats)){

        $p_cat_id=$row_p_cats['p_cat_id'];

        $p_cat_title=$row_p_cats['p_cat_title'];
        echo "
        <li>
        
         <a href='shop.php?p_cat=$p_cat_id'>
        
        $p_cat_title
         
        </a>
        </li>
        
        
        ";




    }
}
?>