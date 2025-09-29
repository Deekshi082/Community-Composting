<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
$user_id = $_SESSION['user_id'];
$user_name = $_SESSION['user_name'];

include('compost_header.php');
?>

<div style="max-width: 700px; margin: 40px auto; padding: 30px; background-color: #ffffff; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1); font-family: Arial, sans-serif;">
    <h2 style="text-align: center; color: #2e7d32; margin-bottom: 30px;">Welcome, <?php echo htmlspecialchars($user_name); ?>! </h2>
    <ul style="list-style: none; padding: 0; margin: 0;">

        
        <li style="margin-bottom: 20px;">
            <a href="view.php" style="display: block; background-color: #4CAF50; color: white; text-decoration: none; padding: 12px 20px; border-radius: 6px; font-weight: bold; transition: background-color 0.3s;">View Composters</a>
        </li>
        <li>
            <a href="logout.php" style="display: block; background-color: #e53935; color: white; text-decoration: none; padding: 12px 20px; border-radius: 6px; font-weight: bold; transition: background-color 0.3s;">🚪 Logout</a>
        </li>
    </ul>
</div>

<?php include('compost_footer.php'); ?>
