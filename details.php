<?php

include('header.php');
include('functions/add_cart.php');
?>



<div id="navbar" class="navbar navbar-default"><!-- navbar navbar-default Begin -->

    <div class="container"><!-- container Begin -->

        <div class="navbar-header"><!-- navbar-header Begin -->

            <a href="index.php" class="navbar-brand home"><!-- navbar-brand home Begin -->

                <img src="images/logo.png" alt="Codebook Logo" class="hidden-xs">
                <img src="images/logo.png" alt="Codebook Logo Mobile" class="visible-xs">

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

<?php
$active = 'Cart';
?>
<?php
add_cart();
?>
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

                <li>
                    <a href="shop.php?p_cat=<?php echo $p_cat_id; ?>"><?php echo $p_cat_title; ?></a>
                </li>
                <li>
                    <?php echo $pro_title; ?>
                </li>
            </ul><!-- breadcrumb Finish -->

        </div><!-- col-md-12 Finish -->

        <div class="col-md-3"><!-- col-md-3 Begin -->

            <?php

            include("sidebar.php");

            ?>

        </div><!-- col-md-3 Finish -->

        <div class="col-md-9"><!-- col-md-9 Begin -->
            <div id="productMain" class="row"><!-- row Begin -->
                <div class="col-sm-6"><!-- col-sm-6 Begin -->
                    <div id="mainImage"><!-- #mainImage Begin -->
                        <div id="myCarousel" class="carousel slide" data-ride="carousel"><!-- carousel slide Begin -->
                            <ol class="carousel-indicators"><!-- carousel-indicators Begin -->
                                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                                <li data-target="#myCarousel" data-slide-to="1"></li>
                                <li data-target="#myCarousel" data-slide-to="2"></li>
                            </ol><!-- carousel-indicators Finish -->

                            <div class="carousel-inner">
                                <div class="item active">
                                    <center><img class="img-responsive" src="images/Book_img/<?php echo $pro_img1; ?>"
                                                 alt="Product 3-a"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="images/Book_img/<?php echo $pro_img2; ?>"
                                                 alt="Product 3-b"></center>
                                </div>
                                <div class="item">
                                    <center><img class="img-responsive" src="images/Book_img/<?php echo $pro_img3; ?>"
                                                 alt="Product 3-c"></center>
                                </div>
                            </div>

                            <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                                <!-- left carousel-control Begin -->
                                <span class="glyphicon glyphicon-chevron-left"></span>
                                <span class="sr-only">Previous</span>
                            </a><!-- left carousel-control Finish -->

                            <a href="#myCarousel" class="right carousel-control" data-slide="next">
                                <!-- right carousel-control Begin -->
                                <span class="glyphicon glyphicon-chevron-right"></span>
                                <span class="sr-only">Previous</span>
                            </a><!-- right carousel-control Finish -->

                        </div><!-- carousel slide Finish -->
                    </div><!-- mainImage Finish -->
                </div><!-- col-sm-6 Finish -->

                <div class="col-sm-6"><!-- col-sm-6 Begin -->
                    <div class="box"><!-- box Begin -->
                        <h1 class="text-center"><?php echo $pro_title; ?></h1>



                        <?php
                        add_cart();
                        ?>

                        <form action="details.php?add_cart=<?php echo $product_id; ?> class=" form-horizontal
                        " method="post"><!-- form-horizontal Begin -->
                        <div class="form-group" style="height: 40px;"><!-- form-group Begin -->
                            <label for="" class="col-md-5 control-label">Products Quantity</label>

                            <div class="col-md-7"><!-- col-md-7 Begin -->
                                <select name="product_qty" id="" class="form-control" required><!-- select Begin -->
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5</option>
                                </select><!-- select Finish -->

                            </div><!-- col-md-7 Finish -->

                        </div><!-- form-group Finish -->

                        <div class="form-group" style="height: 40px;"><!-- form-groupbegin -->

                            <label for="" class="col-md-5 control-label">Products Type</label>


                            <div class="col-md-7"><!-- col-md-7 Begin -->

                                <select name="product_type" class="form-control"> <!-- form-control Begin -->



                                    <option>Paperback</option>
                                    <option>Hardcover</option>

                                </select><!-- form-control Finish -->

                            </div><!-- col-md-7 Finish -->
                        </div><!-- form-group Finish -->

                        <p class="price"><?php echo "$pro_price TK"; ?></p>

                        <p class="text-center buttons">
                            <button class="btn btn-primary i fa fa-shopping-cart"> Add to cart</button>
                        </p>

                        </form><!-- form-horizontal Finish -->

                    </div><!-- box Finish -->

                    <div class="row" id="thumbs"><!-- row Begin -->

                        <div class="col-xs-4"><!-- col-xs-4 Begin -->
                            <a data-target="#myCarousel" data-slide-to="0" href="#" class="thumb"><!-- thumb Begin -->
                                <img src="images/Book_img/<?php echo $pro_img1; ?>" alt="product 1"
                                     class="img-responsive">
                            </a><!-- thumb Finish -->
                        </div><!-- col-xs-4 Finish -->

                        <div class="col-xs-4"><!-- col-xs-4 Begin -->
                            <a data-target="#myCarousel" data-slide-to="1" href="#" class="thumb"><!-- thumb Begin -->
                                <img src="images/Book_img/<?php echo $pro_img2; ?>" alt="product 2"
                                     class="img-responsive">
                            </a><!-- thumb Finish -->
                        </div><!-- col-xs-4 Finish -->

                        <div class="col-xs-4"><!-- col-xs-4 Begin -->
                            <a data-target="#myCarousel" data-slide-to="2" href="#" class="thumb"><!-- thumb Begin -->
                                <img src="images/Book_img/<?php echo $pro_img3; ?>" alt="product 3"
                                     class="img-responsive">
                            </a><!-- thumb Finish -->
                        </div><!-- col-xs-4 Finish -->

                    </div><!-- row Finish -->

                </div><!-- col-sm-6 Finish -->


            </div><!-- row Finish -->

            <div class="box" id="details"><!-- box Begin -->

                <h4>Product Details</h4>

                <p>

                    <?php
                    echo $pro_desc;
                    ?>

                </p>

                <h4>Type</h4>

                <ul>
                    <li>Hardcover</li>
                    <li>Paperback</li>

                </ul>

                <hr>

            </div><!-- box Finish -->

            <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                    <div class="box same-height headline"><!-- box same-height headline Begin -->
                        <h3 class="text-center">Products You Maybe Like</h3>
                    </div><!-- box same-height headline Finish -->
                </div><!-- col-md-3 col-sm-6 Finish -->


                <?php
                $get_products = "select * from products order by rand() LIMIT 0,3";

                $run_products = mysqli_query($con, $get_products);

                while ($row_products = mysqli_fetch_array($run_products)) {

                    $pro_id = $row_products['product_id'];
                    $pro_title = $row_products['product_title'];
                    $pro_img1 = $row_products['product_img1'];
                    $pro_price = $row_products['product_price'];


                    echo "
            <div class='col-md-3 col-sm-6 center-responsive'>
             
                 <div class='product same-height'>
                   
                   <a href='details.php?pro_id=$pro_id'>
                   <img class='img-responsive' src='admin_area/product_img/$pro_img1'>
                   </a>
                   
                   <div class='text'>
                    <h3> <a href='details.php?pro_id=$pro_id'> $pro_title</a> </h3>
                    <p class='price'> $pro_price Tk</p>
                       </div>
                 </div>
             
             </div>
            ";
                }
                ?>

            </div><!-- #row same-heigh-row Finish -->

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