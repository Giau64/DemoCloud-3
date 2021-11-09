<!DOCTYPE html>
<!--
	ustora by freshdesignweb.com
	Twitter: https://twitter.com/freshdesignweb
	URL: https://www.freshdesignweb.com/ustora/
-->
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Product Page - Ustora Demo</title>
    
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
                        <li><a href="?page=feedback"><span class="glyphicon glyphicon-pencil"></span> Feedback</a></li>
                        <li><a href="?page=cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart ( )</a></li>
						<li><a href="?page=update_customer"><i class="glyphicon glyphicon-user"></i>Hello ,<?php echo $_SESSION['us']?> </a></i>
						<li><a href="?page=logout"><i class="glyphicon glyphicon-log-out"></i> Log out</a></li>
					<?php 
				}
				elseif($_SESSION['admin'] == 1)
				{
					?>
						
							<li><a href="?page=category">Manage Category</a></li>
							<li><a href="?page=product">Manage Product</a></li>
                            <li><a href="?page=manage_fb">Manage Feedback</a></li>
						
                        <li><a href="?page=cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart ( )</a></li>
						<li><a href="?page=update_customer"><i class="glyphicon glyphicon-user"></i> Hello, <?php echo $_SESSION['us']; ?> </a></i>
						<li><a href="?page=logout"><i class="glyphicon glyphicon-log-out"></i> Log out</a></li>
					<?php 
				}
			}
			else
				{
				?>
            <li><a href="?page=cart"><span class="glyphicon glyphicon-shopping-cart"></span> Cart ( )</a></li>
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
                        <h1><a href="./"><img src="img/logoATN.png"></a></h1>
                    </div>
                </div>
                
                <div class="col-sm-6">
                    <div class="shopping-item">
                        <a href="cart.php">Cart - <span class="cart-amunt">$699</span> <i class="fa fa-shopping-cart"></i> <span class="product-count">1</span></a>
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
                        <li><a href="index.php">Home</a></li>
                        <li><a href="shop.php">Shop page</a></li>
                        <li class="active"><a href="single-product.php">Single product</a></li>
                        <li><a href="cart.php">Cart</a></li>
                        <li><a href="checkout.php">Checkout</a></li>
                        <li><a href="#">Category</a></li>
                        <li><a href="#">Others</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>  
            </div>
        </div>
    </div> <!-- End mainmenu area -->
    
    <div class="product-big-title-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-bit-title text-center">
                        <h2>Shop Car Toys</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Search Products</h2>
                        <form action="">
                            <input type="text" placeholder="Search products...">
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Products</h2>
                        <div class="thubmnail-recent">
                            <img src="img/carpro-4.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Mescedes-Benz S600 Maybach</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$1199.00</ins> <del>$2299.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/carpro-3.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Mescedes Maybach GLS600</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$1000.00</ins> <del>$1299.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/car-5.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Lamborghini Huracan Performance</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$2299.00</ins> <del>$3399.00</del>
                            </div>                             
                        </div>
                        <div class="thubmnail-recent">
                            <img src="img/car-6.jpg" class="recent-thumb" alt="">
                            <h2><a href="">Lamborghini Aventador SVJ</a></h2>
                            <div class="product-sidebar-price">
                                <ins>$890.00</ins> <del>$1499.00</del>
                            </div>                             
                        </div>
                    </div>
                    
                    <div class="single-sidebar">
                        <h2 class="sidebar-title">Recent Posts</h2>
                        <ul>
                            <li><a href="">Mercedes-AMG G65</a></li>
                            <li><a href="">Bently Limousinne</a></li>
                            <li><a href="">Toyota Camry</a></li>
                            <li><a href="">Mescedes Maybach GLS600</a></li>
                            <li><a href="">Mercedes Maybach S650 </a></li>
                        </ul>
                    </div>
                </div>
                
                <div class="col-md-8">
                    <div class="product-content-right">
                        <div class="product-breadcroumb">
                            <a href="">Home</a>
                            <a href="">Category Name</a>
                            <a href="">Car Toys </a>
                        </div>
                        
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="product-images">
                                    <div class="product-main-img">
                                        <img src="img/carpro-9.jpg" alt="">
                                    </div>
                                    
                                    <div class="product-gallery">
                                        <img src="img/car-1.jpg" alt="">
                                        <img src="img/carpro-8.jpg" alt="">
                                        <img src="img/carpro-6.jpg" alt="">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="col-sm-6">
                                <div class="product-inner">
                                    <h2 class="product-name">Roll Royce Phatom VIII</h2>
                                    <div class="product-inner-price">
                                        <ins>$699.00</ins> <del>$1199.00</del>
                                    </div>    
                                    
                                    <form action="" class="cart">
                                        <div class="quantity">
                                            <input type="number" size="4" class="input-text qty text" title="Qty" value="1" name="quantity" min="1" step="1">
                                        </div>
                                        <button class="add_to_cart_button" type="submit">Add to cart</button>
                                    </form>   
                                    
                                    <div class="product-inner-category">
                                        <p>Category: <a href="">Summer</a>. Tags: <a href="">awesome</a>, <a href="">best</a>, <a href="">sale</a>. </p>
                                    </div> 
                                    
                                    <div role="tabpanel">
                                        <ul class="product-tab" role="tablist">
                                            <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Description</a></li>
                                            <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">Reviews</a></li>
                                        </ul>
                                        <div class="tab-content">
                                            <div role="tabpanel" class="tab-pane fade in active" id="home">
                                                <h2>Product Description</h2>  
                                                <p>The first 8th generation Rolls-Royce Phantom super luxury car in Vietnam was in early January 2019, the car was imported genuine and now has an owner. The next two 8th generation Rolls-Royce Phantoms to appear in Vietnam have a very special background because they wear Laos and Cambodia license plates. And most recently, the official 8th generation Rolls-Royce Phantom to Vietnam has appeared. This model is not in the standard version but is called the Rolls-Royce Phantom Tranquility, only 25 cars are produced worldwide.</p>
                                            </div>
                                            <div role="tabpanel" class="tab-pane fade" id="profile">
                                                <h2>Reviews</h2>
                                                <div class="submit-review">
                                                    <p><label for="name">Name</label> <input name="name" type="text"></p>
                                                    <p><label for="email">Email</label> <input name="email" type="email"></p>
                                                    <div class="rating-chooser">
                                                        <p>Your rating</p>

                                                        <div class="rating-wrap-post">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                    </div>
                                                    <p><label for="review">Your review</label> <textarea name="review" id="" cols="30" rows="10"></textarea></p>
                                                    <p><input type="submit" value="Submit"></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="related-products-wrapper">
                            <h2 class="related-products-title">Related Products</h2>
                            <div class="related-products-carousel">
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/carpro-1.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Bently Limousinne</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$1200.00</ins> <del>$1499.00</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/carpro-2.2.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Toyota Camry</a></h2>
                                    <div class="product-carousel-price">
                                        <ins>$400.00</ins> <del>$425.00</del>
                                    </div> 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/carpro-3.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Mescedes Maybach GLS600</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$1000.00</ins> <del>$1299.00</del>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/carpro-4.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Mescedes-Benz S600 Maybach</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$1199.00</ins> <del>$2299.00</del>
                                    </div>                            
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/carpro-5.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Mercedes Maybach S650</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$899.00</ins> <del>$1199.00</del>
                                    </div>                                 
                                </div>
                                <div class="single-product">
                                    <div class="product-f-image">
                                        <img src="img/carpro-6.jpg" alt="">
                                        <div class="product-hover">
                                            <a href="" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                            <a href="" class="view-details-link"><i class="fa fa-link"></i> See details</a>
                                        </div>
                                    </div>

                                    <h2><a href="">Legend Model</a></h2>

                                    <div class="product-carousel-price">
                                        <ins>$499.00</ins>
                                    </div>                            
                                </div>                                    
                            </div>
                        </div>
                    </div>                    
                </div>
            </div>
        </div>
    </div>


    <div class="footer-top-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="footer-about-us">
                        <h2>Kid's<span>Toys</span></h2>
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
                            <li><a href="">My account</a></li>
                            <li><a href="">Order history</a></li>
                            <li><a href="">Wishlist</a></li>
                            <li><a href="">Vendor contact</a></li>
                            <li><a href="">Front page</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-menu">
                        <h2 class="footer-wid-title">Categories</h2>
                        <ul>
                            <li><a href="">Product Toys</a></li>
                            <li><a href="">Home Toys</a></li>
                            <li><a href="">Car Toys</a></li>
                            <li><a href="">Gadets</a></li>
                        </ul>                        
                    </div>
                </div>
                
                <div class="col-md-3 col-sm-6">
                    <div class="footer-newsletter">
                        <h2 class="footer-wid-title">Newsletter</h2>
                        <p>Sign up to our newsletter and get exclusive deals you wont find anywhere else straight to your inbox!</p>
                        <div class="newsletter-form">
                            <input type="email" placeholder="Type your email">
                            <input type="submit" value="Subscribe">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom-area">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="copyright">
                       <p>&copy; 2021 ShopKid'sToys. All Rights Reserved. <a href="http://www.facebook.com" target="_blank">TNGRich.com</a></p>
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
    </div>
   
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
  </body>
</html>