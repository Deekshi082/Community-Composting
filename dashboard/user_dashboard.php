<?php
include '../includes/db.php';
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: ../login.php");
    exit;
}

$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

// Get user waste data
$stmt = $conn->prepare("SELECT SUM(waste_kg) AS total_waste FROM contributions WHERE user_id = ?");
$stmt->bind_param("i", $user_id);
$stmt->execute();
$result = $stmt->get_result()->fetch_assoc();
$total_waste = $result['total_waste'] ?? 0;
?>

<?php include '../header.php'; ?>
<h2 style="text-align:center; color: #2e7d32; font-family: 'Segoe UI', sans-serif; margin-top: 40px;">Welcome, <?php echo htmlspecialchars($user_name); ?>!</h2>
<p style="text-align:center; font-size: 1.2em; color: #555;">Total Waste Contributed: <strong style="color:#388e3c;"><?php echo $total_waste; ?> kg</strong></p>

<form action="contribute.php" method="POST" style="max-width: 400px; margin: 30px auto; padding: 20px; background-color: #f1f8e9; border: 1px solid #c5e1a5; border-radius: 8px; box-shadow: 0 4px 12px rgba(0,0,0,0.05); font-family: 'Segoe UI', sans-serif;">
    <label style="display: block; margin-bottom: 10px; color: #33691e;">Log new compost contribution (in kg):</label>
    <input type="number" step="0.1" name="waste_kg" required style="width: 100%; padding: 10px; border-radius: 5px; border: 1px solid #ccc; margin-bottom: 15px;">
    <button type="submit" style="width: 100%; background-color: #66bb6a; color: white; border: none; padding: 12px; border-radius: 5px; cursor: pointer;">Add Contribution</button>
</form>

<div style="text-align: center; margin-top: 20px;">
    <a href="../logout.php" style="color: #c62828; font-weight: bold; text-decoration: none; font-family: 'Segoe UI', sans-serif;">Logout</a>
</div>
<?php include '../includes/footer.php'; ?>
