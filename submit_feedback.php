<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "wise_db";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $rating = mysqli_real_escape_string($conn, $_POST['rating']);
    $message = mysqli_real_escape_string($conn, $_POST['message']);

    $sql = "INSERT INTO feedback (name, email, rating, message, created_at) 
            VALUES ('$name', '$email', '$rating', '$message', NOW())";

    if (mysqli_query($conn, $sql)) {
        
        echo "success";
    } else {
        echo "error";
    }
}

mysqli_close($conn);
?>
