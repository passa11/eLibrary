<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="records.css">
</head>
<body>
  <header>
    <div class="wrapper">    
      <ul class="nav-area">
        <li><a href="admin.php">Home</a></li>
        <li><a href="admin_genre.php">books</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>
    </div>
  </header>
  <div class="whole">
    <center>
        <div class="main">
            <form action="admininsert.php" method="post" enctype="multipart/form-data"> 
                <label>Name</label> <input type="text" name="name" required placeholder="book name"><br>

                <label>Genre</label> <input type="text" placeholder="'crime','horror','real stories','romance'" name="genre" required><br>

                <label>Image</label> <input type="file" name="image" required><br>

                <label>File</label> <input type="file" name="pdf" required><br>

                <button type="submit" name="upload">Upload</button>
                
                <table class="table">
                  <thead>
                    <tr>
                      <th scope="col">Name</th>
                      <th scope="col">Image</th>
                      <th scope="col">File</th>
                      <th scope="col">Delete</th>
                    </tr>
                  </thead>

                  <tbody>
                    <?php
                    include 'config.php';
                    $pic = mysqli_query($con,"SELECT * FROM records");
                    while($row=mysqli_fetch_array($pic)) {
                      echo "
                      <tr>
                      <td>$row[name]</td>
                      <td><img src='$row[image]' width='100px' height='80px'></td>
                      <td><a href='$row[pdf]' class='read'>Read</a></td>
                      <td><a href='delete.php?id=$row[id]' class='delete-link'>Delete</a></td>
                      </tr>
                      ";
                    }
                    ?>
                      
                    </tbody>
                  </table>
                </form>
              </div>
            </center>
  </div>
</body>
</html>
