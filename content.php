<!-- End mainmenu area -->
    
    <div class="slider-area">
        	<!-- Slider -->
			<div class="block-slider block-slider4">
				<ul class="" id="bxslider-home4">
					<li>
						<img src="img/silde-car1.1.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Ferrari <span class="primary">Car <strong>Toys</strong></span>
							</h2>
							<h4 class="caption subtitle">Luxury</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/silde-car2.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Lux 2.0 <span class="primary">50% <strong>off</strong></span>
							</h2>
							<h4 class="caption subtitle">Car Luxury</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/slide-car3.3.jpg" alt="Slide">
						<div class="caption-group">
							<h2 class="caption title">
								Dodge <span class="primary">Charger <strong>Toys</strong></span>
							</h2>
							<h4 class="caption subtitle">DOM</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
					<li><img src="img/slide-car4.4.jpg" alt="Slide">
						<div class="caption-group">
						  <h2 class="caption title">
								MEC <span class="primary">C300 <strong>Toys</strong></span>
							</h2>
							<h4 class="caption subtitle">& Car</h4>
							<a class="caption button-radius" href="#"><span class="icon"></span>Shop now</a>
						</div>
					</li>
				</ul>
			</div>
			<!-- ./Slider -->
    </div> <!-- End slider area -->
    
    <div class="promo-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo1">
                        <i class="fa fa-refresh"></i>
                        <p>30 Days return</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo2">
                        <i class="fa fa-truck"></i>
                        <p>Free shipping</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo3">
                        <i class="fa fa-lock"></i>
                        <p>Secure payments</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="single-promo promo4">
                        <i class="fa fa-gift"></i>
                        <p>New products</p>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End promo area -->
    
    <div class="maincontent-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="latest-product">
                        <h2 class="section-title">Latest Products</h2>
                        <div class="product-carousel">
                        <?php
                            // 	include_once("database.php");
                            $result = pg_query($conn, "SELECT * FROM public.product");

                            if (!$result) { //add this check.
                                die('Invalid query: ' . pg_connect_errormessage($conn));
                            }

                        
                            while($row = pg_fetch_array($result,NULL, PGSQL_ASSOC)){
                        ?>
                            <div class="single-product">
                                <div class="product-f-image">
                                    <img src="product-imgs/<?php echo $row['image']?>" alt="">
                                    <div class="product-hover">
                                        <a href="#" class="add-to-cart-link"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                                        <a href="?page=productype&&ma=<?php echo $row['product_id']?>" class="view-details-link"><i class="fa fa-link">See Details</i> </a>
                                    </div>
                                </div>
                                
                                <h2><a href="single-product.php"><?php echo  $row['product_name']?></a></h2>
                                
                                <div class="product-carousel-price">
                                    <ins><?php echo $row['price']?></ins> <del>$950.00</del>
                                </div> 
                            </div>

                        <?php
                            }
                            ?>



                            







                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End main content area -->
    
    <div class="brands-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="brand-wrapper">
                        <div class="brand-list">
                            <img src="img/zanhieu-1.png" alt="">
                            <img src="img/zanhieu-2.jpg" alt="">
                            <img src="img/zanhieu-7.jpg" alt="">
                            <img src="img/zanhieu-4.jpg" alt="">
                            <img src="img/zanhieu-5.png" alt="">
                            <img src="img/zanhieu-6.jpg" alt="">
                            <img src="img/zanhieu-2.jpg" alt="">
                            <img src="img/zanhieu-4.jpg" alt="">                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- End brands area -->
    
    <div class="product-widget-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top Sellers</h2>
                        <a href="" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.php"><img src="img/carpro-1.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php">Bently Limousinne</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1200.00</ins> <del>$1499.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php"><img src="img/carpro-2.2.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php">Toyota Camry</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$400.00</ins> <del>$425.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php"><img src="img/carpro-3.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php">Mescedes Maybach GLS600</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1000.00</ins> <del>$1299.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Recently Viewed</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.php"><img src="img/carpro-4.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php">Mescedes-Benz S600 Maybach</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$1199.00</ins> <del>$2299.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php"><img src="img/carpro-5.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php">Mercedes Maybach S650</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$890.00</ins> <del>$1190.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php"><img src="img/carpro-6.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php">Legend Model</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$499.00</ins> <del>$699.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-product-widget">
                        <h2 class="product-wid-title">Top New</h2>
                        <a href="#" class="wid-view-more">View All</a>
                        <div class="single-wid-product">
                            <a href="single-product.php"><img src="img/carpro-7.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php">Lexus LX570 Chezhi </a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$599.00</ins> <del>$899.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php"><img src="img/carpro-8.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php">Porche 918</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$599.00</ins> <del>$799.00</del>
                            </div>                            
                        </div>
                        <div class="single-wid-product">
                            <a href="single-product.php"><img src="img/carpro-9.jpg" alt="" class="product-thumb"></a>
                            <h2><a href="single-product.php">Roll Royce Phatom VIII</a></h2>
                            <div class="product-wid-rating">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                            </div>
                            <div class="product-wid-price">
                                <ins>$699.00</ins> <del>$1199.00</del>
                            </div>                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>