<?php
include ("../database/connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $created_on = time();

    // Validate data
    if (!empty($name) && !empty($email) && !empty($message) && !empty($created_on)) {
        // Insert data into database
        $sql = "INSERT INTO contact_details (buyer_name, email, message, created_on) VALUES ('$name', '$email', '$message', '$created_on')";
        if ($conn->query($sql) === TRUE) {
            // Redirect after successful insertion
            header("Location: contact.php");
            exit(); // Ensure script execution stops after redirection
        } else {
            // Error handling if query execution fails
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    } else {
        echo "Please fill in all fields.";
    }

    // Close the database connection
    $conn->close();
}
?>
