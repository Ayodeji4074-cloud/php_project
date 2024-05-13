<!DOCTYPE html>
<html class="no-js">
<head>

    <meta charset="utf-8">
    <title>Gaming Platform</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/mandu.css">
    <link rel="stylesheet" href="css/mandu-style.css">

    <style> 
        .button {
            background-color: #007bff; /* Blue background color */
            color:rgb(from color r g b); /* White text color */
            padding: 10px 20px; /* Padding around the text */
            border: none; /* Remove button border */
            border-radius: 5px; /* Rounded corners */
            cursor: pointer; /* Change cursor to pointer on hover */
            font-size: 16px; /* Font size */
            text-transform: uppercase; /* Uppercase text */
            font-weight: bold; /* Bold font weight */
            transition: background-color 0.3s ease; /* Smooth transition for background color change */
        }

        .button:hover {
            background-color: #0056b3; /* Darker blue color on hover */
        }

        
    </style>


    <script src="js/vendor/modernizr-2.6.2.min.js"></script>

</head>
<body>

    
    <header class="site-header">
        <div class="top-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <div class="top-header-left">
                        </div> <!-- /.top-header-left -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-6">
                        <div class="social-icons">
                            <ul>
                                <li><a href="#" class="fa fa-facebook"></a></li>
                                <li><a href="#" class="fa fa-dribbble"></a></li>
                                <li><a href="#" class="fa fa-twitter"></a></li>
                                <li><a href="#" class="fa fa-linkedin"></a></li>
                            </ul>
                            <div class="clearfix"></div>
                        </div> <!-- /.social-icons -->
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.top-header -->
        <div class="main-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-8">
                        <div class="logo">
                            <h1><a href="#">MANDU'S GAME</a></h1>
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-4">
                        <div class="main-menu">
                            <a href="#" class="toggle-menu">
                                <i class="fa fa-bars"></i>
                            </a>
                            <ul class="menu">
                                <li><a href="home.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                            </ul>
                        </div> <!-- /.main-menu -->
                    </div> <!-- /.col-md-8 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-header -->
        <div class="main-nav">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-7">
                        <div class="list-menu">
                            <ul>
                                <li><a href="products.php">Shop</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div> <!-- /.list-menu -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-5">
                        <div class="notification">
                        </div>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-nav -->
    </header> <!-- /.site-header -->




<?php
// Retrieving product details from URL parameters
$id = $_GET['id'];
$name = $_GET['name'];
$price = $_GET['price'];
?>



    <h1>Product Details</h1>
    <p style="font-size: larger;" style="font-family: 'Times New Roman', Times, serif;">Name: <?php echo $name; ?></p>
    <p style="font-size: larger;" style="font-family: 'Times New Roman', Times, serif;">Price: $<?php echo $price; ?></p>
    <form id="paymentForm" action="send_email.php" method="post">
        <button type="submit" class="button">Make Payment Here!</button>
    </form>


    <footer class="site-footer">
        <div class="our-partner">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="customNavigation">
                            <a class="btn prev"><i class="fa fa-angle-left"></i></a>
                            <a class="btn next"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <div id="owl-demo" class="owl-carousel">
                            <div class="item"> 
                            	<a href="#"><img src="images/gm1.jpg" alt=""></a>
                          	</div>
                            <div class="item">
                                <a href="#"><img src="images/gm2.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/gm3.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/gm4.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/gm5.jpg" alt=""></a>
                            </div>
                            <div class="item">
                                <a href="#"><img src="images/gm6.jpg" alt=""></a>
                            </div>
                        </div> <!-- /#owl-demo -->
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.our-partner -->
        <div class="main-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <ul class="follow-us">
                                <li><a href="#"><i class="fa fa-facebook"></i>Facebook</a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i>Twitter</a></li>
                            </ul> <!-- /.follow-us -->
                        </div> <!-- /.footer-widget -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-3">
                        <div class="footer-widget">
                            <h3 class="widget-title">Why Choose Us?</h3>
                            <p> A Reliable Gaming Platfrom </p>
                        </div> <!-- /.footer-widget -->
                    </div> <!-- /.col-md-3 -->
                    <div class="col-md-2">
                        <div class="footer-widget">
                            <h3 class="widget-title">Useful Links</h3>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="contact.php">Help</a></li>
                            </ul>
                        </div> <!-- /.footer-widget -->
                    </div> <!-- /.col-md-2 -->
                    <div class="col-md-4">
                        <div class="footer-widget">
                        </div> <!-- /.footer-widget -->
                    </div> <!-- /.col-md-4 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-footer -->
        <div class="bottom-footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 text-center">
                        <span>Copyright &copy; 2024 <a href="#">Mandu's Game</a></span>
                    </div> <!-- /.col-md-12 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.bottom-footer -->
    </footer> <!-- /.site-footer -->

    

    <script src="js/bootstrap.js"></script>
    <script src="js/main.js"></script>


</body>
</html>