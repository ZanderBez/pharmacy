<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Prescription - Online Pharmacy</title>
    <link rel="stylesheet" href="../css/prescription.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
            <div class="logo">
                <img src="../Assets/Logo.png" alt="Pharmacy Logo">
            </div>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About Us</a></li>
                <li><a href="prescription.php">Submit Prescription</a></li>
                <li><a href="contact.php">Contact</a></li>
            </ul>
        </nav>

    <!-- Prescription Submission Section -->
    <section class="prescription-form">
        <h1>Submit Your Prescription</h1>
        <p>Please fill out the form below and upload your prescription. Our pharmacists will review your submission and prepare your medication for delivery or pickup.</p>

        <form action="../php/submit_prescription.php" method="POST" enctype="multipart/form-data">
            <label for="name"><i class="fa fa-user"></i> Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email"><i class="fa fa-envelope"></i> Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone"><i class="fa fa-phone"></i> Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address"><i class="fa-solid fa-location-dot"></i> Delivery Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="delivery"><i class="fa fa-question-circle"></i> Delivery Option:</label>
            <select id="delivery" name="delivery">
                <option value="delivery">Home Delivery</option>
                <option value="pickup">Pickup at Pharmacy</option>
            </select>

            <label for="prescription"><i class="fa-solid fa-upload"></i> Upload Prescription (PDF, JPEG, PNG):</label>
            <input type="file" id="prescription" name="prescription" accept=".pdf, .jpg, .jpeg, .png" required>

            <label for="message"><i class="fa fa-comment"></i> Notes for Pharmacist (Optional):</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit" class="submit-button"><i class="fa fa-paper-plane"></i> Submit Prescription</button>
        </form>


    </section>

    <footer class="footer">
    <div class="footer-container">
        <div class="social-icons">
            <a href="#" target="_blank"><i class="fab fa-facebook-f"></i></a>
            <a href="#" target="_blank"><i class="fab fa-twitter"></i></a>
            <a href="#" target="_blank"><i class="fab fa-instagram"></i></a>
        </div>
        <p>&copy; 2024 MediTrust. All rights reserved.</p>
    </div>
</footer>

</body>
</html>
