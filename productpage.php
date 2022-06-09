<!DOCTYPE html>
<html lang="nl">

	<?php
	require 'PHP/function.php';
	$connection = dbConnect();

	// Checken of id wel is meegestuurd in de url
	if(!isset($_GET['id'])){
		echo "De ID is niet gezet";
		exit;
	}
	// Checken of het wel een getal (integer) is
	$id = $_GET['id'];
	$check_int = filter_var($id, FILTER_VALIDATE_INT);
	if($check_int == false){
		echo "Dit is geen getal (integer)";
		exit;
	}
	$statement = $connection->prepare('SELECT * FROM `products` WHERE id=?');
	$params = [$id];
	$statement->execute($params);
	$product = $statement->fetch(PDO::FETCH_ASSOC);
	?>
<head>
	<title>Product page</title>
	<meta charset="utf-8">
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/productpage.css">
</head>
<body>
	        <!--Header START-->
			<header>
				<a href=""><img src="img/LogoFaiss.png" class="logo" alt=""></a>
				<nav>
					<li><a href="index.php">Home</a></li>
					<li><a href="#Shop">Shop</a></li>
					<li><a href="#">Ontwerpen</a></li>
					<li><a href="#">Over ons</a></li>
					<li><a href="contact.html">Contact</a></li>
				</nav>
			</header>
			<!--Header END-->
	<!-- MAIN -->
	<main>
	<div id="slider" class="slider">
		<!-- SLIDE 1 -->
		<div class="row fullheight slide">
			<div class="col-6 fullheight">
				<!-- PRODUCT INFO -->
				<div class="product-info">
					<div class="info-wrapper">
						<div class="product-price ">
							<span>€</span><?php echo $product['price']?>
						</div>
						<div class="product-name ">
							<h2>
								<?php echo $product['titel']?>
							</h2>
						</div>
						<div class="product-size ">
							<h3>SIZE</h3>
							<div class="size-wrapper">
								<div>35</div>
								<div>36</div>
								<div class="active">37</div>
								<div>38</div>
								<div>39</div>
								<div>40</div>
							</div>
						</div>
						<div class="product-color">
							<h3>COLORS</h3>
							<div class="color-wrapper">
								<div class="active">
									<div style="background-color: <?php echo $product['color']?>;"></div>
								</div>
							</div>
						</div>
						<div class="product-description ">
							<p>
							<?php echo $product['beschrijving']?>
							</p>
						</div>
						<div class="button ">
							<button>
								Add to cart
							</button>
						</div>
					</div>
				</div>
				<!-- END PRODUCT INFO -->
			</div>
			<div class="col-6 fullheight img-col" style="background-image: linear-gradient(to top right, <?php echo $product['gradient']?>)">
				<!-- PRODUCT IMAGE -->
				<div class="product-img">
					<div class="img-wrapper ">
						<div class="bounce">
							<img src="<?php echo $product['foto']?>" alt="placeholder+image">
						</div>
					</div>
				</div>
				<!-- END PRODUCT IMAGE -->
				<!-- PRODUCT MORE IMAGES -->
				<div class="more-images">
					<div class="more-images-item ">
						<img src="<?php echo $product['foto1']?>" alt="">
					</div>
					<div class="more-images-item ">
						<img src="<?php echo $product['foto2']?>" alt="">
					</div>
					<div class="more-images-item ">
						<img src="<?php echo $product['foto3']?>" alt="">
					</div>
				</div>
				<!-- ENDPRODUCT MORE IMAGES -->
			</div>
		</div>
		<!-- END SLIDE 1 -->
	</div>
	<!-- END MAIN -->

	<!-- MODAL -->
	<div id="modal" class="modal">
		<span id="modal-close" class="close">&times;</span>
		<img id="modal-content" class="modal-content">
		<div class="more-images">
			<div class="more-images-item">
				<img class="img-preview">
			</div>
			<div class="more-images-item">
				<img class="img-preview">
			</div>
			<div class="more-images-item">
				<img class="img-preview">
			</div>
			<div class="more-images-item">
				<img class="img-preview">
			</div>
		</div>
	</div>
	<!-- END MODAL -->
	</main>
	<script type="text/javascript" src="java/productpage.js"></script>
</body>
</html>