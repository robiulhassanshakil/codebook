<?php
include 'header.php';
include 'functions/pcatpro.php';
include 'functions/catpro.php';
?>

<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->

    <div class="container"><!-- container Begin -->

        <div class="navbar-header"><!-- navbar-header Begin -->

            <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->

                <img src="images/logo.png" alt="CodeBook logo" class="hidden-xs">
                <img src="images/logo.png" alt="CodeBook" class="visible-xs">

            </a><!-- navbar-brand home Finish -->

            <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">

                <span class="sr-only">Toggle Navigation</span>

                <i class="fa fa-align-justify"></i>

            </button>

            <button class="navbar-toggle" data-toggle="collapse" data-target="#search">

                <span class="sr-only">Toggle Search</span>

                <i class="fa fa-search"></i>

            </button>

        </div><!-- navbar-header Finish -->

        <div class="navbar-collapse collapse" id="navigation"><!-- navbar-collapse collapse Begin -->

            <div class="padding-nav"><!-- padding-nav Begin -->

                <ul class="nav navbar-nav left"><!-- nav navbar-nav left Begin -->

                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li class="active">
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li>
                        <a href="cart.php">Shopping Cart</a>
                    </li>
                    <li>
                        <a href="contact.php">Contact Us</a>
                    </li>

                </ul><!-- nav navbar-nav left Finish -->

            </div><!-- padding-nav Finish -->

            <a href="cart.php" class="btn navbar-btn btn-primary right"><!-- btn navbar-btn btn-primary Begin -->

                <i class="fa fa-shopping-cart"></i>

                <span><?php echo item() ?> Items In Your Cart</span>

            </a><!-- btn navbar-btn btn-primary Finish -->

            <div class="navbar-collapse collapse right"><!-- navbar-collapse collapse right Begin -->

                <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search">
                    <!-- btn btn-primary navbar-btn Begin -->

                    <span class="sr-only">Toggle Search</span>

                    <i class="fa fa-search"></i>

                </button><!-- btn btn-primary navbar-btn Finish -->

            </div><!-- navbar-collapse collapse right Finish -->

            <div class="collapse clearfix" id="search"><!-- collapse clearfix Begin -->

                <form method="get" action="results.php" class="navbar-form"><!-- navbar-form Begin -->

                    <div class="input-group"><!-- input-group Begin -->

                        <input type="text" class="form-control" placeholder="Search" name="user_query" required>

                        <span class="input-group-btn"><!-- input-group-btn Begin -->
                           
                           <button type="submit" name="search" value="Search" class="btn btn-primary"><!-- btn btn-primary Begin -->
                               
                               <i class="fa fa-search"></i>
                               
                           </button><!-- btn btn-primary Finish -->
                           
                           </span><!-- input-group-btn Finish -->

                    </div><!-- input-group Finish -->

                </form><!-- navbar-form Finish -->

            </div><!-- collapse clearfix Finish -->

        </div><!-- navbar-collapse collapse Finish -->

    </div><!-- container Finish -->

</div><!-- navbar navbar-default Finish -->

<div id="content"><!-- #content Begin -->
    <div class="container"><!-- container Begin -->
        <div class="col-md-12"><!-- col-md-12 Begin -->

            <ul class="breadcrumb"><!-- breadcrumb Begin -->
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    Shop
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-3"><!-- col-md-3 Begin -->

            <?php

            include("sidebar.php");

            ?>

        </div><!-- col-md-3 Finish -->

        <div class="col-md-9"><!-- col-md-9 Begin -->


            <?php
            if (!isset($_GET['p_cat'])) {

                if (!isset($_GET['cat'])) {

                    echo "<div class=\"box\"><!-- box Begin -->
                   <h1>Shop</h1>
                   <p>

                       With over 12 million books. Browse through variety of genres such as Fiction, Classics, Children's Books, School Textbooks, and much more. Explore Amazon Best Reads, Exam Central, Bangladesh Language Books, New Releases and Best-selling books. Now available: Audible Audio books & more, Audible Membership</p>
               </div><!-- box Finish -->";
                }
            }

            ?>


            <div class="row"><!-- row Begin -->

                <?php

                if (!isset($_GET['p_cat'])) {

                if (!isset($_GET['cat'])) {

                $per_page = 6;
                if (isset($_GET['page'])) {

                    $page = $_GET['page'];
                } else {
                    $page = 1;
                }
                $start_from = ($page - 1) * $per_page;

                $get_product = "select * from products order by 1 DESC LIMIT $start_from,$per_page";
                $run_product = mysqli_query($con, $get_product);
                while ($row_products = mysqli_fetch_array($run_product)) {

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
                                    </div> ";

                }


                ?>
            </div>

                <center>
                    <ul class="pagination">

                        <?php


                        $query = "select * from products";

                        $result = mysqli_query($con, $query);

                        $total_records = mysqli_num_rows($result);

                        $total_pages = ceil($total_records / $per_page);
                        echo "
                       
                       <li>
                        <a href='shop.php?page=1'>" . 'First Page' . "</a>
                         </li>
                       
                       ";
                        for ($i = 1; $i <= $total_pages; $i++) {

                            echo "
                           
                           <li>
                        <a href='shop.php?page=" . $i . "'>" . $i . "</a>
                        
                         </li>
                           ";
                        };
                        echo "
                       
                       <li>
                        <a href='shop.php?page=$total_pages'>" . 'Last Pages' . "</a>
                        
                         </li>
                       
                       ";


                        }
                        }
                        ?>

                    </ul>
                </center>

            </div><!-- row Finish -->


            <?php
            getpcatpro();

            getcatpro();

            ?>
        </div><!-- col-md-9 Finish -->

    </div><!-- container Finish -->
</div><!-- #content Finish -->

<?php

include("footer.php");

?>

<script src="js/jquery-331.min.js"></script>
<script src="js/bootstrap-337.min.js"></script>


</body>
</html>