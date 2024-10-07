<?php
include '../db_connect.php';

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $delivery = $_POST['delivery'];
    $message = $_POST['message'];

    // File handling
    $file = $_FILES['prescription']['tmp_name'];   
    $fileType = $_FILES['prescription']['type']; 
    $fileContent = file_get_contents($file); 

    // Prepare SQL query to insert the form data along with the file
    $sql = "INSERT INTO prescriptions (name, email, phone, address, delivery, message, prescription_file, file_type) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?)";

    // Prepare the statement
    $stmt = $conn->prepare($sql);

    // Bind the parameters
    $stmt->bind_param("ssssssss", $name, $email, $phone, $address, $delivery, $message, $fileContent, $fileType);

    // Execute the query
    if ($stmt->execute()) {
        
        echo "<script>
                alert('Thank you, we will inform you when your package is in route.');
                window.location.href = '../Pages/prescription.php';
              </script>";
    } else {
       
        echo "<script>
                alert('Error submitting prescription: " . $conn->error . "');
                window.location.href = '../Pages/prescription.php';
              </script>";
    }

    $stmt->close();
    $conn->close();
}
?>
