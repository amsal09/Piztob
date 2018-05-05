<?php

	include('file/config.php');
 ?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Product | PizTob</title>
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
	<?php include('header.php');
	?>

	<section>
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Product</li>
			</ul>
			<div class="row">
				<div class="col-sm-12">
					<?php
										$query = "SELECT * FROM product ORDER BY category_product";
										$sql = mysqli_query($mysqli, $query);
									 ?>
				<?php while($row = mysqli_fetch_object($sql)) { ?>
					<div class="col-sm-4">
							<div class="product-image-wrapper">
								<div class="single-products">
										<div class="productinfo text-center">
											<img src=<?php echo 'images/'.$row->gambar.''; ?> alt="" />
											<h2>Rp. <?php echo $row->harga; ?></h2>
											<h3><?php echo $row->nama_product; ?></h3>
											<a href="details-product.php?id=<?php echo $row->id_product; ?>" class="btn btn-default add-to-cart"> <i class="fa fa-info"></i>Details</a>
											<a href="cart.php?id= <?php echo $row->id_product; ?>&action=add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
							</div>
					</div>
				<?php } ?>
				</div>
			</div>
		</div>
	</section>

	 <footer class="footer">
    <div class="container">
      <hr>
      <div class="footer-top">
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="companyinfo">
							<h2><span>Piz</span>-Tob</h2>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit,sed do eiusmod tempor</p>
						</div>
					</div>
					<div class="col-sm-8">
					<div class="col-sm-5" style="float:right">
						<div class="address">
							<img src="images/home/map.png" alt="" />
							<p>Jalan Sisingamangaraja Sitoluama, Institut Teknologi Del</p>
						</div>
					</div>
				</div>
			</div>
		</div>
        <p class="pull-left">&copy; PizTob <?= date('Y'); ?></p>
    </div>
</footer>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
