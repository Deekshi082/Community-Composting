<?php  ?>
<h2 style="text-align: center; font-family: 'Segoe UI', sans-serif; color: #388e3c; font-size: 2.5em; margin-top: 30px;">Create a Composter Account</h2>

<form action="register_process.php" method="POST" style="max-width: 400px; margin: 0 auto; padding: 20px; background-color: #f9f9f9; border-radius: 10px; box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);">
    <input type="text" name="name" placeholder="Your Name" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;">
    <input type="email" name="email" placeholder="Email Address" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;">
    <input type="tel" name="phone" placeholder="Phone Number" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;">
    <input type="text" name="address" placeholder="Address" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;">
    <input type="password" name="password" placeholder="Password" required style="width: 100%; padding: 10px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px; font-size: 1em;">
    <button type="submit" style="width: 100%; padding: 12px; background-color: #388e3c; color: white; border: none; border-radius: 5px; font-size: 1.1em; cursor: pointer;">Register</button>
</form>

<p style="text-align: center; margin-top: 20px; font-size: 1em; color: #555;">Already have an account? <a href="login.php" style="color: #388e3c; text-decoration: none; font-weight: bold;">Login here</a></p>

<?php  ?>
