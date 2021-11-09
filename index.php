<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TNG RICH</title>
    <link rel="shortcut icon" type="image/x-icon" href="logo/mau-logo-vo-thuat-co-truyen-01.JPG">
    
    <!-- Google Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,300,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:400,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Raleway:400,100' rel='stylesheet' type='text/css'>
    
    <!-- Bootstrap -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/responsive.css">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <?php

	session_start();
	include_once("connection.php");
    
    
?>
  <body>
   
    <div class="header-area">
        <div class="container">
            <div class="row">
                
                <div class="col-md-12">
                    <div class="header-right">
                        <ul class="list-unstyled list-inline">
                        <?php
			if(isset($_SESSION['us']) &&  isset($_SESSION['admin']) && $_SESSION['us'] !="")
			{
				if($_SESSION['admin'] == 0)
				{
                    ?>
                    <form class="navbar-form navbar-left" action="index.php?page=search" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="txtSearch">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
                       
                      
						<li><a href="?page=update_customer"><i class="glyphicon glyphicon-user"></i>Hello ,<?php echo $_SESSION['us']?> </a></i>
						<li><a href="?page=logout"><i class="glyphicon glyphicon-log-out"></i> Log out</a></li>
					<?php 
				}
				elseif($_SESSION['admin'] == 1)
				{
					?>
						<form class="navbar-form navbar-left" action="index.php?page=search" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="txtSearch">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
							<li><a href="?page=category">Manage Category</a></li>
							<li><a href="?page=product">Manage Product</a></li>
                           
						
                        
						<li><a href="?page=update_customer"><i class="glyphicon glyphicon-user"></i> Hello, <?php echo $_SESSION['us']; ?> </a></i>
						<li><a href="?page=logout"><i class="glyphicon glyphicon-log-out"></i> Log out</a></li>
					<?php 
				}
			}
			else
				{
				?>
            <form class="navbar-form navbar-left" action="index.php?page=search" method="post">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search" name="txtSearch">
                        </div>
                        <button type="submit" class="btn btn-default">Search</button>
                    </form>
			<li><a href="?page=login"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
			<li><a href="?page=register"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
			<?php
				}
			?>
                           
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End header area -->
    
    <div class="site-branding-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="logo">
                        <h1><a href="./"><img src="img/logoATN.png"width=250px ></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt">$0</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">0</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End site branding area -->
    <div class="mainmenu-area">
        <div class="container">
            <div class="row">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div> 
                <div class="navbar-collapse collapse">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="index.php">Home</a></li>
                        <li><a href="?page=shop">Shop page</a></li>
                        <li><a href="single-product.php">Single product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> 
    <?php
    if(isset($_GET['page'])){
        $page =$_GET['page'];
        if($page=="login"){
            include_once("login.php");
            
        }elseif($page== "register"){
            include_once("register.php");
        }elseif($page== "logout"){
            include_once("logout.php");
        }elseif($page== "category"){
            include_once("category.php");
        }elseif($page== "add_category"){
            include_once("addcategory.php");
        }elseif($page== "update_category"){
            include_once("updatecategory.php");
        }elseif($page== "product"){
            include_once("productmanage.php");
        }elseif($page== "add_product"){
            include_once("addproduct.php");
        }elseif($page== "productype"){
            include_once("productype.php");
        }elseif($page== "shop"){
            include_once("shop.php");
        }elseif($page== "search"){
            include_once("search.php");
        }elseif($page== "update_product"){
            include_once("updateproduct.php");
        }
    }
    else{
        include_once("content.php");
    }
    ?>
    <!-- End product widget area -->
    
    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Kids'<span>Toys</span></h2>
                        <p>Customers can search and content can contact admin through the features described below in detail</p>
                        <div class="footer-social">
                            <a href="#" target="_blank"><i class="fa fa-facebook"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-twitter"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-youtube"></i></a>
                            <a href="#" target="_blank"><i class="fa fa-linkedin"></i></a>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">User Navigation </h2>
                        <ul>
                            <li><a href="#">My account</a></li>
                            <li><a href="#">Order history</a></li>
                            <li><a href="#">Wishlist</a></li>
                            <li><a href="#">Vendor contact</a></li>
                            <li><a href="#">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="#">Product Toys</a></li>
                            <li><a href="#">Home Toys</a></li>
                            <li><a href="#">Car Toys</a></li>
                            <li><a href="#">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <form action="#">
                                <input type="email" placeholder="Type your email">
                                <input type="submit" value="Subscribe">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer top area -->
    
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                        <p>&copy; 2021 ShopKid'sToys. All Rights Reserved. <a href="https://www.facebook.com/" target="_blank">TNGRich.com</a></p>
                    </div>
                </div>
                
                <div class="col-md-4">
                    <div class="footer-card-icon">
                        <i class="fa fa-cc-discover"></i>
                        <i class="fa fa-cc-mastercard"></i>
                        <i class="fa fa-cc-paypal"></i>
                        <i class="fa fa-cc-visa"></i>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End footer bottom area -->
   
    <!-- Latest jQuery form server -->
    <script src="https://code.jquery.com/jquery.min.js"></script>
    
    <!-- Bootstrap JS form CDN -->
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    
    <!-- jQuery sticky menu -->
    <script src="js/owl.carousel.min.js"></script>
    <script src="js/jquery.sticky.js"></script>
    
    <!-- jQuery easing -->
    <script src="js/jquery.easing.1.3.min.js"></script>
    
    <!-- Main Script -->
    <script src="js/main.js"></script>
    
    <!-- Slider -->
    <script type="text/javascript" src="js/bxslider.min.js"></script>
	<script type="text/javascript" src="js/script.slider.js"></script>
  </body>
</html>