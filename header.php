<header id="header"><!--header-->
		<div class="header_top"><!--header_top-->
			<div class="container">
				<div class="row">
					<div class="col-sm-6">
						<div class="contactinfo">
							<ul class="nav nav-pills">
								<li><a href="#"><i class="fa fa-phone"></i> +628 139710 6048</a></li>
								<li><a href="#"><i class="fa fa-envelope"></i> infoPizTob@gmail.com</a></li>
							</ul>
						</div>
					</div>
					<div class="col-sm-6">
						<div class="social-icons pull-right">
							<ul class="nav navbar-nav">
								<li><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li><a href="#"><i class="fa fa-linkedin"></i></a></li>
								<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
								<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header_top-->

		<div class="header-middle"><!--header-middle-->
			<div class="container">
				<div class="row">
					<div class="col-sm-4">
						<div class="logo pull-left">
							<a href="index.php"><img src="images/piztob.jpg" alt="" /></a>
						</div>
					</div>
					<div class="col-sm-8">
						<div class="shop-menu pull-right">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<?php


									if(isset($_SESSION['email'])){
										if($_SESSION['email']=='admin@piztob.com') {
											echo '
												<li><a href="admin/product.php"><i class="fa fa-plus"></i> Product</a></li>
												<li><a href="admin/category.php">Category<label style="color:yellow;"></label></a></li>
												<li><a href="admin/transaksi.php">Transaction<label style="color:yellow;"></label></a></li>
												<li><a href="file/logout.php" target="_self">Logout</a></li>';
										}
										else{
											echo '
											<li><a href=""><i class="fa fa-user"></i> Account</a></li>
											<li><a href=""><i class="fa fa-star"></i> Wishlist</a></li>
											<li><a href="checkout.php"><i class="fa fa-crosshairs"></i> Checkout</a></li>
											<li><a href="cart.php"><i class="fa fa-shopping-cart"></i> Cart</a></li>
											<li><a href="file/logout.php" target="_self">Logout</a></li>';
										}

									}
									else
										echo '<li><a href="login.php">Login</a></li>
													<li><a href="signup.php">Register</a></li>';
								 ?>
								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div><!--/header-middle-->

		<div class="header-bottom"><!--header-bottom-->
			<div class="container">
				<div class="row">
					<div class="col-sm-8">
						<div class="navbar-header">
							<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
								<span class="sr-only">Toggle navigation</span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
								<span class="icon-bar"></span>
							</button>
						</div>
						<div class="mainmenu pull-left">
							<ul class="nav navbar-nav collapse navbar-collapse">
								<li><a href="index.php" class="active">Home</a></li>
								<li class="dropdown"><a href="#">Shop<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="product.php">Products</a></li>
										<!-- <li><a href="product-details.html">Product Details</a></li> -->
										<li><a href="checkout.php">Checkout</a></li>
										<li><a href="cart.php">Cart</a></li>
										<!-- <li><a href="login.php">Login</a></li> -->
                                    </ul>
                                </li>
								<!-- <li class="dropdown"><a href="#">Blog<i class="fa fa-angle-down"></i></a>
                                    <ul role="menu" class="sub-menu">
                                        <li><a href="blog.html">Blog List</a></li>
										<li><a href="blog-single.html">Blog Single</a></li>
                                    </ul>
                                </li> -->
								<!-- <li><a href="404.html">404</a></li>
								<li><a href="contact-us.html">Contact</a></li> -->
							</ul>
						</div>
					</div>
					<div class="col-sm-4">
						<form method="post" action="view.php">
							<div class="search_box pull-right">
							<input type="text" placeholder="Cari Produk" name="name"/>
							<button type="submit" name="SUBMIT" id="SUBMIT" class="btn btn-info">Search</button>
						</div>
						</form>

					</div>
				</div>
			</div>
		</div><!--/header-bottom-->
	</header><!--/header-->
