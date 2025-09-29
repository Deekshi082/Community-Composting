<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user_id'])) {
    $userId = intval($_POST['user_id']);

    // Prepare DELETE query using the correct column: id
    $stmt = $conn->prepare("DELETE FROM users WHERE id = ?");
    
    if (!$stmt) {
        die("Prepare failed: (" . $conn->errno . ") " . $conn->error);
    }

    $stmt->bind_param("i", $userId);

    if ($stmt->execute()) {
        header("Location: view_users.php"); // redirect back to user listing
        exit;
    } else {
        echo "Error deleting user: " . $stmt->error;
    }

    $stmt->close();
}

$conn->close();
?>
