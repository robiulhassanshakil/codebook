<?php 


    include("includes/db.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codebook Admin</title>
    <link rel="stylesheet" href="css/bootstrap-337.min.css">
    <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
   
   <div class="container"><!-- container begin -->
       <form action="" class="form-login" method="post"><!-- form-login begin -->
           <h2 class="form-login-heading"> Admin Login </h2>
           
           <input type="text" class="form-control" placeholder="Email Address" name="admin_email" required>
           
           <input type="password" class="form-control" placeholder="Your Password" name="admin_pass" required>
           
           <button type="submit" class="btn btn-lg btn-primary btn-block" name="admin_login"><!-- btn btn-lg btn-primary btn-block begin -->
               
               Login
               
           </button><!-- btn btn-lg btn-primary btn-block finish -->
           
       </form><!-- form-login finish -->
   </div><!-- container finish -->
    
</body>
</html>

<?php

if(isset($_POST['admin_login'])){
    $con=mysqli_connect("localhost","root","","cbook");


    $admin_email = $_POST['admin_email'];

    $admin_pass = ($_POST['admin_pass']);

    $select_admin = "select * from admins where admin_email='$admin_email' AND admin_pass='$admin_pass'";

    $run_admin = mysqli_query($con,$select_admin);
    $check_admin = mysqli_num_rows($run_admin);






    if($check_admin==1){



        echo "<script>alert('You are Logged in')</script>";

        echo "<script>window.open('insert_product.php?','_self')</script>";

    }else{

        echo "<script>alert('Your email or password is wrong')</script>";

    }

}

?>