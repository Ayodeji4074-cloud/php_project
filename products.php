<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0,maximum-scale=1">

    <title>Products</title>

    <style>
        .product-list {
            display: flex;
            flex-wrap: wrap;
        }

        .product {
            width: 50%;
            box-sizing: border-box;
            padding: 10px;
        }

        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
        }
        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        } 
        .container p {
            font-size: medium;
            text-align: justify;
            margin-bottom: 20px;
        }
    </style>

    <!-- Loading my third party fonts -->
    <link href="http://fonts.googleapis.com/css?family=Roboto:100,400,700|" rel="stylesheet" type="text/css">
    <link href="fonts/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="fonts/lineo-icon/style.css" rel="stylesheet" type="text/css">

    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800" rel="stylesheet">

    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/mandu.css">
    <link rel="stylesheet" href="css/mandu-style.css">

    <script src="js/vendor/modernizr-2.6.2.min.js"></script>


    <!-- Loading main css file -->
    <link rel="stylesheet" href="style.css">


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
                            <h1><a href="#">PRODUCTS</a></h1>
                        
                        </div> <!-- /.logo -->
                    </div> <!-- /.col-md-4 -->
                    <div class="col-md-8 col-sm-6 col-xs-4">
                        <div class="main-menu">
                            <a href="#" class="toggle-menu">
                                <i class="fa fa-bars"></i>
                            </a>
                            <ul class="menu">
                                <li><a href="home.php">Home</a></li>
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
                                <li><a href="home.php">Home</a></li>
                                <li><a href="about.php">About</a></li>
                                <li><a href="contact.php">Contact</a></li>
                            </ul>
                        </div> <!-- /.list-menu -->
                    </div> <!-- /.col-md-6 -->
                    <div class="col-md-6 col-sm-5">
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-nav -->
    </header> <!-- /.site-header -->
    <!-- Header content -->
</header> <!-- /.site-header -->

<main class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="product-list" style="padding-top: 60px;">
                    <?php
                    // My Database connection
                    $servername = "localhost";
                    $username = "root"; 
                    $password = ""; 
                    $dbname = "project";

                    // Creating connection
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    // Checking connection
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // SQL query to fetch products table from my database
                    $sql = "SELECT id, product_title, price, image FROM products";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        // Fetch products from database
                        while ($row = $result->fetch_assoc()) {
                            ?>
                            <div class="product">
                                <div class="inner-product">
                                    <div class="figure-image">
                                        <a href="#"><img src="<?php echo $row['image']; ?>"
                                                                   alt="<?php echo $row['product_title']; ?>"></a>
                                    </div>
                                    <h3 class="product-title"><a
                                                href="#"><?php echo $row['product_title']; ?></a></h3>
                                    <p class="product-price">$<?php echo $row['price']; ?></p>
                                    <a href="#" class="button add-to-cart"
                                       onclick="addToCart('<?php echo $row['id']; ?>', '<?php echo $row['product_title']; ?>', '<?php echo $row['price']; ?>')">PAY</a>
                                </div>
                            </div> <!-- .product -->
                            <?php
                        }
                    } else {
                        echo "0 results";
                    }

                    // Closing database connection
                    $conn->close();
                    ?>
                </div> <!-- .product-list -->

            </div>
        </div> <!-- .row -->
    </div> <!-- .container -->
</main> <!-- .main-content -->

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

    <script>
    function addToCart(id, name, price) {
        // Redirect to payment.php with product details as URL parameters will be retrieved
        window.location.href = 'payment.php?id=' + id + '&name=' + encodeURIComponent(name) + '&price=' + price;
    }
    </script>



</body>
</html>
