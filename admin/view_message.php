<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}

include('db.php');
include('admin_header.php');

// Fetch messages
$result = $conn->query("SELECT * FROM messages");

echo "<h2 style='text-align: center; color: #2e7d32; margin-top: 30px;'>Contact Form Submissions</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='width: 90%; margin: 30px auto; border-collapse: collapse; background-color: #ffffff; box-shadow: 0 0 10px rgba(0,0,0,0.1);'>";
echo "<tr style='background-color: #2e7d32; color: white;'>
        <th>Name</th>
        <th>Email</th>
        <th>Phone NO</th>
        <th>Subject</th>
        <th>Message</th>
        <th>Action</th> <!-- New Column -->
      </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr style='text-align: center;'>
            <td style='padding: 10px;'>{$row['name']}</td>
            <td style='padding: 10px;'>{$row['email']}</td>
            <td style='padding: 10px;'>{$row['phone']}</td>
            <td style='padding: 10px;'>{$row['subject']}</td>
            <td style='padding: 10px;'>{$row['message']}</td>
             <td style='padding: 10px;'>
                <form method='post' action='delete_message.php' onsubmit='return confirm(\"Are you sure you want to delete this message?\")'>
                    <input type='hidden' name='message_id' value='{$row['id']}'>
                    <input type='submit' value='Delete' style='background-color: red; color: white; border: none; padding: 6px 10px; border-radius: 4px; cursor: pointer;'>
                </form>
            </td>
          </tr>";
}

echo "</table>";

include('admin_footer.php');
?>
