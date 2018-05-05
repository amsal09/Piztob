<?php
  include('file/config.php');
?>

<!DOCTYPE html>


<style>

.circle{
  border-radius: 50%;
  -moz-border-radius :30%;
  -webkit-border-radius :50%;
  width: 600px;
  height: 220px;
  }
</style>

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
			<div class="row">
				<div class="col-sm-12" >
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">PILIH JENIS PENGANTARAN</h2>
               <div class="col-sm-2">
                   
               </div>
					<div class="col-sm-4" style="margin-top: 30px">
                    	<div class="product-image-wrapper">
                        	<div class="single-products">
                            	<div class="productinfo text-center">
                                	<a href="antar.php"><img src="images/delivery.jpg" class="circle" style="width:200px"></a>
                                	<h2>DELIVERY</h2>
                            	</div>
                        	</div>
                     	</div>
                	</div>

                	<div class="col-sm-4" style="margin-top: 30px">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <a href="take.php"><img src="images/tokopizza.jpg" class="circle" style="width:220px"/></a>
                                            <h2>TAKEAWAY</h2>
                                        </div>
                                        
                                </div>
                            </div>
                        </div>

                     </center>

				</div>
			</div>

			</div>
			<div class="row">
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
