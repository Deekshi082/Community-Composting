<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}

include('db.php');
include('compost_header.php');

// Correct query with JOIN
$query = "
    SELECT contributions.id, users.name, users.phone, users.address, contributions.waste_kg, contributions.status
    FROM contributions
    JOIN users ON contributions.user_id = users.id
";

$result = $conn->query($query);

if (!$result) {
    die("Query Failed: " . $conn->error);
}

echo "<h2 style='text-align: center; color: #2e7d32; margin-top: 30px;'>Contribution Details</h2>";
echo "<table border='1' cellpadding='8' cellspacing='0' style='width: 90%; margin: 30px auto; border-collapse: collapse; background-color: #ffffff; box-shadow: 0 0 10px rgba(0,0,0,0.1);'>";
echo "<tr style='background-color: #2e7d32; color: white;'>
        <th>Name</th>
        <th>Phone</th>
        <th>Address</th>
        <th>Contribution (kg)</th>
        <th>Status</th>
        <th>Action</th>
      </tr>";

while ($row = $result->fetch_assoc()) {
    $statusColor = $row['status'] === 'Complete' ? '#81c784' : '#ffb74d';
    echo "<tr style='text-align: center;'>
            <td style='padding: 10px;'>{$row['name']}</td>
            <td style='padding: 10px;'>{$row['phone']}</td>
            <td style='padding: 10px;'>{$row['address']}</td>
            <td style='padding: 10px;'>{$row['waste_kg']}</td>
            <td style='padding: 10px; background-color: {$statusColor}; font-weight: bold;'>{$row['status']}</td>";

    // Show "Mark as Complete" button if status is not complete
    if ($row['status'] !== 'Complete') {
        echo "<td style='padding: 10px;'>
                <form action='update_status.php' method='POST'>
                    <input type='hidden' name='contribution_id' value='{$row['id']}'>
                    <button type='submit' style='padding: 6px 12px; background-color: #388e3c; color: white; border: none; border-radius: 4px; cursor: pointer;'>Mark as Complete</button>
                </form>
              </td>";
    } else {
        echo "<td style='padding: 10px; color: gray;'>-</td>";
    }

    echo "</tr>";
}

echo "</table>";

include('compost_footer.php');
?>
