<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['message_id'])) {
    $id = intval($_POST['message_id']);

    $stmt = $conn->prepare("DELETE FROM messages WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: view_message.php"); // Redirect to the messages view page
        exit;
    } else {
        echo "Error deleting message.";
    }

    $stmt->close();
}

$conn->close();
?>
