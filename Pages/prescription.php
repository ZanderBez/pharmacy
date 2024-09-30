<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submit Prescription - Online Pharmacy</title>
    <link rel="stylesheet" href="../css/prescription.css">
</head>
<body>

    <!-- Navbar -->
    <nav class="navbar">
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
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="address">Delivery Address:</label>
            <input type="text" id="address" name="address" required>

            <label for="delivery">Delivery Option:</label>
            <select id="delivery" name="delivery">
                <option value="delivery">Home Delivery</option>
                <option value="pickup">Pickup at Pharmacy</option>
            </select>

            <label for="prescription">Upload Prescription (PDF, JPEG, PNG):</label>
            <input type="file" id="prescription" name="prescription" accept=".pdf, .jpg, .jpeg, .png" required>

            <label for="message">Notes for Pharmacist (Optional):</label>
            <textarea id="message" name="message" rows="4"></textarea>

            <button type="submit" class="submit-button">Submit Prescription</button>
        </form>
    </section>

</body>
</html>