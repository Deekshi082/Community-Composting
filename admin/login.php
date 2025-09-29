<?php
session_start();
include('db.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $stmt = $conn->prepare("SELECT * FROM admin_login WHERE username = ?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result && $result->num_rows > 0) {
        $admin = $result->fetch_assoc();
        if (password_verify($password, $admin['password'])) {
            $_SESSION['admin'] = $admin['username'];
            header("Location: dashboard.php");
            exit;
        } else {
            $error = "Invalid login credentials.";
        }
    } else {
        $error = "Invalid login credentials.";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Login</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f5f5f5;">

    

    <main style="display: flex; justify-content: center; align-items: center; height: 80vh;">
        <div style="background-color: white; padding: 30px; border-radius: 12px; box-shadow: 0 4px 12px rgba(0,0,0,0.1); width: 90%; max-width: 400px;">
            <h2 style="text-align: center; color: #2e7d32;">Admin Login</h2>
            <form method="post">
                <input type="text" name="username" placeholder="Username" required
                    style="width: 100%; padding: 12px; margin-bottom: 15px; border-radius: 6px; border: 1px solid #ccc; background-color: #eaf2ff;">
                <input type="password" name="password" placeholder="Password" required
                    style="width: 100%; padding: 12px; margin-bottom: 20px; border-radius: 6px; border: 1px solid #ccc; background-color: #eaf2ff;">
                <input type="submit" value="Login"
                    style="width: 100%; padding: 12px; background-color: #388e3c; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 16px;">
            </form>
            
            <?php if (isset($error)) echo "<p style='color:red; margin-top: 15px; text-align: center;'>$error</p>"; ?>
        </div>
    </main>
    <div style="text-align: center; margin-top: 15px;">
    <a href="../index.php" style="padding: 10px 20px; background-color: #eee; color: #388e3c; text-decoration: none; border-radius: 5px; font-weight: bold; display: inline-block;">← Back to Home</a>
</div>


    <script>
        function toggleDropdown() {
            const dropdown = document.getElementById("dropdownMenu");
            dropdown.style.display = (dropdown.style.display === "block") ? "none" : "block";
        }

        window.onclick = function(event) {
            if (!event.target.matches("button")) {
                const dropdown = document.getElementById("dropdownMenu");
                if (dropdown && dropdown.style.display === "block") {
                    dropdown.style.display = "none";
                }
            }
        };
    </script>

</body>
</html>
