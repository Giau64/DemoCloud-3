<link rel="stylesheet" href="style.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<div class="container">
    <h1><u><b>Product Detail</b></u></h1>
    <?php
	include_once("connection.php");
	if(isset($_GET['ma'])){
		$id=$_GET['ma'];
		$result = pg_query($conn, "SELECT * FROM public.product Where product_id='$id'");
		if (!$result) { //add this check.
 			die('Invalid query: ' . pg_errormessage($conn));
		}
 		while($row = pg_fetch_array($result,NULL, PGSQL_ASSOC)){
 	?>
    <form method="GET" action="#">
        <div class="col-sm-5">
            <img src="product-imgs/<?php echo $row['image']?>" style="width:100%">
        </div>
        <div class="col-sm-7"></div>
        
        <div class="price">PRICE: <ins>$
                <?php echo  $row['price']?>
            </ins> </div>
        
     
        <br>
        <button  type="submit" class="btn btn-primary">Add to Cart</button>
</div>
</form>
<div class="container">
    <div class="col-sm-12">
        <h2><b>The detail information of product</b></h2>
        <h4>
            <?php echo $row['prodes']?>
        </h4>
    </div>
</div>

<?php
}
}
?>