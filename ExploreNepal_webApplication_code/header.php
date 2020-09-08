<?php
	session_start();
	error_reporting("E-NOTICE");
?>
<header style="background: #dbb9b9;">
			<div class="wrapper">
				<h1 class="logo"style="margin-top: 19px; font-size: 50px; color: #23203e;"> ExploreNepal</h1>
				<a href="#" class="hamburger"></a>
				<nav>
					<?php
						if(!$_SESSION['email'] && (!$_SESSION['pass'])){
					?>
					<ul>
						<li><a href="index.php">Home</a></li>
						<li><a href="rent.php">Rent Cars</a></li>
						<li><a href="about.php">About</a></li>
						<li><a href="contact.php">Contact</a></li>
				
				</ul>
					<a href="account.php" style="font-size: 24px;margin-right: 15px;color: #000000;">Client Login</a>
					<a href="login.php" style="font-size: 24px;color: #000000;">Admin Login</a>
					<?php
						} else{
					?>
							<ul>
								<li><a href="index.php">Home</a></li>
								<li><a href="status.php">View Status</a></li>
								<li><a href="message_admin.php">Message Admin</a></li>
							</ul>
					
					<a href="admin/logout.php" style="font-size: 24px;color: black;">Logout</a>
					<?php
						}
					?>
				</nav>
			</div>
		</header>

		