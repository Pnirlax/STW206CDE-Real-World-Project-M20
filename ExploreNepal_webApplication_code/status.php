<!DOCTYPE html>
<html lang="en">
<head>
	<title>Explore Nepal</title>
	<meta charset="utf-8">
	<meta name="author" content="pixelhint.com">
	<meta name="description" content="La casa free real state fully responsive html5/css3 home page website template"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">

	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
</head>
<body>
<section class="">
		<?php
			include 'header.php';
		?>

			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Best Vehicle For Booking.</h2>
				<h3 class="properties" style="text-align: center">Car - Taxi - Bike - Scotter</h3>
			</section>
	</section><!--  end hero section  -->



	<section class="listings">
		<div class="wrapper">
		<h2 style="text-decoration:underline">Your Booking Status</h2>
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM client WHERE email = '$_SESSION[email]'";
						$rs = $conn->query($sel);
						$rws = $rs->fetch_assoc();
			?>
				<li>
						<h2><span style="font-size:25px; color: #192045">Booking Status:</span> <span style="color:#003333; 
						font-weight: bold; font-size: 25px;"><?php echo $rws['status'];?></span></h2>
				</li>
			</ul>
		</div>
	</section>	<!--  end listing section  -->

	<footer style="background: #dbb9b9;">
		<div class="wrapper footer">
			<ul>
				<li class="links">
					<ul>
						<li>OUR COMPANY</li>
						<li><a href="about.php">About Us</a></li>
						<li><a href="terms.php">Terms</a></li>
						<li><a href="policy.php">Policy</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</li>

				
				<li class="links">
					<ul>
						<li>OUR Vehicle TYPES</li>
						<li><a href="index.php">Car</a></li>
						<li><a href="index.php">Taxi</a></li>
						<li><a href="index.php">Bike</a></li>
						<li><a href="index.php">Scotter.</a></li>
					</ul>
				</li>

				<?php include_once "includes/footer.php" ?>