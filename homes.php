<!-------------------------------- user homepage ----------------------------------------->
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Home</title>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="home1.css">    
</head>
<body>
  <header>
    <div class="wrapper">
      <ul class="nav-area">
        <li><a href="genre.php">books</a>
        </li><li><a href="#about">About</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>

    <div class="welcome-text">
      <h1>welcome to <br><span>eLibrary</span></h1>
    </div>
  </header>
  <section id="about">
    <div class="inner-width">
      <h1 class="section-title">About</h1>
      <div class="about-content">
        <div class="about-text">
          <h2>Hi! Welcome to eLibrary</h2>
          <p> A digital Book, also called an online Book, an internet Book, a digital repository, or a digital collection is an online database of digital objects that can include text, still images, audio, video, digital documents, or other digital media formats or a Book accessible through the internet. Objects can consist of digitized content like print or photographs, as well as originally produced digital content like word processor files or social media posts. In addition to storing content, digital libraries provide means for organizing, searching, and retrieving the content contained in the collection.

           Digital Books can vary immensely in size and scope, and can be maintained by individuals or organizations. The digital content may be stored locally, or accessed remotely via computer networks. These information retrieval systems are able to exchange information with each other through interoperability and sustainability.</p>
       </div>
     </div>
   </section>
   <footer>
    <div class="copyright">
      &copy; 2023 | Created & Designed By <a href="#">Prabesh Paswan</a>
    </div>
  </footer>
</body>
</html>
