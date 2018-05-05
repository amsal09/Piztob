<?php

	include('file/config.php');
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | E-Shopper</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/price-range.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<link href="css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
	<?php 
		include('header.php');

		$id=$_GET['id'];

		$query = "SELECT * FROM product WHERE id_product=$id"; // Query untuk menampilkan semua data siswa
        $sql = mysqli_query($mysqli, $query); // Eksekusi/Jalankan query dari variabel $query

	 ?>

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="product-details"><!--product-details-->
						<?php 
							while ($row = mysqli_fetch_object($sql)) {
								
						 ?>
						<div class="col-sm-6">
							<div class="view-product">
								<img src=<?php echo 'images/'.$row->gambar.''; ?> alt="" />
							</div>
						</div>
						<div class="col-sm-6">
							<div class="product-information"><!--/product-information-->
								
								<h2><?php echo $row->nama_product; ?></h2>
								<p>Product ID: <?php echo $row->id_product; ?></p>
								<img src="images/product-details/rating.png" alt="" />
								<span>
									<span>Rp. <?php echo $row->harga; ?></span>
									<a href="cart.php?id= <?php echo $row->id_product; ?>&action=add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
								</span>
								<p><b>Availability:</b> In Stock</p>
								<!-- <p><b>Condition:</b> New</p> -->
								<!-- <p><b>Brand:</b> E-SHOPPER</p> -->
								<a href=""><img src="images/product-details/share.png" class="share img-responsive"  alt="" /></a>
							</div><!--/product-information-->
						</div>
						<?php } ?>
					</div><!--/product-details-->
				</div>
			</div>	
		</div>
	</section>

	<?php 
		include('footer.php');
	 ?>
	
    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>