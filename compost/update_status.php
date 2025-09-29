<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contribution_id'])) {
    $id = $_POST['contribution_id'];

    $stmt = $conn->prepare("UPDATE contributions SET status = 'Complete' WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        header("Location: view.php"); // Redirect back after update
    } else {
        echo "Error updating status: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Invalid request.";
}
?>
