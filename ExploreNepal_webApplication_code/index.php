

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
			<img src="img/car.jpg" title="image" alt="image" />
			<section class="caption">
				<h2 class="caption" style="text-align: center">Find You Best Vehicle For Booking.</h2>
				<h3 class="properties" style="text-align: center">Car - Taxi - Bike - Scotter</h3>
			</section>
	</section><!--  end hero section  -->

	<section class="listings" style ="background-color: #fffafb; margin-bottom: 60px;">

		<div class="wrapper">
			<ul class="properties_list">
			<?php
						include 'includes/config.php';
						$sel = "SELECT * FROM cars WHERE status = 'Available'";
						$rs = $conn->query($sel);
						while($rws = $rs->fetch_assoc()){
			?>
				<li>
					<a href="book_car.php?id=<?php echo $rws['car_id'] ?>">
						<img class="thumb" src="cars/<?php echo $rws['image'];?>" width="300" height="200">
					</a>
					<span class="price"><?php echo 'Price per KM-'.$rws['hire_cost'];?></span>
					<div class="property_details">
						<h1>
							<a href="book_car.php?id=<?php echo $rws['car_id'] ?>"><?php echo 'Vehicle Type>'.$rws['car_type'];?></a>
						</h1>
						<h2>Vehicle Name/Model: <span class="property_size"><?php echo $rws['car_name'];?></span></h2>
					</div>
				</li>
			<?php
				}
			?>
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

				<?php include_once "includes/footer.php"; ?>