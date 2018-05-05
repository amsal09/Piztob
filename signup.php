<?php
  include_once('fungsi.php');
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login | E-Shopper</title>
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
	<section id="form"><!--form-->
		<div class="container">
			<div class="row">
				<div class="col-sm-6">
					<div class="login-form"><!--login form-->
						<h1>Signup</h1>
						<p>Please fill out the following fields to signup:</p>
						<form action="signup_process.php" method="post">
							<h4>Nama Lengkap</h4>
							<input type="text" name="nama" id="nama" required />
							<h4>Alamat</h4>
							<input type="text" name="alamat" id="alamat" required />
							<h4>Nomor Telepon</h4>
							<input type="text" name="notlpn" id="notlpn" required />
							<h4>Email</h4>
							<input type="text" name="email" id="email" required />
							<h4>Nomor Sikilat</h4>
							<input type="text" name="nosikilat" id="nosikilat" required />
							<h4>Password</h4>
							<input type="password" name="password" id="password" required/>
							<span>
							
							<div style="color:#999;margin:1em 0">
			                   <h2><a href="">Reset</a></h2>
			                </div>
							<button type="submit" class="btn btn-default">SignUp</button>
						</form>
					</div>
				</div>
		</div>
	</section>
	
	<?php 
		include('file/footer.php')
	 ?>
	
    <script src="js/jquery.js"></script>
	<script src="js/price-range.js"></script>
    <script src="js/jquery.scrollUp.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
