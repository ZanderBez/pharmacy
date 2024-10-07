<?php
include '../db_connect.php';

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $inquiry = $_POST['inquiry'];
    $message = $_POST['message'];

    $sql = "INSERT INTO contact_inquiries (name, email, phone, inquiry, message) 
            VALUES ('$name', '$email', '$phone', '$inquiry', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Thank you we wil be in touch shortly.');</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Online Pharmacy</title>
    <link rel="stylesheet" href="../css/contact.css">
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

    <!-- Contact/Support Section -->
    <section class="contact-form">
        <h1>Contact Us</h1>
        <p>We’re here to help! Use the form below to reach out to our customer support team for assistance with your prescription or delivery inquiries.</p>

        <form action="contact.php" method="POST">
            <label for="name"><i class="fa fa-user"></i> Full Name:</label>
            <input type="text" id="name" name="name" placeholder="Enter your full name" required>

            <label for="email"><i class="fa fa-envelope"></i> Email:</label>
            <input type="email" id="email" name="email" placeholder="Enter your email" required>

            <label for="phone"><i class="fa fa-phone"></i> Phone:</label>
            <input type="tel" id="phone" name="phone" placeholder="Enter your phone number" required>

            <label for="inquiry"><i class="fa fa-question-circle"></i> Inquiry Type:</label>
            <select id="inquiry" name="inquiry">
                <option value="general">General Inquiry</option>
                <option value="prescription">Prescription Status</option>
                <option value="delivery">Delivery Issue</option>
            </select>

            <label for="message"><i class="fa fa-comment"></i> Message:</label>
            <textarea id="message" name="message" rows="4" placeholder="Enter your message" required></textarea>

            <button type="submit" class="submit-button"><i class="fa fa-paper-plane"></i> Submit Inquiry</button>
        </form>
    </section>

    <!-- Map Section -->
    <section class="map-section">
        <h2>Our Location</h2>
        <p>Visit our physical location or get in touch with our customer support for further assistance.</p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3589.321356159123!2d28.20695667628067!3d-25.89180435132555!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1e956608911ce097%3A0x519896b4b6eda40a!2sOpen%20Window%20-%20Centurion!5e0!3m2!1sen!2sza!4v1728293862714!5m2!1sen!2sza" width="1500" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </section>

    <!-- Phone Support Section -->
    <section class="phone-support">
        <h2>Need Immediate Help?</h2>
        <p>For urgent inquiries, call our customer support team at <strong>071 582 2387</strong>.</p>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <h2>Frequently Asked Questions</h2>
        <ul>
            <li><strong>How long does delivery take?</strong> Delivery usually takes 24-48 hours depending on your location.</li>
            <br>
            <li><strong>Can I send a repeat prescription?</strong> Yes, repeat prescriptions can be uploaded through our submission form.</li>
            <br>
            <li><strong>What payment methods do you accept?</strong> We accept credit cards, debit cards, and various online payment methods.</li>
            <br>
        </ul>
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
