<?php
// Connect to the database (replace with your database details)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "form";

// $conn = new mysqli($servername, $username, $password, $dbname);
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection

if($conn) {
    echo"";
}   else {
    # code...
    die("Connection failed: " . mysqli_connect_error());
}

// Use r data

// $username = "";
// $email = "user@example.com";
// $password = "user1234"; // User's original password, limited to 8 characters

// // Generate a random salt
// $salt = random_bytes(16);

// // Hash the password with salt
// $hashedPassword = password_hash($password . $salt, PASSWORD_BCRYPT);

// // Insert data into the table
// $insertQuery = "INSERT INTO users (username, email, hashed_password, salt) VALUES (?, ?, ?, ?)";
// $stmt = $conn->prepare($insertQuery);
// $stmt->bind_param("ssss", $username, $email, $hashedPassword, $salt);
// $stmt->execute();

// $stmt->close();
// $conn->close();
?>
