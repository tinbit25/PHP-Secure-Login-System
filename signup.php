<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "login";


$conn = new mysqli($hostname, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

   
    $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

    
    $stmt = $conn->prepare("INSERT INTO users (username, password) VALUES (?, ?)");
    $stmt->bind_param("ss", $username, $hashedPassword);

    if ($stmt->execute()) {
        echo "Registration successful!";
    } else {
        echo "Error: " . $stmt->error;
    }

    $stmt->close();
}
$conn->close();
?>

<!doctype html>
<html>
<head>
    <title>Signup</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="main">
        
        <div class="form">
            <h2>Signup Here</h2>
            <form method="post">
                <input type="text" name="username" placeholder="Enter your name" required>
                <input type="password" name="password" placeholder="Enter Password Here" required>
                <button type="submit">Signup</button>
                <a href="login.php">Already have an account? Login here</a>
            </form>
        </div>
        <footer>
            <p>&copy; 2024 King Steel. All rights reserved.</p>
        </footer>
    </div>
</body>
</html>
