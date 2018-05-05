<?php
  include("file/config.php");
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
		$email = $_SESSION['email'];
$query = "SELECT * FROM user WHERE email = '$email'";
$sql = mysqli_query($mysqli,$query);
$row = mysqli_fetch_array($sql);
$id_user = $row['id'];

	 ?>

	<section id="cart_items">
		<div class="container">
			<div class="table-responsive cart_info">
			<form method="POST" name="autoSum">
				<table class="table table-condensed">
					<thead>
						<tr class="cart_menu">
							<td class="image">Item</td>
							<td class="description"></td>
							<td class="price">Harga</td>
							<td class="quantity">Jumlah</td>
							<td class="total">Total Harga</td>
							<td></td>
						</tr>
					</thead>
					<?php
						
					    $query = "SELECT * FROM `cart` WHERE `id_user` = '$id_user'";
						$sql = mysqli_query($mysqli,$query);
						$s=0;
						while ($data = mysqli_fetch_array($sql))  { 
							$h = $data['total'];
							$s+=$h;?>
					<tbody>
						<tr>
							<td class="cart_product">
								<img src=<?php echo 'images/'.$data['gambar'].''; ?> alt="" width="300" height="200">
							</td>
							<td class="cart_description">
								
								<p>Product ID: <?php echo $data['id_product'] ?></p>
							</td>
							
							<td class="cart_price">
								<p>Rp. <?php echo $data['harga']; ?></p>
							</td>
							<td class="cart_quantity">
								<h4><?php echo $data['quantity']; ?></h4>
							</td>

							<td class="cart_total">
								<p class="cart_total_price"><?php echo $s; ?></p>
							</td>
						
						</tr>

					 	

					 	

					</tbody>
				<?php } ?>
				</table>
			</form>
			</div>
		</div>
	</section>
	
	<section>
		<div class="container">
			<div class="row">
			
			<form method="POST" action="checkout_proses.php?harga_akhir=<?php echo $s ?>">
				<div class="col-sm-6">
					<div class="total_area">
						<ul>
							<li name="total">Total Harga <span><?php echo $s; ?></span></li>
							<li name="antar">Shipping Cost <span>0</span></li>
							<li name="harga_akhir">Total <span><?php echo $s ?></span></li>
						</ul>
							<input type="submit" class="btn btn-default check_out" value="Checkout
							">
					</div>
				
				</div>
			</form>
				
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
