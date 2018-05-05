<?php 
require 'file/config.php';
 ?>
<!DOCTYPE html>

<?php

	
	require 'item.php';

	error_reporting(0);

	if(isset($_GET['id']) && !isset($_POST['update']))  {
	$sql = "SELECT * FROM product WHERE id_product=".$_GET['id']."";
	$result = mysqli_query($mysqli, $sql);
	$product = mysqli_fetch_object($result);
	$item = new Item();
	$item->pictures = $product->gambar;
	$item->id = $product->id_product;
	$item->name = $product->nama_product;
	$item->price = $product->harga;
	$item->quantity = 1;
	// Check product is existing in cart
	$index = -1;
	$cart = unserialize(serialize($_SESSION['cart'])); // set $cart as an array, unserialize() converts a string into array
	for($i=0; $i<count($cart);$i++){
		if ($cart[$i]->id == $_GET['id']){

			$index = $i;
			break;
		}
	}

		if($index == -1)
			$_SESSION['cart'][] = $item; // $_SESSION['cart']: set $cart as session variable
		else {

			if (($cart[$index]->quantity) < 10000){
				$cart[$index]->quantity ++;
			}
			     $_SESSION['cart'] = $cart;
		}
}
// Delete product in cart
if(isset($_GET['index']) && !isset($_POST['update'])) {
	$cart = unserialize(serialize($_SESSION['cart']));
	unset($cart[$_GET['index']]);
	$cart = array_values($cart);
	$_SESSION['cart'] = $cart;
}
// Update quantity in cart
if(isset($_POST['update'])) {
  $arrQuantity = $_POST['quantity'];
  $cart = unserialize(serialize($_SESSION['cart']));
  for($i=0; $i<count($cart);$i++) {
     $cart[$i]->quantity = $arrQuantity[$i];
  }
  $_SESSION['cart'] = $cart;
}
?>


<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Cart | E-Shopper</title>
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

	<div class="container">
		<!-- <ul class="breadcrumb">
				<li><a href="index.php">Home</a></li>
				<li class="active">Cart</li>
			</ul> -->
			<div class="row">
				<div class="col-sm-12" style="margin-bottom: 20px">
			    	<h1>Cart</h1>
			    </div>
			</div>
	</div>
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
					     $cart = unserialize(serialize($_SESSION['cart']));
					 	 $s = 0;
					 	 $index = 0;
					 	for($i=0; $i<count($cart); $i++){
					 		$s += $cart[$i]->price * $cart[$i]->quantity;
					 ?>
					<tbody>
						<tr>
							<td class="cart_product">
								<img src=<?php echo 'images/'.$cart[$i]->pictures.''; ?> alt="" width="300" height="200">
							</td>
							<td class="cart_description">
								<h4><?php echo $cart[$i]->name; ?></h4>
								<p>Product ID: <?php echo $cart[$i]->id; ?></p>
							</td>
							

							<td class="cart_price">
								<p>Rp. <?php echo $cart[$i]->price; ?></p>
							</td>
							<td class="cart_quantity">
								<input type="number" min="1" size="2" style="width: 50px" maxlength="2" value="<?php echo $cart[$i]->quantity; ?>" name="quantity[]">
							</td>
							<td class="cart_total">
								<p class="cart_total_price">Rp.<?php echo $cart[$i]->price * $cart[$i]->quantity; ?></p>
							</td>
							<td class="cart_delete">
								<a class="cart_quantity_delete" href="cart.php?index=<?php echo $index; ?>" onclick="return confirm('Are you sure?')"><i class="fa fa-times"></i></a>
							</td>

							
						</tr>

						<?php
						 	$index++;
					 	} ?>

					 	<tr>
					 		<td colspan="4" style="text-align:right; font-weight:bold"><label>Update</label>
						         <input id="saveimg" type="image" src="images/save.png" name="update" alt="Save Button" width="30">
						         <input type="hidden" name="update">
						 	</td>
					 		<td class="cart_total">
								<p class="cart_total_price">Rp.<?php echo $s; ?></p>
							</td>
					 	</tr>

					 	<tr>
					 		<td colspan="4">&nbsp;</td>
					 		<td colspan="2" style="text-align:right; font-weight:bold">
					 			<a href="index.php">Lanjut Belanja</a> | <a href="file/proses_cart.php">Lanjutkan</a>
					 		</td>
					 	</tr>


					</tbody>
				</table>
			</form>
			</div>
		</div>
	</section>

	<?php
	if(isset($_GET["id"]) || isset($_GET["index"])){
	 header('Location: cart.php');
	}
	?>

	<?php include('footer.php') ?>


    <script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.scrollUp.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
