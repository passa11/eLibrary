<?php 
session_start();

include 'config.php';

if (isset($_POST['username']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $s = "SELECT * FROM usertable WHERE username='$username' && password='$password'";

    $result = mysqli_query($con, $s); 

    $admin = "admin";
    $apassword = md5("admin");

    if ($username == $admin && $password == $apassword) {
        $_SESSION['username'] = $admin;
        header('location:admin.php');
        exit;
        
    } elseif (mysqli_num_rows($result) === 1) {
        $_SESSION['username'] = $username;
        header('location:homes.php');
        exit;
        
    } else {
        $error_message = "Incorrect Details!"; // Set the error message
    }
}
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>LOGIN</title>
  <link rel="stylesheet" type="text/css" href="login.css">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
  <div class="wrapper">
          <ul class="nav-area">
               <li><a href="index.html">Home</a></li>
               <li><a href="registration.php">Sign up</a></li>
          </ul>
     </div>
</head>
<body>
  <div class="form">
    <h2>Login</h2>
    <?php if (isset($error_message)) { ?>
            <p style="color: red; font-size: 20px;"><?php echo $error_message; ?></p>
        <?php } ?>
    <form action="login.php" method="post" name="login">
     <label>Username</label><input type="text" name="username" placeholder="Username" required />
      <label>Password</label><input type="password" name="password" placeholder="Password" required />
      <br>
      <div class="forlogin">
      <input name="submit" type="submit" value="Login" />
    </div>
    </form>
    <p>Don't have an account? <a href='registration.php'>Register Here</a></p>
  </div>
</body>
</html>
