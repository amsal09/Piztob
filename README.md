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
	 ?>

	<section id="slider"><!--slider-->
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div id="slider-carousel" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#slider-carousel" data-slide-to="0" class="active"></li>
							<li data-target="#slider-carousel" data-slide-to="1"></li>
							<li data-target="#slider-carousel" data-slide-to="2"></li>
						</ol>

						<div class="carousel-inner">
							<div class="item active">
								<div class="col-sm-6">
									<h1><span>Piz</span>-Tob</h1>
									<h2>Nikmati Promo-promo menarik</h2>
									
								</div>
								<div class="col-sm-6">
									<img src="images/Wings/wings1.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>
							<div class="item">
								<div class="col-sm-6">
									<h1><span>Piz</span>-Tob</h1>
									<h2>Nikmati Promo-promo menarik</h2>
									
								</div>
								<div class="col-sm-6">
									<img src="images/Pasta/index3.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>

							<div class="item">
								<div class="col-sm-6">
									<h1><span>Piz</span>-Tob</h1>
									<h2>Nikmati Promo-promo menarik</h2>
									
								</div>
								<div class="col-sm-6">
									<img src="images/Rice/images2.jpg" class="girl img-responsive" alt="" />
								</div>
							</div>

						</div>

						<a href="#slider-carousel" class="left control-carousel hidden-xs" data-slide="prev">
							<i class="fa fa-angle-left"></i>
						</a>
						<a href="#slider-carousel" class="right control-carousel hidden-xs" data-slide="next">
							<i class="fa fa-angle-right"></i>
						</a>
					</div>

				</div>
			</div>
		</div>
	</section><!--/slider-->

	<section>
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="features_items"><!--features_items-->
						<h2 class="title text-center">Menus</h2>
					<div class="col-sm-4">
                    	<div class="product-image-wrapper">
                        	<div class="single-products">
                            	<div class="productinfo text-center">
                                	<img src="images/Pizza/piz.jpg" />
                                	<h2>Pizza</h2>
                            	</div>
                            	<a href="menu_piz.php">
                            		<div class="product-overlay">
                                		<div class="overlay-content">
                                    		<h2>PIZZA</h2>
                                		</div>
                            		</div>
                            	</a>
                        	</div>
                     	</div>
                	</div>

                	<div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/Wings/images.jpg" />
                                            <h2>Wing</h2>
                                        </div>
                                        <a href="menu_wing.php">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <h2>WING</h2>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                            </div>
                        </div>

                     <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/Dessert/cheesecake.jpg" />
                                            <h2>Dessert</h2>
                                        </div>
                                        <a href="menu_des.php">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                    <H2>DESSERT</H2>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                            </div>
                        </div>

                    <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/Rice/images2.jpg" />
                                            <h2>Rice</h2>
                                        </div>

                                        <a href="menu_rice.php">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                 <h2>RICE</h2>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/Pasta/index3.jpg" />
                                            <h2>Pasta</h2>
                                        </div>

                                        <a href="menu_pas.php">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
                                                   <h2>PASTA</h2>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                            </div>
                        </div>


                        <div class="col-sm-4">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img src="images/Drink/screwdriver.jpg" />
                                            <h2>Drink</h2>
                                        </div>
                                        <a href="menu_drink.php">
                                            <div class="product-overlay">
                                                <div class="overlay-content">
	                                                    <h2>DRINK</h2>
                                                </div>
                                            </div>
                                        </a>
                                </div>
                            </div>
                        </div>


				</div>
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
