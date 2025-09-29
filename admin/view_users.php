<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include('db.php');
include('admin_header.php');

echo "<h2 style='text-align: center; font-family: Segoe UI, sans-serif; color: #2e7d32; margin-top: 30px;'>Registered Users</h2>";

$result = $conn->query("SELECT * FROM users");

echo "<table border='1' cellspacing='0' cellpadding='10' style='margin: 30px auto; width: 90%; border-collapse: collapse; font-family: Segoe UI, sans-serif; background-color: #fefefe; box-shadow: 0 0 15px rgba(0,0,0,0.1);'>";
echo "<tr style='background-color: #2e7d32; color: white; text-align: center;'>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Phone NO</th>
        <th>Address</th>
      </tr>";

while ($row = $result->fetch_assoc()) {
    echo "<tr style='text-align: center;'>
            <td>{$row['id']}</td>
            <td>{$row['name']}</td>
            <td>{$row['email']}</td>
            <td>{$row['phone']}</td>
            <td>{$row['address']}</td>
          </tr>";
}

echo "</table>";

echo "<div style='text-align: center; margin-bottom: 30px;'>
        <a href='logout.php' style='color: white; background-color: #c62828; padding: 10px 20px; text-decoration: none; font-family: Segoe UI, sans-serif; border-radius: 5px;'>Logout</a>
      </div>";

include('admin_footer.php');
?>
