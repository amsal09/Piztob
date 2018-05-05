<?php  
	include('file/config.php');

	$name=$_POST['name']; //get name value from form

	$query ="SELECT * FROM product WHERE nama_product like '%$name%'"; //query to get the search result
	$sql=mysqli_query($mysqli,$query);
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
	 ?>

<section>
		<div class="container">
			<ul class="breadcrumb">
				<li><a href="../index.php">Home</a></li>
				<li class="active">Search Product</li>
			</ul>

			<div class="row">

				<div class="col-sm-12">
					<?php while($row = mysqli_fetch_array($sql)){ ?>
					<div class="col-sm-3">
					<div class="product-image-wrapper">
						
								<div class="single-products">
										<div class="productinfo text-center">
											<img src=<?php echo 'images/'.$row['gambar'].''; ?> alt="" />
											<h2>Rp. <?php echo $row['harga']; ?></h2>
											<h3><?php echo $row['nama_product']; ?></h3>
											<a href="../details-product.php?id=<?php echo $row['id_product']?>" class="btn btn-default add-to-cart"> <i class="fa fa-info"></i>Details</a>
											<a href="../cart.php?id=<?php echo $row['id_product'] ?> &action=add" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
										</div>
								</div>
						
					</div>
			</div>
			<?php } ?>
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
