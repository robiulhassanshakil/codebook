<?php
include 'header.php';
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
                       <li>
                           <a href="shop.php">Shop</a>
                       </li>
                       <li>
                           <a href="customer/my_account.php">My Account</a>
                       </li>
                       <li class="active">
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
                   
                   <button class="btn btn-primary navbar-btn" type="button" data-toggle="collapse" data-target="#search"><!-- btn btn-primary navbar-btn Begin -->
                       
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
                       Cart
                   </li>
               </ul><!-- breadcrumb Finish -->
               
           </div><!-- col-md-12 Finish -->
           
           <div id="cart" class="col-md-9"><!-- col-md-9 Begin -->
               
               <div class="box"><!-- box Begin -->
                   
                   <form action="cart.php" method="post" enctype="multipart/form-data"><!-- form Begin -->
                       
                       <h1>Shopping Cart</h1>
                       <?php

                       $ip_add = getRealIpUser();

                       $select_cart = "select * from cart where ip_add='$ip_add'";

                       $run_cart = mysqli_query($con,$select_cart);

                       $count = mysqli_num_rows($run_cart);

                       ?>

                       <p class="text-muted">You currently have <?php echo $count; ?> item(s) in your cart</p>

                       <div class="table-responsive"><!-- table-responsive Begin -->

                           <table class="table"><!-- table Begin -->

                               <thead><!-- thead Begin -->

                               <tr><!-- tr Begin -->

                                   <th colspan="2">Product</th>
                                   <th>Quantity</th>
                                   <th>Unit Price</th>
                                   <th>Size</th>
                                   <th colspan="1">Delete</th>
                                   <th colspan="2">Sub-Total</th>

                               </tr><!-- tr Finish -->

                               </thead><!-- thead Finish -->

                               <tbody><!-- tbody Begin -->

                               <?php

                               $total = 0;

                               while($row_cart = mysqli_fetch_array($run_cart)){

                                   $pro_id = $row_cart['p_id'];

                                   $pro_type = $row_cart['p_type'];

                                   $pro_qty = $row_cart['qty'];

                                   $get_products = "select * from products where product_id='$pro_id'";

                                   $run_products = mysqli_query($con,$get_products);

                                   while($row_products = mysqli_fetch_array($run_products)){

                                       $product_title = $row_products['product_title'];

                                       $product_img1 = $row_products['product_img1'];

                                       $only_price = $row_products['product_price'];

                                       $sub_total = $row_products['product_price']*$pro_qty;

                                       $total += $sub_total;

                                       ?>

                                       <tr><!-- tr Begin -->

                                           <td>

                                               <img class="img-responsive" src="images/Book_img/<?php echo $product_img1; ?>" alt="Product 3a">

                                           </td>

                                           <td>

                                               <a href="details.php?pro_id=<?php echo $pro_id; ?>"> <?php echo $product_title; ?> </a>

                                           </td>

                                           <td>

                                               <?php echo $pro_qty; ?>

                                           </td>

                                           <td>

                                               <?php echo $only_price; ?>TK

                                           </td>

                                           <td>

                                               <?php echo $pro_type; ?>

                                           </td>

                                           <td>

                                               <input type="checkbox" name="remove[]" value="<?php echo $pro_id; ?>">

                                           </td>

                                           <td>

                                               <?php echo $sub_total; ?> TK

                                           </td>

                                       </tr><!-- tr Finish -->

                                   <?php } } ?>

                               </tbody><!-- tbody Finish -->

                               <tfoot><!-- tfoot Begin -->

                               <tr><!-- tr Begin -->

                                   <th colspan="6">Total</th>
                                   <th colspan="2"><?php echo $total; ?>TK</th>

                               </tr><!-- tr Finish -->


                               </tfoot><!-- tfoot Finish -->
                               
                           </table><!-- table Finish -->
                           
                       </div><!-- table-responsive Finish -->
                       
                       <div class="box-footer"><!-- box-footer Begin -->
                           
                           <div class="pull-left"><!-- pull-left Begin -->
                               
                               <a href="index.php" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-chevron-left"></i> Continue Shopping
                                   
                               </a><!-- btn btn-default Finish -->
                               
                           </div><!-- pull-left Finish -->
                           
                           <div class="pull-right"><!-- pull-right Begin -->
                               
                               <button type="submit" name="update" value="Update Cart" class="btn btn-default"><!-- btn btn-default Begin -->
                                   
                                   <i class="fa fa-refresh"></i> Update Cart
                                   
                               </button><!-- btn btn-default Finish -->
                               
                               <a href="checkout.php" class="btn btn-primary">
                                   
                                   Proceed Checkout <i class="fa fa-chevron-right"></i>
                                   
                               </a>
                               
                           </div><!-- pull-right Finish -->
                           
                       </div><!-- box-footer Finish -->
                       
                   </form><!-- form Finish -->
                   
               </div><!-- box Finish -->
               <?php

               function update_cart(){

                   global $con;

                   if(isset($_POST['update'])){

                       foreach($_POST['remove'] as $remove_id){

                           $delete_product = "delete from cart where p_id='$remove_id'";

                           $run_delete = mysqli_query($con,$delete_product);

                           if($run_delete){

                               echo "<script>window.open('cart.php','_self')</script>";

                           }

                       }

                   }

               }

               echo @$up_cart = update_cart();

               ?>

               <div id="row same-heigh-row"><!-- #row same-heigh-row Begin -->
                   <div class="col-md-3 col-sm-6"><!-- col-md-3 col-sm-6 Begin -->
                       <div class="box same-height headline"><!-- box same-height headline Begin -->
                           <h3 class="text-center">Products You Maybe Like</h3>
                       </div><!-- box same-height headline Finish -->
                   </div><!-- col-md-3 col-sm-6 Finish -->

                   <?php

                   $get_products = "select * from products order by rand() LIMIT 0,3";

                   $run_products = mysqli_query($con,$get_products);

                   while($row_products=mysqli_fetch_array($run_products)){

                       $pro_id = $row_products['product_id'];

                       $pro_title = $row_products['product_title'];

                       $pro_price = $row_products['product_price'];

                       $pro_img1 = $row_products['product_img1'];

                       echo "
                       
                    <div class='col-md-3 col-sm-6 center-responsive'><!-- col-md-3 col-sm-6 center-responsive Begin -->
                       <div class='product same-height'><!-- product same-height Begin -->
                           <a href='details.php?pro_id=$pro_id'>
                               <img class='img-responsive' src='images/Book_img/$pro_img1' alt='Product 6'>
                            </a>
                            
                            <div class='text'><!-- text Begin -->
                                <h3><a href='details.php?pro_id=$pro_id'> $pro_title </a></h3>
                                
                                <p class='price'>$pro_price Tk</p>
                                
                            </div><!-- text Finish -->
                            
                        </div><!-- product same-height Finish -->
                   </div><!-- col-md-3 col-sm-6 center-responsive Finish -->
                   
                       ";

                   }

                   ?>

               </div><!-- #row same-heigh-row Finish -->

           </div><!-- col-md-9 Finish -->

           <div class="col-md-3"><!-- col-md-3 Begin -->

               <div id="order-summary" class="box"><!-- box Begin -->

                   <div class="box-header"><!-- box-header Begin -->

                       <h3>Order Summary</h3>

                   </div><!-- box-header Finish -->

                   <p class="text-muted"><!-- text-muted Begin -->

                       Shipping and additional costs are calculated based on value you have entered

                   </p><!-- text-muted Finish -->

                   <div class="table-responsive"><!-- table-responsive Begin -->

                       <table class="table"><!-- table Begin -->

                           <tbody><!-- tbody Begin -->

                           <tr><!-- tr Begin -->

                               <td> Order All Sub-Total </td>
                               <th> <?php echo $total; ?>TK </th>

                           </tr><!-- tr Finish -->

                           <tr><!-- tr Begin -->

                               <td> Shipping and Handling </td>
                               <td> 0 TK </td>

                           </tr><!-- tr Finish -->

                           <tr><!-- tr Begin -->

                               <td> Tax </td>
                               <th> 0 TK </th>

                           </tr><!-- tr Finish -->

                           <tr class="total"><!-- tr Begin -->

                               <td> Total </td>
                               <th> <?php echo $total ."TK"; ?>  </th>

                           </tr><!-- tr Finish -->

                           </tbody><!-- tbody Finish -->

                       </table><!-- table Finish -->
                       
                   </div><!-- table-responsive Finish -->
                   
               </div><!-- box Finish -->
               
           </div><!-- col-md-3 Finish -->
           
       </div><!-- container Finish -->
   </div><!-- #content Finish -->
   
   <?php 
    
    include("footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>