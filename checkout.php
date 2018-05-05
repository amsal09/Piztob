<?php
require 'file/config.php';
require 'item.php';
error_reporting(0);

$email = $_SESSION['email'];
$query = "SELECT * FROM user WHERE email = '$email'";
$sql = mysqli_query($mysqli,$query);
$row = mysqli_fetch_array($sql);
$id_user = $row['id'];
// $email_user = $row['email'];



$s=0;
$cart = unserialize(serialize($_SESSION['cart']));
for($i=0; $i<count($cart);$i++) {
  $k = unserialize(serialize($cart[$i]->id)); 
  $j = unserialize(serialize($cart[$i]->quantity));
  // echo $k;
  // echo $j;

	$s += $cart[$i]->quantity * $cart[$i]->price;
 
}

$sql3 = "INSERT INTO `order` (`total`, `user_id`, `email`) VALUES ($s,$id_user,'$email')";
$result=mysqli_query($mysqli, $sql3);

if($result){
	// echo $id_user;
	$sel ="SELECT MAX(`id_order`) AS maksimal FROM `order` WHERE user_id=$id_user;";
	$data =mysqli_query($mysqli, $sel);
	$row = mysqli_fetch_array($data);
	$id_order = $row['maksimal'];
	// $total = $row['total'];
	// echo $total;
	
	// echo $id_order;
	$jumlah=0;
	for($i=0; $i<count($cart);$i++) {
	  	$a = unserialize(serialize($cart[$i]->id)); 
	  	$b = unserialize(serialize($cart[$i]->quantity));
		$jumlah+= $cart[$i]->quantity * $cart[$i]->price;

 		$sql2 = "INSERT INTO `order_list`(`id_order`,`id_product`, `quantity`) VALUES ($id_order,$a,$b)";
		$result=mysqli_query($mysqli, $sql2);

}
		// $semua = $jumlah;
		if ($jumlah>100000) {
				include "file/random.php";
				 $random = random_string(0);
				 $toe = "PIZTOB-".$random."";
				 $potongan = 10000;
				 $status = 'Tidak';	
				 $sql4 = "INSERT INTO `kupon` (`user_id`, `code_kupon`, `potongan`, `status_kupon`) VALUES ($id_user,'$toe',$potongan,'$status')";
				$hsl =mysqli_query($mysqli, $sql4);
		}

		if ($result) {
			echo 'Thanks for buying products. Click <a href="index.php">here</a> to continue purchasing products.';
			echo $toe;
		}else
			echo mysqli_error($mysqli);
		}





// Clear all product in cart
unset($_SESSION['cart']);
 ?>
 
