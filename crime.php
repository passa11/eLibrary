<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Crime</title>
	<link rel="stylesheet" href="crime.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="wrapper">
			<ul class="nav-area">
				<li><a href="homes.php">Home</a></li>
				<li><a href="realstories.php">Real Stories</a></li>
				<li><a href="romance.php">Romance</a></li>
				<li><a href="horror.php">horror</a></li>
				<li><a href="logout.php">logout</a></li>
			</ul>
		</div>
	</header>

	<section class="items">
	<?php
	include 'config.php';
	$pic = mysqli_query($con,"SELECT * FROM `records` where genre='crime' ");
	while ($row=mysqli_fetch_array($pic)) {
		echo "
    	<div class='item'>
		<img src='$row[image]'>
		<h4>$row[name]</h4>
        <a href='$row[pdf]'>Read</a>
		</div>
    	";
    }
    ?>
		
	
		<div class="item">
			<img src="./picture/crime/41YfKfphseL._SL500_.jpg">
			<h4>The Talented Mr. Ripley</h4>
			<a href="./pdf/crime/Talented-Mr-Ripley-The.pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/31dyXJVVzUL._SL500_.jpg">
			<h4>Winter’s Bone by Daniel Woodrell</h4>
			<a href="./pdf/crime/Winter's Bone ( PDFDrive ).pdf">Read</a>
		</div>

		<div class="item">
			<img src="./picture/crime/41B4fijwh8L._SL500_.jpg">
			<h4>The Silence of the Lambs (Hannibal Lecter)</h4>
			<a href="./pdf/crime/The Silence of the Lambs   ( PDFDrive ).pdf">Read</a>
		</div>

		<div class="item">
			<img src="./picture/crime/51ha+QWsOXL._SL500_.jpg">
			<h4>Eileen: A Novel</h4>
			<a href="./pdf/crime/Eileennovel.pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/51Qbgd3BLgL._SL500_.jpg">
			<h4>Odd Thomas: An Odd Thomas Novel</h4>
			<a href="./pdf/crime/oddthomas ( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/51EOS2SMyIL._SL500_.jpg">
			<h4>The Hunt for Red October (A Jack Ryan Novel)</h4>
			<a href="./pdf/crime/The Hunt For Red October ( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/41WQs5LLOPL._SL500_.jpg">
			<h4>Black Wings Has My Angel (New York Review Books Classics)</h4>
			<a href="./pdf/crime/black wings( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/51lJtCKRBoL._SL500_.jpg">
			<h4>Rebecca</h4>
			<a href="./pdf/crime/Rebecca-Brown ( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/51RKID8wLhL._SL500_.jpg">
			<h4>The Girl with the Dragon Tattoo (Millennium Series)</h4>
			<a href="./pdf/crime/The Girl with the Dragon Tattoo ( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/51HCszRxuIL._SL500_.jpg">
			<h4>Those Bones Are Not My Child: A Novel</h4>
			<a href="./pdf/crime/those bones ( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/41Guf6+G8fL._SL500_.jpg">
			<h4>Bluebird, Bluebird (A Highway 59 Novel, 1)</h4>
			<a href="./pdf/crime/bluebird.pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/51yHyxpyYNL._SL500_.jpg">
			<h4>The Last Good Kiss</h4>
			<a href="./pdf/crime/the last good.pdf">Read</a>
		</div>

		<div class="item">
			<img src="./picture/crime/51Vb49ABQnL._SL500_.jpg">
			<h4>A Coffin for Dimitrios</h4>
			<a href="./pdf/crime/1962-A COFFIN FROM HONG KONG.pdf ( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/41k7+ytKTqL._SL500_.jpg">
			<h4>The Godfather: 50th Anniversary Edition</h4>
			<a href="./pdf/crime/The God Father ( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/crime/514R-LVCSiL._SL500_.jpg">
			<h4>Along Came a Spider (Alex Cross, 1)</h4>
			<a href="./pdf/crime/Spiderman.pdf">Read</a>
		</div>

		<div class="item">
			<img src="./picture/crime/41p4amaYISL._SL500_.jpg">
			<h4>The Goldfinch: A Novel (Pulitzer Prize for Fiction)</h4>
			<a href="./pdf/crime/goldfinch.pdf">Read</a>
		</div>
	</section>
	<footer>
		<div class="copyright">
			&copy; 2023 | Created & Designed By <a href="#">Prabesh Paswan</a>
		</div>
  	</footer>
</body>
</html>