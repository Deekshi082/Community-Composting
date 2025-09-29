<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Community Composting</title>
</head>
<body style="font-family: Arial, sans-serif; margin: 0; padding: 0; background-color: #f5f5f5;">

    <header style="background-color: #4CAF50; color: white; padding: 20px 0; text-align: center;">
        <h1 style="margin: 0; font-size: 36px;">Community Composting</h1>
        <nav style="margin-top: 15px;">
            <a href="index.php" style="margin: 0 15px; color: white; text-decoration: none; font-weight: bold;">Home</a>
            <a href="about.php" style="margin: 0 15px; color: white; text-decoration: none; font-weight: bold;">About</a>
            <a href="how.php" style="margin: 0 15px; color: white; text-decoration: none; font-weight: bold;">How It Works</a>
            <a href="getinvolved.php" style="margin: 0 15px; color: white; text-decoration: none; font-weight: bold;">Get Involved</a>
            <a href="resources.php" style="margin: 0 15px; color: white; text-decoration: none; font-weight: bold;">Resources</a>
            <a href="locator.php" style="margin: 0 15px; color: white; text-decoration: none; font-weight: bold;">Bin Locator</a>
            
            <a href="testimonials.php" style="margin: 0 15px; color: white; text-decoration: none; font-weight: bold;">Testimonials</a>
            <a href="faq.php" style="margin: 0 15px; color: white; text-decoration: none; font-weight: bold;">FAQ</a>
            <a href="contact.php" style="margin: 0 15px; color: white; text-decoration: none; font-weight: bold;">Contact</a>

            <!-- Login Dropdown -->
            <div style="display: inline-block; position: relative;">
                <button onclick="toggleDropdown()" style="background-color: #4CAF50; color: white; font-weight: bold; border: none; cursor: pointer; padding: 10px 15px;">Login ▼</button>
                <div id="dropdownMenu" style="display: none; position: absolute; background-color: white; min-width: 160px; box-shadow: 0px 8px 16px rgba(0,0,0,0.2); z-index: 1;">
                    <a href="login.php" style="display: block; padding: 12px 16px; color: black; text-decoration: none; text-align: left;">User Login</a>
                    <a href="admin/login.php" style="display: block; padding: 12px 16px; color: black; text-decoration: none; text-align: left;">Admin Login</a>
                    <a href="compost/login.php" style="display: block; padding: 12px 16px; color: black; text-decoration: none; text-align: left;">Composter Login</a>
                </div>
            </div>
        </nav>
    </header>

    <main style="padding: 20px;">
        <?php
        // Your PHP code or dynamic content goes here
        ?>
    </main>

    <script>
        function toggleDropdown() {
            const menu = document.getElementById("dropdownMenu");
            menu.style.display = (menu.style.display === "block") ? "none" : "block";
        }

        // Hide dropdown when clicking outside
        window.onclick = function(event) {
            if (!event.target.matches("button")) {
                const dropdowns = document.getElementById("dropdownMenu");
                if (dropdowns && dropdowns.style.display === "block") {
                    dropdowns.style.display = "none";
                }
            }
        };
    </script>

</body>
</html>
