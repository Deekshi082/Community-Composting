<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $waste_kg = $_POST['waste_kg'];
    $user_id = $_SESSION['user_id'];
    $today = date('Y-m-d');

    $stmt = $conn->prepare("INSERT INTO contributions (user_id, waste_kg, date_contributed) VALUES (?, ?, ?)");
    $stmt->bind_param("ids", $user_id, $waste_kg, $today);
    $stmt->execute();
    $stmt->close();
}

header("Location: user_dashboard.php");
?>
