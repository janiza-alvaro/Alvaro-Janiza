<?php
require 'config.php';
if(!empty($_SESSION["id"])){
  $id = $_SESSION["id"];
  $result = mysqli_query($conn, "SELECT * FROM tb_user WHERE id = $id");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
		<link rel="preload" rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<link rel="stylesheet" href="../styles/homestyle.css">
		<link rel="stylesheet" href="../styles/navbarstyle.css">
		<link rel="stylesheet" href="../styles/fontstyle.css">
		<title>Ramen Noodle Shop</title>
	<style>
		.navbar{
			background-image:url("../assets/BG.jpg");
			background-size: cover;
		}
	</style>

	</head>
	<body style=" background: url('../assets/BG5.jpg') no-repeat center center fixed; background-size: cover; ">	
  <div class="container">
			<div id="navigation" class="row navigation" style= "width: 100%;">
				<nav class="navbar navbar-expand-lg navbar-light bg-light">
					<a class="navbar-brand" href="../pages/index.php" style= "font-size: 30px; font-family: cursive;"><img class="logo" src="../assets/logo1.png" alt="Ramen Noodle Shop">Ramen Noodle Shop</a>
					<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
					</button>
					<div class="collapse navbar-collapse justify-content-md-center" id="navbarNav">
						<ul class="navbar-nav navi">
							 <li class="nav-item">
								<a class="active" href="#Home">Home</a>
							</li>
							<li class="nav-item">
								<a href="menu.php" name="menu">Products</a>
							</li>
							<li class="nav-item">
								<a href="about.php">About</a>
							</li>
							<li class="nav-item">
								<a href="contact.php">Contact</a>
							</li>
							<li class="nav-item dropdown">
								<a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Account</a>
								<ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

    								<a href="logout.php">Logout</a>
								</ul>
							</li>
						</ul>
					</div>
				</nav>
			</div>
			<hr>

			
			<div class="row productpart">
				<h3 class="h3font">Our Ramen Varieties</h3>
				<div class="col-md-4 col-sm-12">
					<figure class="figure"  id="rv">
						<img src="../assets/R1.jpg" alt="Tonkotsu Ramen" class="product">
						<p class="productfont">Tonkotsu Ramen</p>
					</figure>
				</div>
				
				<div class="col-md-4 col-sm-12">
					<figure class="figure"  id="rv">
						<img src="../assets/R2.jpg" alt="Miso Ramen" class="product">
						<p class="productfont">Miso Ramen</p>
					</figure>
				</div>
				<div class="col-md-4 col-sm-12">
					<figure class="figure"  id="rv">
						<img src="../assets/R3.jpg" alt="Shoyu Ramen" class="product">
						<p class="productfont">Shoyu Ramen</p>
					</figure>
				</div>

				<div class="col-md-4 col-sm-12">
					<figure class="figure"  id="rv">
						<img src="../assets/R4.jpg" alt="Shio Ramen" class="product">
						<p class="productfont">Shio Ramen</p>
					</figure>
				</div>

				<div class="col-md-4 col-sm-12">
					<figure class="figure"  id="rv">
						<img src="../assets/R5.jpg" alt="Tsukemen Ramen" class="product">
						<p class="productfont">Tsukemen Ramen</p>
					</figure>
				</div>

				<div class="col-md-4 col-sm-12">
					<figure class="figure"  id="rv">
						<img src="../assets/R6.jpg" alt="Wakayama Ramen" class="product">
						<p class="productfont">Wakayama Ramen</p>
					</figure>
				</div>

				<div class="col-md-4 col-sm-12">
					<figure class="figure"  id="rv">
						<img src="../assets/R7.jpg" alt="Abura Soba Ramen" class="product">
						<p class="productfont">Abura Soba Ramen</p>
					</figure>
				</div>

				<div class="col-md-4 col-sm-12">
					<figure class="figure"  id="rv">
						<img src="../assets/R8.jpg" alt="Kitakata Ramen" class="product">
						<p class="productfont">Kitakata Ramen</p>
					</figure>
				</div>

				<div class="col-md-4 col-sm-12">
					<figure class="figure"  id="rv">
						<img src="../assets/R9.jpg" alt="Sapporo Ramen" class="product">
						<p class="productfont">Sapporo Ramen</p>
					</figure>
				</div>
			</div>
			<hr>
			<div class="row schedulepart">
				<div class="col-md-12 col-sm-12">
					<h3 class="h3font">Ramen Counter</h3>
					<table class="table table-bordered">
						<thead>
						  <tr class="border-dark">
							<th scope="col" class="thfont">Product</th>
							<th scope="col" class="thfont">Counter</th>
						  </tr>
						</thead>
						<tbody>
						  <tr>
							<td scope="row" class="tdfont">Tonkotsu Ramen</th>
							<td class="tdfont">Counter A</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Miso Ramen</th>
							<td class="tdfont">Counter B</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Shoyu Ramen</th>
							<td class="tdfont">Counter C</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Shio Ramen</th>
							<td class="tdfont">Counter D</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Tsukemen Ramen</th>
							<td class="tdfont">Counter E</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Wakayama Ramen</th>
							<td class="tdfont">Counter F</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Abura Soba Ramen</th>
							<td class="tdfont">Counter G</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Kitakata Ramen</th>
							<td class="tdfont">Counter H</td>
						  </tr>
						  <tr>
							<td scope="row" class="tdfont">Sapporo Ramen</th>
							<td class="tdfont">Counter I</td>
						  </tr>
						</tbody>
					  </table>
				</div>
			</div>
		</div>
		<hr>
		<h3 class="h3font">Our Location</h3>
		<div data-aos="fade-up" style="margin-top:50px">
            <iframe style="border:0; width: 100%; height: 400px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3864.399191376691!2d121.46922489999999!3d14.4041368!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3397f047f082508f%3A0xf7a77fedb099d4bd!2sNatividad%20Ext%2C%20Pangil%2C%20Laguna!5e0!3m2!1sen!2sph!4v1675168356100!5m2!1sen!2sph" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    
  </body>
</html>

