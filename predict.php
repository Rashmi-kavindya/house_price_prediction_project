<?php

include "config/db.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the input valuse from the form
    $bedroom_count = $_POST["bedroom_count"];
    $net_sqm = $_POST["net_sqm"];
    $center_distance = $_POST["center_distance"];
    $metro_distance = $_POST["metro_distance"];
    $floor = $_POST["floor"];
    $age = $_POST["age"];

    // Prepare the command to call the Python script
    $command = escapeshellcmd("python predictions/predict.py $bedroom_count $net_sqm $center_distance $metro_distance $floor $age");

    // Execute the Python script and get the output
    $output = shell_exec($command);

    if (is_numeric($output)) {
        $predicted_price = round(floatval($output), 2);

        // Save to database
        $stmt = $conn->prepare("INSERT INTO predictions (bedroom_count, net_sqm, center_distance, metro_distance, floor, age, predicted_price) VALUES (?, ?, ?, ?, ?, ?, ?)"); 
        
        if (!$stmt) {
            die("SQL Error: " . $conn->error); // Debugging output
        }
        
        $stmt->bind_param("idddiid", $bedroom_count, $net_sqm, $center_distance, $metro_distance, $floor, $age, $predicted_price);
        $stmt->execute();

        // Redirect to results.php with the predicted price
        header("Location: results.php?price=$predicted_price");
        exit(); // Ensure script stops execution after redirection
    } else {
        // Show error message if output is not valid
        echo "<h2>Error: Invalid Prediction</h2>";
        echo "<p>Something went wrong. Please try again.</p>";
    }
}

?>