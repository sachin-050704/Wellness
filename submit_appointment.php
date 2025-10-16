<?php
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $contact = trim($_POST["contact"]);
    $date = trim($_POST["date"]);

   
    if (empty($name) || empty($email) || empty($contact) || empty($date)) {
        echo "error";
        exit();
    }

   
    $stmt = $conn->prepare("INSERT INTO appointments (name, email, contact, appointment_date) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $name, $email, $contact, $date);

    if ($stmt->execute()) {
        echo "success"; 
    } else {
        echo "error";
    }

    $stmt->close();
    $conn->close();
}
?>
