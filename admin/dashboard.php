<?php
session_start();
if (!isset($_SESSION['admin'])) {
    header("Location: login.php");
    exit;
}
include('admin_header.php');
?>

<div style="max-width: 600px; margin: 50px auto; padding: 30px; background: #f9f9f9; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1);">
    <h2 style="text-align: center; color: #2e7d32; margin-bottom: 40px; font-size: 28px; font-family: 'Segoe UI', Tahoma, sans-serif;">
        Welcome, Admin!
    </h2>
    <ul style="list-style: none; padding: 0; margin: 0;">
        <li style="margin-bottom: 20px;">
            <a href="view_users.php" 
               style="display: block; background: linear-gradient(135deg, #43a047, #66bb6a); color: white; text-decoration: none; padding: 14px 22px; border-radius: 8px; font-weight: bold; font-size: 16px; font-family: 'Segoe UI', Tahoma, sans-serif; text-align: center; transition: 0.3s;">
               View Registered Users
            </a>
        </li>
        <li style="margin-bottom: 20px;">
            <a href="view_message.php" 
               style="display: block; background: linear-gradient(135deg, #43a047, #66bb6a); color: white; text-decoration: none; padding: 14px 22px; border-radius: 8px; font-weight: bold; font-size: 16px; font-family: 'Segoe UI', Tahoma, sans-serif; text-align: center; transition: 0.3s;">
               View Contact Messages
            </a>
        </li>
        <li style="margin-bottom: 20px;">
            <a href="view.php" 
               style="display: block; background: linear-gradient(135deg, #43a047, #66bb6a); color: white; text-decoration: none; padding: 14px 22px; border-radius: 8px; font-weight: bold; font-size: 16px; font-family: 'Segoe UI', Tahoma, sans-serif; text-align: center; transition: 0.3s;">
               View Composters
            </a>
        </li>
        <li>
            <a href="logout.php" 
               style="display: block; background: linear-gradient(135deg, #e53935, #ef5350); color: white; text-decoration: none; padding: 14px 22px; border-radius: 8px; font-weight: bold; font-size: 16px; font-family: 'Segoe UI', Tahoma, sans-serif; text-align: center; transition: 0.3s;">
               Logout
            </a>
        </li>
    </ul>
</div>

<?php include('admin_footer.php'); ?>
