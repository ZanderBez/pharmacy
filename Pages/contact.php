<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Online Pharmacy</title>
    <link rel="stylesheet" href="../css/contact.css">
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

    <!-- Contact/Support Section -->
    <section class="contact-form">
        <h1>Contact Us</h1>
        <p>We’re here to help! Use the form below to reach out to our customer support team for assistance with your prescription or delivery inquiries.</p>

        <form action="../php/contact.php" method="POST">
            <label for="name">Full Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Phone:</label>
            <input type="tel" id="phone" name="phone" required>

            <label for="inquiry">Inquiry Type:</label>
            <select id="inquiry" name="inquiry">
                <option value="general">General Inquiry</option>
                <option value="prescription">Prescription Status</option>
                <option value="delivery">Delivery Issue</option>
            </select>

            <label for="message">Message:</label>
            <textarea id="message" name="message" rows="4" required></textarea>

            <button type="submit" class="submit-button">Submit Inquiry</button>
        </form>
    </section>

    <!-- Phone Support Section -->
    <section class="phone-support">
        <h2>Need Immediate Help?</h2>
        <p>For urgent inquiries, call our customer support team at <strong>[Phone Number]</strong>.</p>
    </section>

    <!-- FAQ Section -->
    <section class="faq">
        <h2>Frequently Asked Questions</h2>
        <ul>
            <li><strong>How long does delivery take?</strong> Delivery usually takes 24-48 hours depending on your location.</li>
            <li><strong>Can I send a repeat prescription?</strong> Yes, repeat prescriptions can be uploaded through our submission form.</li>
            <li><strong>What payment methods do you accept?</strong> We accept credit cards, debit cards, and various online payment methods.</li>
        </ul>
    </section>

</body>
</html>
