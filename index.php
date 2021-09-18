<?php
  require("includes/common.php");

if (isset($_SESSION['email'])) {
    header('location: products.php');
}
?>

<!DOCTYPE html>
<html lang="en">

    <head>
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>LifeStyle Store</title>
        <link rel="shortcut icon" href="img/srtcticon.png" type="image/png">

          
        <!-- Bootstrap Core CSS -->
          <link href="css/bootstrap.css" rel="stylesheet">
        <!-- Custom CSS -->
          <link href="./css/style.css" rel="stylesheet">
        <!-- jQuery -->
          <script src="js/jquery.js"></script>
        <!-- Bootstrap Core JavaScript -->
          <script src="js/bootstrap.min.js"></script>
    </head>
    <body style="padding-top: 50px;">

        <!-- Header -->
        <?php
        include 'includes/header.php';
        ?>
        <!--Header end-->

        <div id="content">
             <!--Main banner image-->
            <div id = "banner_image">
                <div class="container">	
                    <center>
                        <div id="banner_content">
                            <h1 style="color:white;">Mobile World</h1>
                            <p style="color:white;" >Flat 10% OFF on premium brands </p>
                            <br/>
                            <a  href="products.php" class="btn btn-danger btn-lg active">Shop Now</a>
                        </div>
                    </center>
                </div>
            </div>
            <!--Main banner image end-->

            <!--Item categories listing-->
            <div class="container text-center">
                <div id="item_list">
                    <div class="panel panel-default">
                        <div>
                 <h4 >Choose From Wide Ranges Of Brands</h4>
                        </div>
                    
                    <div class="panel-body">
                        <div class="col-sm-3">
                            <a href="products.php#ios">
                               <div class="thumbnail">
                                   <img src="img/iphone_x.jpeg" alt="iphone x" >
                                        <div class="caption">
                                            <h3>Apple</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                        
                         <div class="col-sm-3">
                            <a href="products.php#samsung">
                               <div class="thumbnail">
                                   <img src="img/galaxy_s8_plus.jpeg" alt="galaxy note 8 plus" >
                                        <div class="caption">
                                            <h3>Samsung</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                        
                         <div class="col-sm-3">
                            <a href="products.php#nokia">
                               <div class="thumbnail">
                                   <img src="img/nokia_8.jpeg" alt="nokia_8" >
                                        <div class="caption">
                                            <h3>Nokia</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                        
                         <div class="col-sm-3">
                            <a href="products.php#google">
                               <div class="thumbnail">
                                   <img src="img/google_pixel_2.jpeg" alt="google_pixel_2" >
                                        <div class="caption">
                                            <h3>Google</h3>
                                        </div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
                    
                    
                    
                </div>
            </div>

            <!--Item categories listing end-->
        </div>

        <!--Footer-->
        <?php
        include 'includes/footer.php';
        ?>
        <!--Footer end-->

    </body>
</html>
