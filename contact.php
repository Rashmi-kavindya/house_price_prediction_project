<?php
include "config/db.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO contact_messages (name, email, message) VALUES (?, ?, ?)");

    if (!$stmt) {
        die("SQL Error: " . $conn->error); // Show MySQL error if the query fails
    }

    // Bind parameters and execute
    $stmt->bind_param("sss", $name, $email, $message);

    if ($stmt->execute()) {
        echo "<script>alert('Message sent successfully!'); window.location.href='index.php';</script>";
    } else {
        echo "<script>alert('Error sending message. Please try again.'); window.location.href='index.php';</script>";
    }
}
?>

<!-- Sending Email
$to = "email@gmail.com";
$subject = "New Contact Message from Dream Home";
$headers = "From: " . $email;

mail($to, $subject, $message, $headers);
echo "<script>alert('Message sent successfully!'); window.location.href='index.php';</script>"; 
-->
