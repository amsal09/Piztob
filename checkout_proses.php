<?php
require 'file/config.php';
require 'item.php';
error_reporting(0);

$total=$_GET['harga_akhir'];

$email = $_SESSION['email'];
$query = "SELECT * FROM user WHERE email = '$email'";
$sql = mysqli_query($mysqli,$query);
$row = mysqli_fetch_array($sql);
$id_user = $row['id'];
// $email_user = $row['email'];

// echo $total;

$sql3 = "INSERT INTO `order` (`total`, `user_id`, `email`) VALUES ($total,$id_user,'$email')";
$result=mysqli_query($mysqli, $sql3);

if($result){
	// echo $id_user;
	$sel ="SELECT MAX(`id_order`) AS maksimal FROM `order` WHERE user_id=$id_user;";
	$data =mysqli_query($mysqli, $sel);
	$row = mysqli_fetch_array($data);
	$id_order = $row['maksimal'];

	$sela ="SELECT * FROM `cart` WHERE `id_user`= $id_user;";
	$cart =mysqli_query($mysqli, $sela);
	$baru = mysqli_fetch_array($cart);
	$a = $baru['id_product'];
	$b = $baru['quantity'];
	// echo $a;
	// echo $b;

		$sql2 = "INSERT INTO `order_list` (`id_order`,`id_product`, `quantity`) VALUES ($id_order,$a,$b)";
		$result=mysqli_query($mysqli, $sql2);
	}
	// if ($total>100000) {
	// 			include "file/random.php";
	// 			 $random = random_string(0);
	// 			 $toe = "PIZTOB-".$random."";
	// 			 $potongan = 10000;
	// 			 $status = 'Tidak';	
	// 			 $sql4 = "INSERT INTO `kupon` (`user_id`, `code_kupon`, `potongan`, `status_kupon`) VALUES ($id_user,'$toe',$potongan,'$status')";
	// 			$hsl =mysqli_query($mysqli, $sql4);
	// 	}

		if ($result) {
			$baru = "DELETE FROM `cart` WHERE `id_user`=$id_user";
			$result =mysqli_query($mysqli, $baru);
			
			header('location: process.php?total='.$total.' ');

		}else
			echo mysqli_error($mysqli);






// Clear all product in cart
unset($_SESSION['cart']);
 ?>
 
