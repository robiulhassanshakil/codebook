<?php

include("header.php");
include("functions/p_function.php");



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

                    <li class="active">
                        <a href="index.php">Home</a>
                    </li>
                    <li>
                        <a href="shop.php">Shop</a>
                    </li>
                    <li>
                        <a href="customer/my_account.php">My Account</a>
                    </li>
                    <li >
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

<?php


include("slider.php");

?>
   <div id="advantages"><!-- #advantages Begin -->
       
       <div class="container"><!-- container Begin -->
           
           <div class="same-height-row"><!-- same-height-row Begin -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-heart"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Authors</a></h3>
                       
                       <p>লেখক! আক্ষরিক ভাবে বলতে গেলে সৃজনশীল কোনকিছু লেখেন যিনি তাকেই লেখক বলা যায়। কিন্তু ‘লেখক’ শব্দটির ব্যাপ্তি আসলে এতোটুকুতেই সীমাবদ্ধ নয়। লেখক এই বাস্তবিক জগতের সমান্তরালে একটি কাল্পনিক পৃথিবী তৈরির ক্ষমতা রাখেন। কাল্পনিক চরিত্রগুলো তার লেখনী ও কলমের প্রাণখোঁচায় জীবন্ত হয়ে ওঠে। একজন লেখক তাঁর লেখার মাধ্যমে একটি প্রজন্মের চিন্তাধারা গড়ে দিতে পারেন। তাই লেখকদের কিংবদন্তী ..
                       </p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-tag"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Categories</a></h3>
                       
                       <p>লক্ষাধিক বইয়ের সংগ্রহ CodeBook.com। বইয়ের এই বিশাল সমুদ্র-মন্থনে পাঠকের সুবিধার্থে প্রায় ৫০ টির মতো ক্যাটাগরি ও সহস্রাধিক বিষয়ভিত্তিক ক্যাটাগরি রয়েছে CodeBook.com। যার ফলে খুব সহজেই পাঠক তার পছন্দের ক্যাটাগরি বেছে নিয়ে নির্দিষ্ট বিষয়ভিত্তিক বইগুলো খুঁজে পাবে খুব সহজেই।CodeBook.com এই বিশাল বইয়ের সমুদ্রে জ্ঞানের জাহাজের নাবিক হতে আপনাকে নিমন্ত্রণ। মানচিত্রটা ধরা আছে নিচেই...</p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
               <div class="col-sm-4"><!-- col-sm-4 Begin -->
                   
                   <div class="box same-height"><!-- box same-height Begin -->
                       
                       <div class="icon"><!-- icon Begin -->
                           
                           <i class="fa fa-thumbs-up"></i>
                           
                       </div><!-- icon Finish -->
                       
                       <h3><a href="#">Publisher</a></h3>
                       
                       <p>সাহিত্যের আঁতুড়ঘর। সাহিত্যের সঠিক মূল্যায়ন করে পাঠকের কাছে উন্মুক্ত করে দেয়ার গুরুদায়িত্ব এই প্রকাশকদের। কেবল বই প্রকাশ নয়,ভালো মানের সাহিত্য বই আকারে নিয়মিত প্রকাশ করে প্রকাশকরা সাহিত্যের ধারা সচলভাবে অব্যাহত রাখেন। পাণ্ডুলিপি,ছাপা,মুদ্রণপ্রমাদ,সব বাঁধা-ত্যাগ-তিতিক্ষা পার করে যখন একটি বাঁধাই করা বই,এক টুকরো সাহিত্য ফসল পাঠকের সাহিত্য রসের ক্ষুধা পূরণ করে তখনই প্রকাশক সার্থক। </p>
                       
                   </div><!-- box same-height Finish -->
                   
               </div><!-- col-sm-4 Finish -->
               
           </div><!-- same-height-row Finish -->
           
       </div><!-- container Finish -->
       
   </div><!-- #advantages Finish -->
   
   <div id="hot"><!-- #hot Begin -->
       
       <div class="box"><!-- box Begin -->
           
           <div class="container"><!-- container Begin -->
               
               <div class="col-md-12"><!-- col-md-12 Begin -->
                   
                   <h2>
                       Our Latest Products
                   </h2>
                   
               </div><!-- col-md-12 Finish -->
               
           </div><!-- container Finish -->
           
       </div><!-- box Finish -->
       
   </div><!-- #hot Finish -->
   
   <div id="content" class="container"><!-- container Begin -->
       
       <div class="row"><!-- row Begin -->
           
           <?php
           getPro();
           ?>
       </div><!-- row Finish -->
       
   </div><!-- container Finish -->
   
   <?php 
    
    include("footer.php");
    
    ?>
    
    <script src="js/jquery-331.min.js"></script>
    <script src="js/bootstrap-337.min.js"></script>
    
    
</body>
</html>