<?php include 'includes/header.php'; ?>
<h2 style="text-align: center; color: #2e7d32; font-family: 'Segoe UI', sans-serif; margin-top: 30px;">Contact Us</h2>

<form action="process/contact_process.php" method="POST" style="max-width: 600px; margin: 20px auto; padding: 25px; background-color: #f4f4f4; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); font-family: Arial, sans-serif;">
    <input type="text" name="name" placeholder="Your Name" required 
           style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">
    
    <input type="email" name="email" placeholder="Email Address" required 
           style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">
    
           <input type="tel" name="phone" placeholder="Phone Number" required 
       style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">


    <input type="text" name="subject" placeholder="Subject" required 
           style="width: 100%; padding: 12px; margin-bottom: 15px; border: 1px solid #ccc; border-radius: 5px;">
    
    <textarea name="message" placeholder="Your Message" rows="5" required 
              style="width: 100%; padding: 12px; border: 1px solid #ccc; border-radius: 5px; resize: vertical;"></textarea>
    
    <button type="submit" 
            style="margin-top: 15px; background-color: #4CAF50; color: white; border: none; padding: 12px 20px; border-radius: 5px; font-size: 16px; cursor: pointer;">
        Send Message
    </button>
</form>
<?php include 'includes/footer.php'; ?>
