<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Horror</title>
	<link rel="stylesheet" href="horror.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="wrapper">
			<ul class="nav-area">
				<li><a href="index.html">Home</a></li>
				<li><a href="realstories.php">Real Stories</a></li>
				<li><a href="romance.php">Romance</a></li>
				<li><a href="crime.php">Crime and Thriller</a></li>
				<li><a href="logout.php">logout</a></li>
			</ul>
		</div>
	</header>

	<section class="items">
	<?php
	include 'config.php';
	$pic = mysqli_query($con,"SELECT * FROM `records` where genre='horror' ");
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
		<img src="./picture/horror/HauntingofHillHouseJackson-thumb-200x299-995898.jpg">
		<h4>The Haunting of Hill House by Shirley Jackson (1959)</h4>
		<a href="./pdf/horror/The Haunting of Hill House ( PDFDrive ).pdf">Read</a >
	</div>
	
	<div class="item">
		<img src="./picture/horror/thewoman.jpg">
		<h4>The Woman in Black by Susan Hill (1983)</h4>
		<a href="./pdf/horror/The Black Woman_ An Anthology ( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/nightthings.jpg">
		<h4>Night Things by Michael Talbot (1988)</h4>
		<a href="./pdf/horror/Nightthings.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/RingSuzuki-thumb-200x304-995892.jpg">
		<h4>Ring by Koji Suzuki (1991)</h4>
		<a href="./pdf/horror/Ring.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/head-full-ghosts.jpg">
		<h4>TA Head Full of Ghosts by Paul Tremblay (2015)</h4>
		<a href="./pdf/horror/Tahead.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/DamnationGameBarker-thumb-200x336-995895.jpg">
		<h4>The Damnation Game by Clive Barker (1985)</h4>
		<a href="./pdf/horror/The Damnation Game ( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/bird-box.jpg">
		<h4>Bird Box by Josh Malerman (2015)</h4>
		<a href="./pdf/horror/BIRD BOX ( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/BurntOfferingsMarasco-thumb-200x320-995904.jpg">
		<h4>Burnt Offerings by Robert Marasco (1973)</h4>
		<a href="./pdf/horror/buratoffering.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/summer-ended.jpg">
		<h4>The Summer Is Ended and We Are Not Yet Saved by Joey Comeau (2014)</h4>
		<a href="./pdf/horror/simon.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/RebeccaduMaurier-thumb-200x314-995907.jpg">
		<h4>Rebecca by Daphne du Maurier (1938)</h4>
		<a href="./pdf/horror/Rebecca ( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/world-war-z.jpg">
		<h4>World War Z by Max Brooks (2006)</h4>
		<a href="./pdf/horror/World War Z_ An Oral History of the Zombie War ( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/savaging-dark.jpg">
		<h4> Savaging the Dark by Christopher Conlon (2014)</h4>
		<a href="./pdf/horror/Savagingthedark( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/heart-shaped-box.jpg">
		<h4> Heart-Shaped Box by Joe Hill (2007)</h4>
		<a href="./pdf/horror/Heart-Shaped Box_ A Novel ( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/GeekLoveDunn-thumb-200x307-995910.jpg">
		<h4>Geek Love by Katherine Dunn (1989)</h4>
		<a href="./pdf/horror/Greek Love Magic ( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/horror/ItKing-thumb-200x304-148713.jpg">
		<h4>It by Stephen King (1986)</h4>
		<a href="./pdf/horror/Stephen King - Different season ( PDFDrive ).pdf">Read</a >
	</div>
	
	</div>
		<div class="item">
		<img src="./picture/horror/LetTheRightOneInLindqvist-thumb-200x303-995947.jpg">
		<h4>Let the Right One In by John Ajvide Lindqvist (2004)</h4>
		<a href="./pdf/horror/the right one in.pdf">Read</a >
	</div>
</section>
<footer>
  	<div class="copyright">
  		&copy; 2023 | Created & Designed By <a href="#">Prabesh Paswan</a>
  	</div>
  </footer>
</body>
</html>