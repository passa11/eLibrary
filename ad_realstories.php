<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Real Stories</title>
	<link rel="stylesheet" href="realstories.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="wrapper">
			<ul class="nav-area">
				<li><a href="admin.php">Home</a></li>
				<li><a href="ad_romance.php">Romance</a></li>
				<li><a href="ad_crime.php">Crime and Thriller</a></li>
				<li><a href="ad_horror.php">horror</a></li>
				<li><a href="records.php">upload</a></li>
				<li><a href="logout.php">logout</a></li>
			</ul>
		</div>
	</header>

	<section class="items">
	<?php
	include 'config.php';
	$pic = mysqli_query($con,"SELECT * FROM `records` where genre='real' ");
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
		<img src="./picture/realstories/girl.jpg">
		<h4>GIRL WAITS WITH GUN BY AMY STEWART</h4>
		<a href="./pdf/realstories/girlwaitwithgun.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/code-name-helene-ariel-lawhon.jpg">
		<h4>Code Name Hélène</h4>
		<a href="./pdf/realstories/code.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/lilac-girls-martha-hall-kelly.jpg">
		<h4>Lilac Girls</h4>
		<a href="./pdf/realstories/lilargirls.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/the-tattooist-of-auschwitz-heather-morris.jpg">
		<h4>The Tattooist of Auschwitz</h4>
		<a href="./pdf/realstories/the tattooist of.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/we-were-the-lucky-ones-georgia-hunter.jpg">
		<h4>We Were the Lucky Ones</h4>
		<a href="./pdf/realstories/the lucky ones.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/the-paris-wife-paula-mclain.jpg">
		<h4>The Paris Wife</h4>
		<a href="./pdf/realstories/The Paris Wife_ A Novel ( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/pearl-of-china-anchee-min.jpg">
		<h4>Pearl of China</h4>
		<a href="./pdf/realstories/The pearl of china.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/becoming-mrs-lewis-patti-callahan.jpg">
		<h4>Becoming Mrs. Lewis</h4>
		<a href="./pdf/realstories/becoming mrs.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/the-mystery-of-mrs-christie-marie-benedict.jpg">
		<h4>The Mystery of Mrs. Christie</h4>
		<a href="./pdf/realstories/the mystery of mrs.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/betty-tiffany-mcdaniel.jpg">
		<h4>Betty</h4>
		<a href="./pdf/realstories/betty-azar-understanding-and-using-english-grammar.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/the-only-woman-in-the-room-marie-benedict.jpg">
		<h4>The Only Woman in the Room</h4>
		<a href="./pdf/realstories/the only woman.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/white-houses-amy-bloom.jpg">
		<h4>White Houses</h4>
		<a href="./pdf/realstories/whitehouses.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/the-most-beautiful-girl-in-cuba-chanel-cleeton.jpg">
		<h4>The Most Beautiful Girl in Cuba</h4>
		<a href="./pdf/realstories/A Most Beautiful Girl (Hollywood Legends)   ( PDFDrive ).pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/the-aviators-wife-melanie-benjamin.jpg">
		<h4>The Aviator’s Wife</h4>
		<a href="./pdf/realstories/aviators wif.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/z-therese-anne-fowler.jpg">
		<h4>THERESE ANNE FOWLER -Z</h4>
		<a href="./pdf/realstories/threese.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/florence-adler-swims-forever-rachel-beanland.jpg">
		<h4>Florence Adler Swims Forever</h4>
		<a href="./pdf/realstories/swims forever.pdf">Read</a >
	</div>

	<div class="item">
		<img src="./picture/realstories/miss-burma-charmaine-craig.jpg">
		<h4>Miss Burma</h4>
		<a href="./pdf/realstories/miss burma.pdf">Read</a >
	</div>
	</section>
	<footer>
  	<div class="copyright">
  		&copy; 2023 | Created & Designed By <a href="#">Prabesh Paswan</a>
  	</div>
  </footer>
</body>
</html>