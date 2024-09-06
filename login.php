<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "login";

$conn = mysqli_connect($hostname, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM `users` WHERE `username` = '$username'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        $hashedPassword = $row['password'];

        if (password_verify($password, $hashedPassword)) {
            header("Location: home.php");
            exit;
        } else {
         header("Location: pass.php");
        }
    } else {
      header("Location:loginn.php");
    }
}

mysqli_close($conn);
?>

<!doctype html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="css/login.css">
</head>
<body>
   <div class="main">
      <header>
         
         <br><br><br><br><br><br>
      </header>
      <div class="form">
         <h2>Login Here</h2>
         <form method="post">
            <input type="text" name="username" placeholder="Enter your name">
            <input type="password" name="password" placeholder="Enter Password Here">
            
            <button class="btn" style="cursor: pointer;" type="submit" name="login">
               <div class="login" style="color: aliceblue;">
                  Login
               </div>
            </button>
            <a href="signup.php">Don't have an account? Signup here</a>
         </form>
      </div>
      <footer>
         <p>&copy; 2024 King Steel. All rights reserved.</p>
      </footer>
   </div>
</body>
</html>