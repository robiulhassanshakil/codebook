<?php
/**
 * it is for get cat on sidebar
 */
$db = mysqli_connect("localhost", "root", "", "cbook");


function getCats()
{

    global $db;

    $get_cats = "select * from categories";

    $run_cats = mysqli_query($db, $get_cats);

    while ($row_cats = mysqli_fetch_array($run_cats)) {

        $cat_id = $row_cats['cat_id'];

        $cat_title = $row_cats['cat_title'];
        echo "
        <li>
        
         <a href='shop.php?cat=$cat_id'>
        
        $cat_title
         
        </a>
        </li>
        
        ";
    }
}

?>