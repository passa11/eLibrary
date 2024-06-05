<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Romance</title>
	<link rel="stylesheet" href="romance.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
</head>
<body>
	<header>
		<div class="wrapper">
			<ul class="nav-area">
				<li><a href="admin.php">Home</a></li>
				<li><a href="ad_realstories.php">Real Stories</a></li>
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
	$pic = mysqli_query($con,"SELECT * FROM `records` where genre='romance' ");
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
			<img src="./picture/romance/meet-me-in-paradise-romance-book-via-amazon.com-ecomm.jpg">
			<h4>Meet Me in Paradise by Libby Hubscher (2021)</h4>
			<a href="./pdf/romance/meet me in Paradise.pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/romance/the-wedding-date-romance-book-via-amazon.com-ecomm.jpg">
			<h4>The Wedding Date by Jasmine Guillory (2018)</h4>
			<a href="./pdf/romance/Wedding Planning - The Ultimate Dream Wedding Planner ( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/romance/a-spot-of-trouble-romance-book-via-amazon.com-ecomm.jpg">
			<h4> A Spot of Trouble by Teri Wilson (2021)</h4>
			<a href="./pdf/romance/a spot of trouble.pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/romance/love-at-first-romance-book-via-amazon.com-ecomm-copy.jpg">
			<h4>Love at First by Kate Clayborn (2021)</h4>
			<a href="./pdf/romance/love at first.pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/romance/seven-days-in-june-romance-book-via-amazon.com-ecomm.jpg">
			<h4>Seven Days in June by Tia Williams (2021)</h4>
			<a href="./pdf/romance/Seven Days Battles 1862 ( PDFDrive ).pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/romance/the-lost-and-found-necklace-romance-book-via-amazon.com_.jpg">
			<h4>The Lost and Found Necklace by Louisa Leaman (2021)</h4>
			<a href="./pdf/romance/the lost and found.pdf">Read</a >
		</div>

		<div class="item">
			<img src="./picture/romance/to-all-the-boys-ive-loved-before-romance-book-via-amazon.com-ecomm.jpg">
			<h4>To All the Boys I’ve Loved Before by Jenny Han (2014)</h4>
			<a href="./pdf/romance/To All the Boys I've Loved Before ( PDFDrive ).pdf">Read</a >
		</div>
			
		<div class="item">
			<img src="./picture/romance/eleanor-and-park-romance-book-via-amazon.com-ecomm.jpg">
			<h4>Eleanor & Park by Rainbow Rowell (2013)</h4>
			<a href="./pdf/romance/rainbow rowell.pdf">Read</a >
		</div>
			
		<div class="item">
			<img src="./picture/romance/maggie-finds-her-muse-romance-book-via-amazon.com-ecomm.jpg">
			<h4>Maggie Finds Her Muse by Dee Ernst (2021)</h4>
			<a href="./pdf/romance/maggie.pdf">Read</a >
		</div>
			
			<div class="item">
		<img src="./picture/romance/simon-vs-the-homo-sapiens-agenda-romance-book-via-amazon.com-ecomm.jpg">
		<h4> Simon vs. The Homo Sapiens Agenda by Becky Albertalli (2016)</h4>
		<a href="./pdf/romance/simon.pdf">Read</a >

	</div>
			
			<div class="item">
			<img src="./picture/romance/me-before-you-book-via-amazon.com-ecomm-UD.jpg">
			<h4>Me Before You by Jojo Moyes (2016)</h4>
			<a href="./pdf/romance/Me before you.pdf">Read</a >
		</div>
			
		<div class="item">
			<img src="./picture/romance/virgin-river-romance-book-via-amazon.com-ecomm.jpg">
			<h4>Virgin River by Robyn Carr (2019)</h4>
			<a href="./pdf/romance/A Virgin River Christmas (Virgin River, Book 4) ( PDFDrive ).pdf">Read</a >
		</div>
			
		<div class="item">
			<img src="./picture/romance/the-invention-of-wings-sue-monk-kidd.jpg">
			<h4>The Invention of Wings</h4>
			<a href="./pdf/romance/the invention.pdf">Read</a >
		</div>
			
		<div class="item">
			<img src="./picture/romance/the-good-people-hannah-kent.jpg">
			<h4>The Good People</h4>
			<a href="./pdf/romance/good people.pdf">Read</a >
		</div>
	</section>
	<footer>
		<div class="copyright">
			&copy; 2023 | Created & Designed By <a href="#">Prabesh Paswan</a>
		</div>
	</footer>
</body>
</html>