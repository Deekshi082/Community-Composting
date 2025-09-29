<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $phone    = $_POST['phone'];
    $address    = $_POST['address'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $stmt = $conn->prepare("INSERT INTO composters (name, email,password, phone,address) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $name, $email,$password, $phone, $address);

    if ($stmt->execute()) {
        header("Location: login.php?msg=registered");
    } else {
        echo "Error: " . $stmt->error;
    }
    $stmt->close();
    $conn->close();
}
?>
