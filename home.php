<!DOCTYPE html>
 <html class="no-js">
<head>

    <meta charset="utf-8">
    <title>Mandu's Games</title>

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

    .product-thumb img {
    width: 200px;
    height: 200px; 
    object-fit: cover; 
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
                            <a href="entrance.php">Log Out</a>
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
                            <span>Free Voucher for game orders above $50</span>
                        </div>
                    </div> <!-- /.col-md-6 -->
                </div> <!-- /.row -->
            </div> <!-- /.container -->
        </div> <!-- /.main-nav -->
    </header> <!-- /.site-header -->

    

    <div class="search-section" style="margin-top: 50px;" style="margin-bottom: 50px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="search.php" method="GET" class="search-form">
                        <input type="text" name="search_query" placeholder="Search for products...">
                        <button type="submit" class="btn btn-primary">Search</button>
                    </form>

                </div>
            </div>
        </div>
    </div>

    <div class="content-section-1 gaming-intro">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="intro-text">
                        <h2>Welcome </h2>
                        <h2><span style="font-size: medium;">Your Gaming Adventure Begins Here</span></h2>
                        <p style="font-size: medium;">Experience the thrill of gaming like never before with our platform. Dive into a world of endless possibilities, where you can embark on epic quests, challenge your friends, and explore captivating virtual landscapes.</p>
                        <p style="font-size: medium;">This Project is all about the creation of platform where games can be purchase.</p>
                        <a href="products.php" class="btn btn-primary">Get Started</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="gaming-image">
                        <img src="images/gaming-intro.jpg" width="900" alt="Gaming Platform">
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="content-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title">
                    <h2>New Games</h2>
                </div> <!-- /.section -->
            </div> <!-- /.row -->
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/gm1.jpg" alt="">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content">
                            <h5><a href="#">Killer Call</a></h5>
                            <span class="price">$40.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/gm2.jpg" alt="">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content">
                            <h5><a href="#">Assassin Creed</a></h5>
                            <span class="price">$40.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/gm3.jpg" alt="">
                        </div> <!-- /.product-thumb -->
                        <div class="product-content">
                            <h5><a href="#">City Run</a></h5>
                            <span class="price">$60.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-item">
                        <div class="product-thumb">
                            <img src="images/gm4.jpg" alt="">
                        </div> <!-- /.product-thum -->
                        <div class="product-content">
                            <h5><a href="#">Call of Duty</a></h5>
                            <span class="price">$80.00</span>
                        </div> <!-- /.product-content -->
                    </div> <!-- /.product-item -->
                </div> <!-- /.col-md-3 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.content-section -->

    

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