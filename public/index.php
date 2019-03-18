<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="desktop/css/global.css">
		<link rel="stylesheet" href="desktop/css/gridly.css">
		<link rel="shortcut icon" type="img/png" href="favicon.png"/>
		<title>MixPix</title>
	</head>
	<body>
		<main id="wrapper">
			<header class="container px-0">
				<h2 class="logo"><span>mix</span>pix</h2>
				<button type="button" data-toggle="modal" data-target="#checkout-modal" class="btn btn-outline-secondary text-muted checkout-btn"><img src="desktop/img/icons/shopping-cart.png" alt="" class="mr-2">checkout</button>
			</header>
			<div class="container px-0">
				<div class="row no-gutters row-nowrap">
					<section class="col-12 col-lg-6 col-xxl-6 upload">

						<article class="upload-article">
							<h1 class="display-4 mb-4">Get your first <br> Mixpix for free*</h1>
							<p>You can upload pictures from your social networks <br> like <a href="" class="text-info">instagram</a> or <a href="" class="text-primary">facebook</a>.</p>
							<button class="btn btn-success text-white mt-5 upload-btn">Upload Picture</button>
						</article>

					<?php include 'desktop/views/upload_block.php'; ?>
					</section>

					<?php include 'desktop/views/gallery.php'; ?>
					<div class="col-xxl-1"></div>
				</div>
			</div>
			<div class="overlay"></div>
			<?php include 'desktop/views/modal.php'; ?>
		</main>
		<script src="desktop/js/app.js"></script>
	</body>
</html>