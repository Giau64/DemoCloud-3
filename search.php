  
    <div class="single-product-area">
        <div class="zigzag-bottom"></div>
        <div class="container">
        <?php

                    include_once("connection.php");
                    if (isset($_POST["txtSearch"])) {
                        $data = $_POST['txtSearch'];
                        if($data=="")
                        {
                            echo "<script>alert('Please Enter Data!')</script>";
                            echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                        }
                        else {
                    $result = pg_query($conn, "SELECT * FROM public.product where product_id like '%".$data."%' or product_name like '%".$data."%'");
                    if(pg_num_rows($result)==0)
                    {
                    echo  "<script>alert('No find data. Please Enter Again!')</script>";
                    echo '<meta http-equiv="refresh" content="0;URL=index.php">';
                    }
                    else {
                    if (!$result) { //add this check.
                    die('Invalid query: ' . pg_errormessage($conn));
                    }
                    else {
                    while($row = pg_fetch_array($result,NULL,PGSQL_ASSOC)){
                    ?>
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="single-shop-product">
                        <div class="product-upper">
                            <img src="product-imgs/<?php echo $row['image']?>" alt="">
                        </div>
                        <h2><a href=""><?php echo  $row['product_name']?></a></h2>
                        <div class="product-carousel-price">
                            <ins><?php echo  $row['price']?></ins> 
                        </div>  
                        
                        <div class="product-option-shop">
                            <a class="add_to_cart_button" data-quantity="1" data-product_sku="" data-product_id="70" rel="nofollow" href="/canvas/shop/?add-to-cart=70">Add to cart</a>
                        </div>                       
                    </div>
                </div>
                <?php
				}
      }
    }
  }
}
?>
               
               
               
               
              
               
            
            <div class="row">
                <div class="col-md-12">
                    <div class="product-pagination text-center">
                        <nav>
                          <ul class="pagination">
                            <li>
                              <a href="#" aria-label="Previous">
                                <span aria-hidden="true">&laquo;</span>
                              </a>
                            </li>
                            <li><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li>
                              <a href="#" aria-label="Next">
                                <span aria-hidden="true">&raquo;</span>
                              </a>
                            </li>
                          </ul>
                        </nav>                        
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