<?php
	include("file/config.php");

if(isset($_POST['OK']))
{
	$email = secure($_POST['email'],$mysqli);
	$password = secure($_POST['password'],$mysqli);
	
	$q = "SELECT * FROM `user` WHERE `email` = '$email' AND `password` = '$password'";
	$res = mysqli_query($mysqli,$q);
	if($res)
	{
		
		if($res->num_rows == 3)
		{
			$_SESSION['email'] = $email;
			header("Location:index_admin.php");
			exit;
		}
		else
		{
			echo"<script> location='login.php';alert('INVALID USERNAME OR PASSWORD');</script>";
		}

		
		if($res->num_rows > 0 && $res->rows != 3)
		{
			$_SESSION['email'] = $email;
			header("Location:index.php");
			exit;
		}
		else
		{
			echo"<script> location='login.php';alert('INVALID USERNAME OR PASSWORD');</script>";
		}
	}
}

?>
