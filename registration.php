<?php

// session_start();

include 'config.php';

if (isset($_POST['username']) && isset($_POST['email']) && isset($_POST['password'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = md5($_POST['password']);

    $s = "select * from usertable where username='$username'";
    $result = mysqli_query($con, $s);

    if (mysqli_num_rows($result) === 1) {
        $error_message = "Username or email already taken, try another one!";
    } else {
        $reg = "INSERT INTO usertable(username, email, password) VALUES('$username', '$email', '$password')";
        mysqli_query($con, $reg);
        header('location:login.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>SIGN UP</title>
    <link rel="stylesheet" type="text/css" href="registration.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;900&display=swap" rel="stylesheet">
    <div class="wrapper">
        <ul class="nav-area">
            <li><a href="index.html">Home</a></li>
            <li><a href="login.php">Login</a></li>
        </ul>
    </div>
</head>
<body>
<div class="form">
    <h2>Registration</h2>
    <?php if (isset($error_message)) { ?>
        <p style="color: red; font-size: 20px;"><?php echo $error_message; ?></p>
    <?php } ?>
    <form action="registration.php" name="registration" onsubmit="return validateForm()" method="post">
        <label>Name</label><input type="text" name="username" placeholder="Name" required /><br>

        <label>Email</label><input type="email" name="email" placeholder="Email" required /><br>

        <label>Password</label><input type="password" name="password" placeholder="Password" required /><br>

        <input name="submit" type="submit" value="Register" />
    </form>
    <p>Already registered? <a href='login.php'>Login Here</a></p>
</div>
<script src="validate.js"></script>
</body>
</html>
